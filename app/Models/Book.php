<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['id', 'author_id', 'name', 'genre', 'publisher', 'created_at', 'updated_at'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
