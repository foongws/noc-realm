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

/**

Route::get('/', function () {
    return view('home');
    #$posts = App\Post::all();
    #return view('home',compact('posts'));
#	Voyager::routes();
});

**/

Route::get('/', 'HomeController@index')->name('home');

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::group(['prefix' => 'dungeon'], function () {
    Voyager::routes();
});

Route::get('login', function(){
	return view('login');
});

#Route::group(['prefix' => 'reward'], function () {
#    reward::routes();
#});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile',function () {
    return view('nocrealm.profile');
});