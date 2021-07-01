<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\FEController@trangchu');

 /*Route::get('index1',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);*/

Route::group(['prefix'=>'search'],function(){
	Route::get('/','App\Http\Controllers\FEController@getSearch');
});


Route::middleware(['auth:sanctum', 'verified'])->get('index', 'App\Http\Controllers\PageController@getIndex');
Route::get('home', 'App\Http\Controllers\FEController@trangchu');
Route::get('chitiettintuc/{id}', 'App\Http\Controllers\FEController@chitiettintuc');
Route::get('loaitin/{type}','App\Http\Controllers\FEController@loaitin');

Route::get('chitietvideo/{id}', 'App\Http\Controllers\FEController@chitietvideo');
Route::get('video-huong-dan','App\Http\Controllers\FEController@video');

Route::post('/comment','App\Http\Controllers\FEController@Comment')->name('home.comment');


Route::group(['prefix'=>'chuyenmuc'],function(){
	Route::middleware(['auth:sanctum','verified','authadmin'])->group(static function () {
	Route::get('/','App\Http\Controllers\PageController@getChuyenmuc');
	Route::get('add','App\Http\Controllers\PageController@getAddChuyenmuc');
	Route::post('add','App\Http\Controllers\PageController@postAddChuyenmuc');
	Route::get('delete/{id}','App\Http\Controllers\PageController@destroy');
	Route::get('edit/{id}','App\Http\Controllers\PageController@getSuaCM');
	Route::post('edit/{id}','App\Http\Controllers\PageController@postSuaCM');
});
});

Route::group(['prefix'=>'tintuc'],function(){
	Route::middleware(['auth:sanctum','verified','authadmin'])->group(static function () {
		Route::get('/','App\Http\Controllers\PageController@getTintuc');
		Route::get('add','App\Http\Controllers\PageController@getAddTin');
		Route::post('add','App\Http\Controllers\PageController@postAddTin');
		Route::get('delete/{id}','App\Http\Controllers\PageController@delete');
		Route::get('edit/{id}','App\Http\Controllers\PageController@getEditTin');
		Route::post('edit/{id}','App\Http\Controllers\PageController@postEditTin');
	});
});

Route::group(['prefix'=>'user'],function(){
	Route::middleware(['auth:sanctum','verified','authadmin'])->group(static function () {
		Route::get('/','App\Http\Controllers\UserController@getDanhSach');
		Route::get('add','App\Http\Controllers\UserController@getThem');
		Route::post('add','App\Http\Controllers\UserController@postThem');
		Route::get('delete/{id}','App\Http\Controllers\UserController@delete');
		Route::get('edit/{id}','App\Http\Controllers\UserController@getSua');
		Route::post('edit/{id}','App\Http\Controllers\UserController@postSua');
    });
});

Route::group(['prefix'=>'comment'],function(){
	Route::middleware(['auth:sanctum','verified','authadmin'])->group(static function () {
		Route::get('/','App\Http\Controllers\CommentController@getDanhSach');
		Route::get('delete/{id}','App\Http\Controllers\CommentController@delete');
		Route::get('/unactive/{id}','App\Http\Controllers\CommentController@unactive');
		Route::get('/active/{id}','App\Http\Controllers\CommentController@active');
	});
});

Route::group(['prefix'=>'video'],function(){
	Route::middleware(['auth:sanctum','verified','authadmin'])->group(static function () {
		Route::get('/','App\Http\Controllers\VideoController@getVideo');
		Route::get('add','App\Http\Controllers\VideoController@getAddVideo');
		Route::post('add','App\Http\Controllers\VideoController@postAddVideo');
		Route::get('delete/{id}','App\Http\Controllers\VideoController@delete');
		Route::get('edit/{id}','App\Http\Controllers\VideoController@getEditVideo');
		Route::post('edit/{id}','App\Http\Controllers\VideoController@postEditVideo');
	});
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
