<?php

use App\Http\Controllers\FunctionalController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'getIndexPage'])->name('IndexPage');
Route::get('/artist', [MainController::class, 'getArtistPage'])->name('ArtistPage');
Route::get('/profile', [MainController::class, 'getProfilePage'])->name('ProfilePage');
Route::get('/register', [MainController::class, 'getRegisterPage'])->name('RegisterPage');
Route::get('/login', [MainController::class, 'getLoginPage'])->name('LoginPage');
Route::get('/aduuio', [MainController::class, 'getVideoPage'])->name('VideoPage');


// Admin Page Routes
Route::get('/admin', [MainController::class, 'getAdminPage'])->name('AdminPage');
Route::get('/admin/users', [MainController::class, 'getAllUsers'])->name('AllUsers');
Route::get('/admin/artists', [MainController::class, 'getAllArists'])->name('AllArtists');
Route::get('/admin/musics', [MainController::class, 'getAllMusicFiles'])->name('AllMusicFiles');
Route::get('/admin/musics/add', [MainController::class, 'addMusicFiles'])->name('addMusicFiles');
Route::get('/admin/videos', [MainController::class, 'getAllVideoFiles'])->name('getAllVideoFiles');
Route::get('/admin/videos/add', [MainController::class, 'addVideoFiles'])->name('addVideoFiles');
Route::get('/admin/Albumns', [MainController::class, 'getAllAlbumns'])->name('getAllAlbumns');


// Post Routes
Route::post('/addArtist', [FunctionalController::class, 'addArtist'])->name('addArtist');
Route::post('/addMusics', [FunctionalController::class, 'addMusics'])->name('addMusics');
Route::post('/addVideos', [FunctionalController::class, 'addVideos'])->name('addVideos');
Route::post('/addUsers', [FunctionalController::class, 'addUsers'])->name('addUsers');
Route::post('/createAlbum', [FunctionalController::class, 'createAlbum'])->name('createAlbum');

// Delete Routes
Route::delete('/deleteMusic/{id}', [FunctionalController::class,'deleteMusic'])->name('deleteMusic');
Route::delete('/deleteVideo/{id}', [FunctionalController::class,'deleteVideo'])->name('deleteVideo');
