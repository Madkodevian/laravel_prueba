<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /*
    public function up(): void
    {
        if (!Schema::hasColumn('books', 'author_id')) {
            Schema::table('books', function (Blueprint $table) {
                $table->unsignedBigInteger('author_id')->nullable();
                $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
            });
        }
    }
    */

    public function up()
    {
    Schema::table('books', function (Blueprint $table) {
        // Agregar protección de esquema aquí
        if (!Schema::hasColumn('books', 'author_id')) {
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id')->references('id')->on('authors');
        }
    });
    }

    public function down(): void
    {
        if (Schema::hasColumn('books', 'author_id')) {
            Schema::table('books', function (Blueprint $table) {
                $table->dropForeign(['author_id']);
                $table->dropColumn('author_id');
            });
        }
    }
};