<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class M_5pilar_blog extends Model
{
    protected $table = '5pilar_blog';
    protected $fillable = ['judul_blog', 'slug_blog', 'description_blog', 'category_blog', 'img500x280_blog', 'img900x450_blog',
                            'author_blog'];
    protected $primaryKey = 'id_blog';

    public function path(){
        return url("/parenting/{$this->id_blog}-" . Str::slug($this->judul_blog));
    }

}
