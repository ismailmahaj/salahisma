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

Route::get('/','FrontController@showRessources');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('form',function(){
    return view('form');
});


Route::resources([
    '/accueil'=>'AccueilController',
    'backgroundImage'=>'BackgroundImageController',
    'blogs'=>'BlogController',
    'notifications'=>'NotificationController',
    'portfolios'=>'PortfolioController',
    '/showBlogs'=>'ShowBlogsController', // Code Poubelle en attente de refacto
]);

Route::get('nextBlog/{id}',function($id){
    $nextBlog = $id+1;

    return redirect('/showBlogs/'.$nextBlog);
});
