<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post/create',function(){
    DB::table('post')->insert([
        'title' =>'Khan Academy',
        'body' =>' Its website also includes supplementary practice exercises and materials for educators.',
        'title' =>'Daryn talaby',
        'body' =>' Acamedy allarga le proprie competenze con l',
        'title' =>'Dostyk bilim',
        'body' =>'Обучение английскому языку — кропотливый процесс. Овладеть им в совершенстве за 1-2 месяца — невозможно. '
    ]);
    
});
Route::get(' /post',function(){
        $results =Post::all();
        echo "<h1>This is data of post</h1>";
        foreach($results as $post){
            echo "<b>id is: </b>".$post->id;
            echo "<br>";
            echo "<b>title is: </b>".$post->title;
            echo "<br>";
            echo "<b>body is: </b>".$post->body;
            echo "<br>";
        }
    });