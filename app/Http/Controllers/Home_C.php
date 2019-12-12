<?php

namespace App\Http\Controllers;

use View;
use App\Model\Article;
use App\Model\Carousel;
use App\Model\Contributor;
use Illuminate\Http\Request;



class Home_C extends Controller
{
    public function index(){

        $take_article = 6;
        
        $data = array(
            'carousels' => Carousel::all(),
            'articles' => Article::latest()->take($take_article)->get(),
            'contributors' => Contributor::all()
        );
        return View::make('home.homestyle', $data);

    }

    public function getArticle($slug){
        // $slug = Article::where('slug_article', $slug)->firstOrFail();
        // return view('blog.cardstyle.getsinglestyle', compact("slug"));
        $data = array(
            'slug' => Article::where('slug_article', $slug)->firstOrFail(),
            
            //count
            'all_count' => Article::get()->count(),
            'emariage_count' => Article::where('cate_article','em')->count(),
            'eparenting_count' => Article::where('cate_article','ep')->count(),
            'edukids_count' => Article::where('cate_article','ed')->count(),
            'efit_count' => Article::where('cate_article','ef')->count(),
            'ebizniz_count' => Article::where('cate_article','eb')->count()
            

        );

        return View::make('article.getarticle', $data);
    }

    public function cardArticle(){
        // return View::make('article.getarticle', $data);
        return "Agus";
    }
}
