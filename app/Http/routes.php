<?php

use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
use App\User;
use Carbon\Carbon;

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

    return view('welcome');



});

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

Route::get('/insert', function(){

   DB::insert('insert into posts(title, content, user_id) values(?, ?, ?)', ['php with laravel', 'php laravel the best',
       '1']);


});

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

//Route::get('/delete', function() {
//
//    $delete = DB::delete('delete from posts where id = ?', [1]);
//
//    return $delete;
//});


/*Eloquent*/

//Route::get('/find', function(){
//
//    $posts = Post::all();
//
//
//
//    foreach($posts as $post) {
//       return $post->title;
//    }
//
//
//});


//Route::get('/findwhere', function() {
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});
//
//Route::get('/findmore', function() {
//
////   $posts = Post::findOrFail(1);
////
////   return $posts;
//
//    $posts = Posts::where('users_count', '<', 50)->firstOrFail();
//
//    return  $posts;
//
//});


//Route::get('/basicinsert', function() {
//
//    $post = new Post;
//
//    $post->title = 'New post title';
//    $post->content = 'New content of the post';
//
//    $post->save();
//
//});
//
//
//Route::get('/create', function(){
//
//    Post::create(['title'=>'the create method', 'content'=>'wow something aobout content']);
//});

//Route::get('/update', function() {
//
//        Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'new php title', 'content'=>'pancakes lol']);
//});


//Route::get('/delete', function(){
//
//    $post = Post::find(2);
//
//    $post->delete();
//
//});

//Route::get('/delete2', function(){
//
//    Post::destroy([4,5]);
//
//});


//Route::get('/softdelete', function(){
//
//    Post::find(7)->delete();
//
//
//});
//
//Route::get('/readsoftdelete', function(){
//
////    $post = Post::find(7);
////    return $post->title;
//
////   $post =  Post::withTrashed()->where('id', 7)->get();
////
////    return $post;
//
//
//    $post = Post::onlyTrashed()->where('id', 7)->get();
//
//    return $post;
//
//});

//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});

//
//Route::('/forcedelete', function(){
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});

/* eloquent reletionships*/

//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post;
//
//});
//
//Route::get('/post/{id}/user', function($id){
//
//
//    return Post::find($id)->user->name;
//
//});

//Route::get('/posts', function() {
//
//        $user = User::find(1);
//
//        foreach($user->posts as $post) {
//
//            echo $post->title . "<br>";
//
//        }
//});

//Route::get('/user/{id}/role', function($id){
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//
////    foreach($user->roles as $role){
////        return $role->name;
////    }
//
//});

/*Intermiate table*/

//Route::get('/user/pivot', function(){
//
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//
//        echo $role->pivot->created_at;
//
//    }
//});
//
//Route::get('/user/country',function(){
//
//    $country = Country::find(2);
//
//    foreach($country->posts as $post) {
//
//        return $post->title;
//    }
//
//});


/*Polymophic relations*/

//Route::get('/user/photos', function() {
//
//    $user = User::find(1);
//
//    foreach($user->photos as $photo) {
//
//        return $photo;
//
//    }
//
//});

//Route::get('/photo/{id}/post', function($id){
//
//    $photo =Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});

//Route::get('/post/tag', function(){
//
//    $post = Post::find(1);
//
//    foreach($post->tags as $tag) {
//
//        echo $tag->name;
//    }
//});

//Route::get('/tag/post',function() {
//
//    $tag = Tag::find(2);
//
//    foreach($tag->posts as $post) {
//        echo $post->title;
//    }
//
//});

//CRUD aplication



Route::group(['middleware' => 'web'], function () {

    Route::resource('/posts', 'PostController');


    Route::get('/dates', function(){

        $date = new DateTime('+1 week');
        echo $date->format('m-d-Y');

        echo '<br>';


        echo Carbon::now()->addDays('4 days')->diffForHumans();

        echo '<br>';

        echo Carbon::now()->subMonths(5)->diffForHumans();

        echo '<br>';

        echo Carbon::now()->yesterday()->diffForHumans();
    });


    Route::get('/getname', function(){
        $user = User::find(1);

        echo $user->name;

    });

    Route::get('/setname', function(){
        $user = User::find(1);

        $user->name = "Mariusz";

        $user->save();

    });
});