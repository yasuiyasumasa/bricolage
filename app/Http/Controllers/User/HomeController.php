<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // 2022/02/25記載
    public function add()
    {
        return view('admin.home');
    }

}
