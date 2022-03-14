<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HighlightController extends Controller
{
    // 2022/02/25記載
    public function add()
    {
        return view('user.highlight.create');
    }

    public function create()
    {
        return redirect('user/highlight/create');
    }

    public function index()
    {
        return view('user/highlight');
    }

    public function edit()
    {
        return view('user.highlight.edit');
    }

    public function update()
    {
        return redirect('user/highlight/edit');
    }

    public function delete()
    {
        return redirect('user/highlight');
    }
}