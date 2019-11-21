<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCardStyle_C extends Controller
{
    function index(){
        return view("Blog.CardStyle.cardstyle");
    }
}
