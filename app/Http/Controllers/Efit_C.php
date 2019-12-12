<?php

namespace App\Http\Controllers;

use View;
use App\Model\Article;
use Illuminate\Http\Request;

class Efit_C extends Controller
{
    public function index(){

        $data = array(
            'articles' => Article::where('cate_article', 'ef')->latest()->paginate(6)
        );
        return View::make('efit.efitstyle', $data);

    }
}
