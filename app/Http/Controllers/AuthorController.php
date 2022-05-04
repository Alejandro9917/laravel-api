<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function authors(){
        $authors = Author::get();

        return response()->json($authors);
    }
}
