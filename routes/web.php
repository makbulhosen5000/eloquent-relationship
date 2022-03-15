<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('welcome');
});

Route::get('/dashboard', function () {
    $phone = User::find(1);
    $phone = User::find(1)->phone;
    // return $phone;
    $user =Phone::find(1);
    $user = Phone::find(2)->user;
    // return $user;
    $data['users'] = User::all();
    //$data['phones'] = Phone::all();
    //return $users;

    $comment = Post::find(1);
    $comment = Post::find(1)->comment;
    //return $comment;
    $post = Comment::find(1);
    $post = Comment::find(5)->post;
    //return $post;

    $data['posts'] = Post::with('comments')->get();
   // $comments = Comment::with('posts')->get();
    //return $posts;
    //$data['newPost'] =Post::with('categories')->get();
    $data['categories'] =Category::with('posts')->get();
   // return $MyPosts;


    return view('dashboard',$data);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
