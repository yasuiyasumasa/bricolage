<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class BookController extends Controller
{
    public function add()
    {
        return view('user.book.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();

        unset($form['_token']);

        $book->fill($form);
        $book->save();

        return redirect('user/book/create');
    }

    public function index()
    {
        return view('user.book.index');
    }

    public function edit()
    {
        return view('user.book.edit');
    }

    public function update()
    {
        return redirect('user/book/edit');
    }

    public function delete()
    {
        return redirect('user/book');
    }

}
