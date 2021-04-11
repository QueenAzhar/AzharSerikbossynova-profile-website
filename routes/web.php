<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Employee;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmployeeController;


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
        'title' =>'Khan ',
        'body' =>' Its website also includes supplementary practice exercises'
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

Route ::get('/blog',[BlogController::class,'index']);

Route ::get('blog/create',function() {
    return view('blog.create');
});
Route::post('blog/create',[BlogController::class,'store'])->name('add-post');

Route::get('post/{id}',[BlogController::class,'get_post']);

Route::get('/employee','App\Http\Controllers\EmployeeController@index');
Route::post('/addimage','App\Http\Controllers\EmployeeController@store')->name('addimage');

Route::get('/employeepage','App\Http\Controllers\EmployeeController@display');

Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::get('locale/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();

});