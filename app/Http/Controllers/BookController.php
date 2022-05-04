<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function books(){
        $books = Book::get()->load(['author']);

        return response()->json($books);
    }

    public function booksByAuthor($author_id){
        $books = Book::where('author_id', $author_id)->get()->load(['author']);

        return response()->json($books);
    }

    public function store(Request $request){
        try{
            $book = $request->validate([
                'author_id' => 'required',
                'name' => 'required|max:250|string',
                'genre' => 'required|max:250|string',
                'publisher' => 'required|regex:/^\d+(.\d{1,2})?$/',
            ]);

            $book = Book::create($book);
            return response()->json($book);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
        }
    }
}
