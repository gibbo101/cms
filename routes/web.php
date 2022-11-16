<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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
// Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);

Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'PHP LAravel is the best thing since sliced bread']);

});

// Route::get('/read', function() {
//     $results = DB::select('select * from posts where id = ?', [1]);
  
//     return var_dump($results);

//     foreach($results as $post) {
//         return $post->title;
//     }

// });

// Route::get('/update', function() {
//     $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });


///// ORM

// Route::get('/read', function() {
//     $posts = Post::all();

//     foreach($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('/find', function() {
//     $post = Post::find(3);

//         return $post->title;
    
// });

// Route::get('/findwhere', function() {
//     $post = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();

//     return $post;
// });

// Route::get('/findmore', function() {
//     // $posts = Post::findOrFail(3);

//     // return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
// });

// Route::get('basicinsert', function() {
//     $post = new Post;

//     $post->title = 'new ORM title';
//     $post->content = 'wow ORM is easy' ;
//     $post->save();
// });

// Route::get('basicupdate', function() {
//     $post = Post::find(3);
//     $post->title = 'updated ORM title updated';
//     $post->content = 'wow ORM is easy updated' ;
//     $post->save();
// });

Route::get('/create', function() {
    Post::create(['title'=>'The Create Method', 'content'=>'Wow I\'m learning a lot with Edwin']);
});

// Route::get('/update', function() {
//     Post::where('id', 5)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor']);
// });

// Route::get('/delete', function() {
//     $post = Post::find(8);
//     $post->delete();
// });

// Route::get('/delete2', function() {
//     Post::destroy([3,4,5]);
// });

// Route::get('/readsoftdelete', function() {
//     // $post = Post::find(1);
//     // return $post;

// //    $post = Post::withTrashed()->where('id', 8)->get();
// //    return $post;

//     $post = Post::onlyTrashed()->get();
//     return $post;
// });

// Route::get('/restore', function() {
//   Post::withTrashed()->where('id', 8)->restore();
// });

Route::get('/forcedelete', function() {
  Post::onlyTrashed()->where('id', 8)->forceDelete();
});