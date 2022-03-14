<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HighlightmemoController extends Controller
{
    // 2022/02/25記載
    public function create()
    {
        return redirect('user/highlight_memo/create');
    }

    public function edit()
    {
        return view('user.highlight_memo.edit');
    }

    public function update()
    {
        return redirect('user/highlight_memo/edit');
    }

    public function delete()
    {
        return redirect('user/highlight_memo');
    }

}
