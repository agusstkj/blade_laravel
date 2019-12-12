<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'Home_C@index');

Route::get('/emariage', 'BlogCardStyle_C@index');

Route::get('/blog-listing', 'BlogListingStyle_C@index');

// Route::get('/parenting/{id}/{slug?}', ['as' => 'parenting.single', 'uses' => 'BlogCardStyle_C@getSingle'])
//     ->where('slug', '[\w\d\-\_]+');
Route::get('/parenting/{slug}', 'BlogCardStyle_C@getSingle');

Route::get('/db', 'BlogCardStyle_C@checkDb');

//Link Untuk Template
Route::get('/template-blog-card-style', 'Template@cardstyle');
Route::get('/template-listing', 'Template@listing');
Route::get('/template-blog-profile', 'Template@blogprofile');
Route::get('/template-single-article', 'Template@singlearticle');

//Link Untuk Artikel
Route::get('/articles/', 'Articles_C@index');
Route::get('/emariage/', 'Emariage_C@index');
Route::get('/eparenting/', 'Eparenting_C@index');
Route::get('/edukids/', 'Edukids_C@index');
Route::get('/efit/', 'Efit_C@index');
Route::get('/ebusiness/', 'Ebizniz_C@index');
Route::get('/xxx/', 'Xxx_C@index');

//Link Untuk Artikel
Route::get('/emariage/{slug}', 'Home_C@getArticle')->name('article_emariage');
Route::get('/eparenting/{slug}', 'Home_C@getArticle');
Route::get('/edukids/{slug}', 'Home_C@getArticle');
Route::get('/efit/{slug}', 'Home_C@getArticle');
Route::get('/ebusiness/{slug}', 'Home_C@getArticle');
Route::get('/xxx/{slug}', 'Home_C@getArticle');

