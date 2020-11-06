<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    public function home()
    {

        return view('home')->with('books', Book::all());
    }

    public function show($id)
    {

        return view('show', ['book' => Book::find($id)]);
    }
}
