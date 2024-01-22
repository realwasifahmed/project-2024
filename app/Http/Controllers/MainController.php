<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\musics;
use App\Models\User;
use App\Models\videos;
use Illuminate\Http\Request;

class MainController extends Controller
{

    // User Pages.
    public function getIndexPage()
    {
        return view("pages.index");
    }

    public function getArtistPage()
    {
        return view("pages.artistProfile");
    }
    public function getProfilePage()
    {
        return view("pages.profile");
    }

    public function getVideoPage()
    {
        return view("pages.video");
    }

    public function getRegisterPage()
    {
        return view("pages.register");
    }

    public function getLoginPage()
    {
        return view("pages.login");
    }


    // Admin Dashboard
    public function getAdminPage()
    {
        $artistCount = artist::count();
        $userCount = User::count();
        $videoCount = videos::count();
        $musicsCount = musics::count();
        $latestMusic = musics::latest()->take(10)->get();
        $latstVideos = videos::latest()->take(10)->get();
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
        return view('admin.albumns');
    }
}
