<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    // 2022/02/25記載
    public function add()
    {
        return view('admin.book.create');
    }

    public function create()
    {
        return redirect('admin/book/create');
    }

    public function index()
    {
        return view('admin/book');
    }

    public function edit()
    {
        return view('admin.book.edit');
    }

    public function update()
    {
        return redirect('admin/book/edit');
    }

    public function delete()
    {
        return redirect('admin/book');
    }

}
