<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;
use App\Model\M_5pilar_blog;
use App\Model\Article;

class BlogCardStyle_C extends Controller
{

    function index(){
        $data = array();
        $data['blogs1'] = M_5pilar_blog::latest('created_at')
        ->paginate(4);

        return view('blog.cardstyle.cardstyle', compact("data"));

    }

    function getSingle($slug){
        $slug = Article::where('slug_article', $slug)->firstOrFail();
        return view('blog.cardstyle.getsinglestyle', compact("slug"));
    }

    // public function getSingle($id, $slug = '')
    // {
    //    $post = M_5pilar_blog::findOrFail($id);
    //    if ($slug !== $post->slug) {
    //          return redirect()->to($post->url);
    //    }
    //    return view('blog.cardstyle.getsinglestyle')
    //        ->withPost($post);
    // }


    function checkDb(){
        // $blog = DB::select('select * from 5pilar_blog');
        // print_r($blog);
        // echo "we are here";

        // ==== GET ALL DATA ==== \\
        // $blog = DB::table('5pilar_blog')->get();
        // return $blog;

        // ==== GET WHERE CONDITION DATA ====
        // $blog = DB::table('5pilar_blog')
        // ->where('category_blog', 'PRODUCT')
        // ->get();
        // return $blog;
        
        // $blog = M_5pilar_blog::find(1);
        // return $blog;
        
        $blog = DB::table('5pilar_blog')->count();
        return $blog;
    }
}
