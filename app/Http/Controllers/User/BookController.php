<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    // 2022/02/25記載
    public function add()
    {
        return view('user.book.create');
    }

    public function create(Request $request)
    {
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
