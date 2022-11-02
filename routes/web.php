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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    $blog_posts = [
        [
            "judul" => "My Superman",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolorum dignissimos saepe! Illo a quidem quis iusto explicabo eveniet ut veritatis est quo veniam quaerat atque temporibus, laborum minima consectetur ipsam adipisci mollitia dignissimos quod excepturi quia? Tempora quidem nobis, nulla et molestias ut, enim, quod incidunt debitis non nisi officia fugiat vero fuga temporibus iste expedita cupiditate nesciunt unde sit amet quibusdam saepe! Quisquam excepturi perspiciatis fugit dignissimos sit."
        ],
        [
            "judul" => "My Superman 2",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolorum dignissimos saepe! Illo a quidem quis iusto explicabo eveniet ut veritatis est quo veniam quaerat atque temporibus, laborum minima consectetur ipsam adipisci mollitia dignissimos quod excepturi quia? Tempora quidem nobis, nulla et molestias ut, enim, quod incidunt debitis non nisi officia fugiat vero fuga temporibus iste expedita cupiditate nesciunt unde sit amet quibusdam saepe! Quisquam excepturi perspiciatis fugit dignissimos sit."
        ]
    ];
    return view('index', [
        "title" => "home",
        "posts" => $blog_posts
    ]);
});


Route::get('/about',function(){
    return view('about', [
        "title" => "about",
        "name" => "Jeta Adhisatya",
        "email" => "jeta.adhisatya@binus.ac.id",
        "linkedin" => "https://www.linkedin.com/in/jeta-adhisatya/"
    ]);
});
