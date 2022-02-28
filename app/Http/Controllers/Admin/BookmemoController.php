<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookmemoController extends Controller
{
    // 2022/02/27記載

    public function edit()
    {
        return view('admin.book_memo.edit');
    }

    public function update()
    {
        return redirect('admin/book_memo/edit');
    }

    public function delete()
    {
        return redirect('admin/book_memo');
    }
    
}
