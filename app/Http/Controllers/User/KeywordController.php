<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeywordController extends Controller
{
    public function create()
    {
        return redirect('user/keyword/create');
    }

    public function edit()
    {
        return view('user.keyword.edit');
    }

    public function update()
    {
        return redirect('user/keyword/edit');
    }

    public function delete()
    {
        return redirect('user/keyword');
    }
}
