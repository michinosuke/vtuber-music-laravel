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
use \App\Http\Resources\Artist as ArtistResource;
use \App\Models\Artist;

Route::get('/artist/{id}', function($id) {
    return Artist::find($id);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $artists = \App\Models\Artist::all();
    echo '<ul>';
    foreach($artists as $artist) {
        echo "<li>$artist->id: $artist->name</li>";
        $videos = $artist->songVideo();
        echo "<ul>";
        foreach($videos as $video){
            echo '<li><a href="https://youtube.com/watch?v='.$video->id.'">'.$video->music()->first()->name.'</a></li>';
        }
        echo "</ul>";
    }
    echo '</ul>';
});