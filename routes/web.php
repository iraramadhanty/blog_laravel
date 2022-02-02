<?php

use App\Models\Artikel;
use App\Models\Halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    $pages = Halaman::all();

    $articles = Artikel::orderBy('created_at', 'desc')->get();

    return view('welcome', compact('pages', 'articles'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/articles')->group(function () {
    Route::get('/', function () {
    })->name('articles');

    Route::get('/{id}', function ($id) {
        $pages = Halaman::all();

        $article = Artikel::find($id);
        return view('article', compact('pages', 'article'));
    })->name('articles.show');

    Route::get('/add', function () {
    })->name('articles.add');

    Route::get('/create', function () {
    })->name('articles.create');

    Route::get('/edit', function () {
    })->name('articles.edit');

    Route::get('/update', function () {
    })->name('articles.update');

    Route::get('/delete', function () {
    })->name('articles.delete');
});

Route::prefix('/pages')->group(function () {
    Route::get('/', function () {
    })->name('pages');

    Route::get('/{id}', function ($id) {
        $pages = Halaman::all();

        $page = Halaman::find($id);
        return view('page', compact('pages', 'page'));
    })->name('pages.show');

    Route::get('/add', function () {
    })->name('pages.add');

    Route::get('/create', function () {
    })->name('pages.create');

    Route::get('/edit', function () {
    })->name('pages.edit');

    Route::get('/update', function () {
    })->name('pages.update');

    Route::get('/delete', function () {
    })->name('pages.delete');
});

Route::prefix('/users')->group(function () {
    Route::get('/', function () {
    })->name('users');

    Route::get('/{id}', function ($id) {
    })->name('users.show');

    Route::get('/add', function () {
    })->name('users.add');

    Route::get('/create', function () {
    })->name('users.create');

    Route::get('/edit', function () {
    })->name('users.edit');

    Route::get('/update', function () {
    })->name('users.update');

    Route::get('/delete', function () {
    })->name('users.delete');
});

Route::prefix('/comments')->group(function () {
    Route::get('/', function () {
    })->name('comments');

    Route::get('/{id}', function ($id) {
    })->name('comments.show');

    Route::post('/create', function (Request $request) {
    })->name('comments.create');

    Route::get('/accept', function () {
    })->name('comments.accept');

    Route::get('/reject', function () {
    })->name('comments.reject');
});
