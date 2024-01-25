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
Route::get('/artist/{id}', [MainController::class, 'getArtistPage'])->name('ArtistPage');
Route::get('/profile', [MainController::class, 'getProfilePage'])->name('ProfilePage');
Route::get('/register', [MainController::class, 'getRegisterPage'])->name('RegisterPage');
Route::get('/login', [MainController::class, 'getLoginPage'])->name('login');
Route::get('/video/{id}', [MainController::class, 'getVideoPage'])->name('VideoPage');
Route::get('/music/{id}', [MainController::class, 'getMusicPage'])->name('MusicPage');
Route::get('/c/{genre}', [MainController::class, 'getGenrePage'])->name('GenrePage');
Route::get('/audio', [MainController::class, 'getAudioFiles'])->name('AudioFiles');
Route::get('/movies', [MainController::class, 'getVideoFiles'])->name('getVideoFiles');

// Search Route
Route::get('/search', [FunctionalController::class, 'search'])->name('search');
Route::get('/searchv', [FunctionalController::class, 'searchVideo'])->name('searchVideo');



Route::middleware(['admin'])->group(function () {

    // Admin Page Routes
    Route::get('/admin', [MainController::class, 'getAdminPage'])->name('AdminPage');
    Route::get('/admin/users', [MainController::class, 'getAllUsers'])->name('AllUsers');
    Route::get('/admin/artists', [MainController::class, 'getAllArists'])->name('AllArtists');
    Route::get('/admin/musics', [MainController::class, 'getAllMusicFiles'])->name('AllMusicFiles');
    Route::get('/admin/musics/add', [MainController::class, 'addMusicFiles'])->name('addMusicFiles');
    Route::get('/admin/videos', [MainController::class, 'getAllVideoFiles'])->name('getAllVideoFiles');
    Route::get('/admin/videos/add', [MainController::class, 'addVideoFiles'])->name('addVideoFiles');
});

Route::get('/logout', [FunctionalController::class, 'logout'])->name('logout');

// Post Routes
Route::post('/addArtist', [FunctionalController::class, 'addArtist'])->name('addArtist');
Route::post('/addMusics', [FunctionalController::class, 'addMusics'])->name('addMusics');
Route::post('/addVideos', [FunctionalController::class, 'addVideos'])->name('addVideos');
Route::post('/addUsers', [FunctionalController::class, 'addUsers'])->name('addUsers');
Route::post('/registerUser', [FunctionalController::class, 'RegisterUser'])->name('RegisterUser');
Route::post('/loginUser', [FunctionalController::class, 'loginUser'])->name('loginUser');
Route::post('/addReview', [FunctionalController::class, 'addReview'])->name('addReview');
Route::post('/addVideoReview', [FunctionalController::class, 'addVideoReview'])->name('addVideoReview');
Route::post('/updateReview', [FunctionalController::class, 'updateReview'])->name('updateReview');
Route::post('/updateVideoReview', [FunctionalController::class, 'updateVideoReview'])->name('updateVideoReview');
Route::post('/toggle-favorite', [FunctionalController::class, 'toggleFavorite'])->name('toggleFavorite');
Route::post('/toggle-favorite-video', [FunctionalController::class, 'addFavVideo'])->name('addFavVideo');
Route::delete('/deleteUser/{id}', [FunctionalController::class, 'deleteUser'])->name('deleteUser');
Route::delete('/deleteArtist/{id}', [FunctionalController::class, 'deleteArtist'])->name('deleteArtist');

// Delete Routes
Route::delete('/deleteMusic/{id}', [FunctionalController::class, 'deleteMusic'])->name('deleteMusic');
Route::delete('/deleteVideo/{id}', [FunctionalController::class, 'deleteVideo'])->name('deleteVideo');


// Ajax Requst Route
Route::get('/get-album/{artistId}', [FunctionalController::class, 'getAlbum'])->name('getAlbum');
Route::get('/get-music-album/{artistId}', [FunctionalController::class, 'getArtistVideos'])->name('getartistVideos');
