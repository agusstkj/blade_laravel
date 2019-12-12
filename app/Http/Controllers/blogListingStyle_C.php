<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;
use App\Model\Article;

class blogListingStyle_C extends Controller
{
    function index(){

        // return view('blog.listingstyle.listingstyle');
        $data = array();
        $data['blogs1'] = Article::latest('created_at')
        ->paginate(4);

        return view('blog.listingstyle.listingstyle', compact("data"));

    }
}
