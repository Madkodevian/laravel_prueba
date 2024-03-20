<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'titulo', 'paginas', 'curso', 'asignatura'];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }

}
