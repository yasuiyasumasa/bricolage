<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeywordController extends Controller
{
    public function create()
    {
        return redirect('admin/keyword/create');
    }

    public function edit()
    {
        return view('admin.keyword.edit');
    }

    public function update()
    {
        return redirect('admin/keyword/edit');
    }

    public function delete()
    {
        return redirect('admin/keyword');
    }
}
