<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $table = '5pilar_articles';
    protected $primaryKey = 'id_article';
    
    public static function getCategory($cate_article){
        if($cate_article=='em'){
            return 'emariage';
        } else if($cate_article=='ep'){
            return 'eparenting';
        } else if($cate_article=='ed'){
            return 'edukids';
        } else if($cate_article=='ef'){
            return 'efit';
        } else if($cate_article=='eb'){
            return 'ebusiness';
        } else {
            return 'xxx';
        }
    }
}
