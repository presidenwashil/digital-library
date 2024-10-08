<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Copy;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function read(Book $book)
    {
        return view('books.read', [
            'book' => $book
        ]);
    }
}
