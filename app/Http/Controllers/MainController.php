<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\AudioReview;
use App\Models\favorites;
use App\Models\favoriteVideos;
use App\Models\musics;
use App\Models\ReviewVideo;
use App\Models\User;
use App\Models\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    // User Pages.
    public function getIndexPage()
    {
        $musics = musics::latest()->take(8)->get();
        $video = videos::latest()->take(12)->get();
        return view("pages.index", ['Musics' => $musics, 'Videos' => $video]);
    }

    public function getArtistPage($id)
    {
        $artist = artist::find($id);
        return view("pages.artistProfile", ['Artist' =>  $artist]);
    }
    public function getProfilePage()
    {
        if (Auth::check()) {
            $userID = Auth::user()->id;
            $favs = favorites::where('user_id', $userID)->get();
            $videoFavs = favoriteVideos::where('user_id', $userID)->get();
            return view("pages.profile", ['favs' => $favs, 'videoFavs' =>  $videoFavs]);
        } else {
            return redirect('/login');
        }
    }

    public function getVideoPage($id)
    {
        $videos = videos::find($id);
        $reviews = ReviewVideo::with('user')->where('videoid', $id)->latest()->get();
        $favs = favoriteVideos::where('video_id', $id)->get();
        $latestAudio = videos::latest()->take(5)->get();
        return view("pages.video", ['Video' => $videos, 'latest' =>  $latestAudio, 'Reviews' =>  $reviews,  'Favs' => $favs]);
    }

    public function getMusicPage($id)
    {

        $audio = musics::find($id);
        $reviews = AudioReview::with('user')->where('audioid', $id)->latest()->get();
        $latestAudio = musics::latest()->take(5)->get();
        $favs = favorites::where('music_id', $id)->get();
        return view("pages.audio", ['Audio' => $audio, 'latest' =>  $latestAudio, 'Reviews' =>  $reviews, 'Favs' => $favs]);
    }

    public function getRegisterPage()
    {

        if (Auth::check()) {
            return redirect('/');
        } else {
            return view("pages.register");
        }
    }

    public function getLoginPage()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view("pages.login");
        }
    }


    // Admin Dashboard
    public function getAdminPage()
    {
        $artistCount = artist::count();
        $userCount = User::count();
        $videoCount = videos::count();
        $musicsCount = musics::count();
        $latestMusic = musics::latest()->take(7)->get();
        $latstVideos = videos::latest()->take(7)->get();
        return view('admin.index', compact('artistCount', 'userCount', 'videoCount', 'musicsCount', 'latestMusic', 'latstVideos'));
    }

    public function getAllArists()
    {
        $data = artist::all();
        return view('admin.artists', ['data' =>  $data]);
    }

    public function getAllMusicFiles()
    {
        $data = musics::with('artist')->get();
        $Artist = artist::all();
        return view('admin.musics', ['data' => $data, 'Artist' => $Artist]);
    }

    public function addMusicFiles()
    {
        return view('admin.addMusic');
    }

    public function getAllVideoFiles()
    {
        $data = videos::all();
        $Artist = artist::all();
        return view('admin.videos', [
            'data' => $data,
            'Artist' => $Artist,
        ]);
    }

    public function addVideoFiles()
    {
        return view('admin.addVideos');
    }

    public function getAllUsers()
    {
        $data = User::all();
        return view('admin.users', ['data' => $data]);
    }

    public function getAllAlbumns()
    {
        $artists = artist::all();
        return view('admin.albumns', ['artists' => $artists]);
    }


    public function getGenrePage($genre)
    {

        $music = musics::where('Genre', $genre)->get();
        $video = videos::where('Genre', $genre)->get();

        return view('pages.Genre', ['Musics' => $music, 'Videos' => $video, 'Genre' => $genre]);
    }

    public function getAudioFiles()
    {
        $Musics = musics::all();
        return view('pages.AudioSearch', ['Musics' => $Musics]);
    }

    public function getVideoFiles()
    {
        $video = videos::all();
        return view('pages.videoSearch', ['Videos' => $video]);
    }
}
