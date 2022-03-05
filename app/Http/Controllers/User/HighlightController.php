<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HighlightController extends Controller
{
    // 2022/02/25記載
    public function add()
    {
        return view('admin.highlight.create');
    }

    public function create()
    {
        return redirect('admin/highlight/create');
    }

    public function index()
    {
        return view('admin/highlight');
    }

    public function edit()
    {
        return view('admin.highlight.edit');
    }

    public function update()
    {
        return redirect('admin/highlight/edit');
    }

    public function delete()
    {
        return redirect('admin/highlight');
    }
}