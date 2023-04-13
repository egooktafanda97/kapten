<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

Route::get('/welcome', function () {
    return view("welcome");
});

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"]);
Route::get('/porto/{id?}', [\App\Http\Controllers\HomeController::class, "project"]);

Route::get('/noted', [\App\Http\Controllers\NotedController::class, "readed"]);
Route::get('/new-noted', [\App\Http\Controllers\NotedController::class, "index"]);


Route::get('/blog', [\App\Http\Controllers\PostController::class, "show_list"]);
Route::get('/blog/{slug}', [\App\Http\Controllers\PostController::class, "show"]);


Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'));

    $post = Post::all();
    foreach ($post as $post) {
        $sitemap->add(Url::create("/post/{$post->slug}"));
    }
    $sitemap->writeToFile(public_path('sitemap.xml'));
});
