<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with('publisher')->get();
        return view('book.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id)->load('publisher');
        return view('book.detail', ['book' => $book]);
    }

}
