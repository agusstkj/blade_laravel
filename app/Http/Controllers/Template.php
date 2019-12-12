<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class Template extends Controller
{
    
    //blog
    public function cardstyle(){
        return View::make('template.blog.cardstyle');
    }

    public function listing(){
        return View::make('template.blog.listing');
    }

    public function blogprofile(){
        return View::make('template.blog.blogprofile');
    }

    public function singlearticle(){
        return View::make('template.blog.singlearticle');
    }
}
