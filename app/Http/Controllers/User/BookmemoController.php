<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookmemoController extends Controller
{
    // 2022/02/27記載

    public function edit()
    {
        return view('user.book_memo.edit');
    }

    public function update()
    {
        return redirect('user/book_memo/edit');
    }

    public function delete()
    {
        return redirect('user/book_memo');
    }
    
}
