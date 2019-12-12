<?php

namespace App\Http\Controllers;

use View;
use App\Model\Article;
use Illuminate\Http\Request;

class Articles_C extends Controller
{
    public function index(){

        $data = array(
            'articles' => Article::latest()->paginate(6)
        );
        return View::make('Article.articlestyle', $data);

    }
}

