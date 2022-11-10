<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "Hi about page";
// });


// Route::get('/contact', function () {
//     return "Hi I am the contact page";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number ". $id ." ". $name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function() {
//     $url = route('admin.home');
//     return "this url is ". $url;
// }));




// Route::get('/', [EdwinsController::class, 'index']); 

// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('posts', PostsController::class);
Route::get('/contact', [PostsController::class, 'contact']);

Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);

