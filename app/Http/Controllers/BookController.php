<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $data = Book::with('publisher')->get();
        return view('book.index')->with('books', $data);
    }

    public function show($id)
    {
        $data = Book::find($id)->load('publisher');
        return view('book.detail')->with('book', $data);
    }

}
