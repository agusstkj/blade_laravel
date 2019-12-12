<?php

namespace App\Http\Controllers;

use View;
use App\Model\Article;
use Illuminate\Http\Request;

class Edukids_C extends Controller
{
    public function index(){

        $data = array(
            'articles' => Article::where('cate_article', 'ed')->latest()->paginate(6)
        );
        return View::make('edukids.edukidsstyle', $data);

    }
}
