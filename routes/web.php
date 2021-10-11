<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Photo;
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
    $data1 = Article::all();
    
    return view('pages/home',compact("data1"));
});



Route::get('/dashboard', function () {
    return view('backoffice/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/article', ArticleController::class);
