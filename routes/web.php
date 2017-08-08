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

use Illuminate\Support\Facades\View;

Route::get('/', ["as" => "homepage",function () {
    return view('welcome');
}]);

//Route::resource('books',"BooksController");

Route::get("author/all",function(){
    return DB::table('users')->get();
});

Route::get("author/{author}","AuthorController");

Route::get("books/{book_name}",function(App\Book $book_name){
//    var_dump($book_name->);
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get("/about",function(){
    return view("about_us");
});
Route::get("/contact",function(){
    return view("contact_us");
});

Route::resource("posts","PostsController");

Route::get("posts/test","PostsController@test");

Route::post("posts/{post}/comments","CommentsController@store");



//Route::get("/register","RegisterController@create");
//Route::post("/register","RegisterController@store");
//
//Route::get("/login","SessionController@create");