<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HighlightmemoController extends Controller
{
    // 2022/02/25記載
    public function create()
    {
        return redirect('admin/highlight_memo/create');
    }

    public function edit()
    {
        return view('admin.highlight_memo.edit');
    }

    public function update()
    {
        return redirect('admin/highlight_memo/edit');
    }

    public function delete()
    {
        return redirect('admin/highlight_memo');
    }

}
