<?php

use Illuminate\Support\Facades\DB;
use App\Country;
use App\Post;
use App\User;
use App\Photo;
use App\Tag;

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

route::get('/', function () {
    return view('welcome');
});

// route::get('/about', function () {
//     return "Hi";
// });

// route::get('/contact', function () {
//     return "hi i am contact";
// });

// route::get('/post/{id}', function ($id) {
//     return "cia numeris". $id;
// });

// route::get('/admin/posts/example', array('as'=>'admin.home',function () {
//     $url = route('admin.home');
//     return "url: ". $url;
// }));

//route::get('/post/{id}', 'PostsController@index');

//route::resource('posts','PostsController');

// route::get('/contact', 'PostsController@contact');

// route::get('post/{id}', 'PostsController@show_post');

// route::get('/insert', function(){

//     DB::insert('insert into posts(title, content) values(?, ?)',['laravel is awsome','laravel is the best thing that happened to php, Period']);
// });

// route::get('/read', function(){
//    $results =  DB::select('select * from posts where id=?', [1]);
  
//     // foreach ($results as $post){

//     //     return $post->title;
//     // }
//     return $results;

// });

// route::get('/update', function()
// {

//     $updated = DB::update('update posts set title="updated title" where id=?',[1]);

//     return $updated;
// });
// route::get('/delete', function(){

//     $deleted = DB::delete('delete from posts where id=?', [1]);

//         return $deleted;
// });

//ELOQUENT//

// route::get('/read', function(){

//     $posts = Post::all();

//     foreach ($posts as $post){
//         return $post->title;
//     }

// });

// route::get('/find', function(){

//     $posts = Post::find(2);

//     return $posts->title;

// });

// route::get('/findwhere', function(){

//     $posts = Post::where('id', 3)->orderBy('id','desc')->take(1)->get();

//     return $posts;

// });

// route::get('/findmore', function(){

//     // $posts = Post::findOrFail(1);

//     // return $posts;

//     $posts = Post::where('users_count','<', 50)->firstOrFail();
// });

// route::get('basicinsert', function(){

//     $post = new Post;
//     $post->title = 'new eloquent title';
//     $post->content = 'Wow elquent is cool, look at this content';

//     $post->save();


//  });

// route::get('basicinsert2', function(){

//     $post = Post::find(2);
//     $post->title = 'new eloquent title 2';
//     $post->content = 'Wow elquent is cool, look at this content 2';

//     $post->save();


// });

// route::get('/create', function(){

//     Post::create(['title'=>'create method', 'content'=>'wow i\' am learning a lot on php']);
// });

// route::get('/update', function(){

//     Post::where('id',2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'my instructor dsadasda']);

// });

// route::get('/delete', function(){

//     $post = Post::find(2);
//     $post->delete();

// });

// route::get('/delete2', function(){

//     Post::destroy(4,5);

//     Post::where('is_admin', 0)->delete();
// });

// route::get('/softdelete', function(){
    
//     Post::find(1)->delete();

// });

// route::get('/readsoftdelete', function(){
    
//     // $post = Post::find(7);

//     // return $post;
//     //$post = Post::withTrashed()->where('id',7)->get();

//     $post = Post::onlyTrashed()->where('id',7)->get();

//     return $post;
// });

// route::get('/restore', function(){

//     Post::withTrashed()->where('is_admin',0)->restore();
// });

// route::get('/forcedelete', function(){

// Post::onlyTrashed()->where('is_admin',0)->forceDelete();

// });

//---------ELOQUENT relationships---------//
//-----ONE to ONE-----//
// route::get('/user/{id}/post', function($id){

//     return User::find($id)->post->content;

// });

// route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });
// //----ONE to MANY----//

// route::get('/posts', function(){

//     $user = User::find(1);
    
//     foreach($user->posts as $post){
//         echo $post->title ."<br>";
//     }

// });

// //--------Many to Many-------//

// route::get('/user/{id}/role', function($id){

//     $user = User::find($id)->orderBy('id', 'asc')->get();

//     return $user;

//     // foreach($user->roles as $role){

//     //     return $role->name;
//     // }


// });
//-------Accessing the intermediate table/pivot-------//

// route::get('/user/pivot', function(){

//     $user = User::find(1);

//     foreach($user->roles as $role){

//         return $role->pivot->created_at;
//     };

// });

// route::get('/user/country', function(){

//     $country = Country::find(2);

//     foreach($country->posts as $post){

//         return $post->title;
//     }

// });

//-------Polymorphic relations-------//

// route::get('/user/{id}/photos', function($id){

//     $user = User::find($id);

//         foreach($user->photos as $photo){

//         echo $photo->path. "<br>";
//     }



// });

// route::get('/photo/{id}/post', function($id){

//     $photo = Photo::findOrfail($id);

//     return $photo->imageable;

// });
//-------Polymorphic relations many to many-------//


// route::get('/post/tag', function(){

//     $post = Post::find(1);

//     foreach($post->tags as $tag)

//     echo $tag->name;
// });

route::get('/tag/post', function(){

    $tag = Tag::find(2);
    foreach($tag->posts as $post){

        echo $post->title;
    }

});