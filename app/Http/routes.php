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

//Route::get('', function () {
//
//    return view('welcome');
//
//
//
//});

//Route::get('/about', function () {
//
//    return "about page";
//
//});
//
//Route::get('/contact', function () {
//
//    return "contact";
//
//});
//
//Route::get('/post/{id}/{name}', function($id, $name) {
//
//    return "This is post number ". $id . " ". $name;
//
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//
//    $url = route('admin.home');
//
//
//
//    return "this url is ". $url;
//
//
//}));

//Route::get('/post/{id}', 'PostController@index');
//
//Route::resource('posts', 'PostController');
//
//Route::get('/contact', 'PostController@contact');
//
//Route::get('post/{id}', 'PostController@show_post');

/* Database RAW SQL */

//Route::get('/insert', function(){
//
//   DB::insert('insert into posts(title, content) values(?, ?)', ['php with laravel', 'php laravel the best']);
//
//
//});

//Route::get('/read', function() {
//
//    $results = DB::select('select * from posts where id= ?', [1]);
//
//   foreach($results as $post){
//       return $post -> content;
//   }
//
//});


//Route::get('/update', function() {
//
//    $updated = DB::update('update posts set title="updated title" where id = ?', [1]);
//
//    return $updated;
//});

Route::get('/delete', function() {

    $delete = DB::delete('delete from posts where id = ?', [1]);

    return $delete;
});
Route::group(['middleware' => ['web']], function () {


});