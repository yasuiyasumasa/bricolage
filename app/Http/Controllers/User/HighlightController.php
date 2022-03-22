<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Highlight;

class HighlightController extends Controller
{
    public function add()
    {
        return view('user.highlight.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Highlight::$rules);
        $highlight = new Highlight;
        $form = $request->all();

        unset($form['_token']);

        $book->fill($form);
        $book->save();

        return redirect('user/highlight/create');
    }

    public function index()
    {
        return view('user.highlight.index');
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