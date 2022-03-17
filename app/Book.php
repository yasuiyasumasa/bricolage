<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //　2022/03/17追記
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
