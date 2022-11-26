<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $book = Publisher::all()->load('books');
        return view('publisher', ['publishers' => $book]);
    }
}
