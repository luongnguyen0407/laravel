<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function detail($id)
    {
        return view('post.post', ['id' => $id, 'b' => 56]);
    }
}
