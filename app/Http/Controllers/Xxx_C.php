<?php

namespace App\Http\Controllers;

use View;
use App\Model\Article;
use Illuminate\Http\Request;

class Xxx_C extends Controller
{
    public function index(){

        $data = array(
            'articles' => Article::where('cate_article', 'xx')->latest()->paginate(6)
        );
        return View::make('xxx.xxxstyle', $data);

    }
}
