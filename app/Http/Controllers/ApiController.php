<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use PhpParser\Node\Stmt\TryCatch;

class ApiController extends Controller
{
    public function index(){
        $libros = Books::with('author')->get();
        return response()->json($libros);
    }

    public function store(Request $request){
        try{
            $request->validate([
                'id' => 'required|integer',
                'isbn' => 'required|string',
                'titulo' => 'required|string',
                'author_id' => 'required|integer',
                'paginas' => 'required|integer',
                'curso' => 'required|string',
                'asignatura' => 'required|string',
            ]);

            $book = new Books();
            $book->id = $request->input('id');
            $book->isbn = $request->input('isbn');
            $book->titulo = $request->input('titulo');
            $book->author_id = $request->input('author_id');
            $book->paginas = $request->input('paginas');
            $book->curso = $request->input('curso');
            $book->asignatura = $request->input('asignatura');
            $book->save();

            return response()->json($book,201);
        } catch(\Exception $e) {
            return response()->json(['error' => 'Error', 'message' => $e->getMessage()], 500);
        }        
    }

    public function destroy($id){
        $book = Books::find($id);

        if(!$book){
            return response()->json(['message' => 'El libro no esta'],404);
        }else{
            $book->delete();
        }

        return response()->json(['message' => 'Libro eliminado'],200);
    }
}
