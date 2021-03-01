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
        
       
    ]);
    
});
Route::get('/post',function(){
        $results =Post::all();
        echo "<h1>This is data of post</h1>";
        echo '<table>';
        foreach($results as $post){
           echo "<tr>";
            echo "<td><b>Blog id </b></td>";
            echo "<td><b>Blog title </b></td>";
            echo "<td><b>Blog body </b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$post->id."</td>";
            echo "<td>".$post->title."</td>";
            echo "<td>".$post->body."</td>";
            echo "</tr>";
           
        }
        echo '</table>';

        return view('post');
    });