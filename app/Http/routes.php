<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$videos = \App\VideoReelList::all();
    return view('videos.index', compact('videos'));
});


Route::resource('videos', 'VideosController');
Route::resource('photos', 'PhotosController');