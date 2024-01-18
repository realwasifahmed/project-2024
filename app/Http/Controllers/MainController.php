<?php

namespace App\Http\Controllers;

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
    public function getAdminPage(){
        return view('admin.index');
    }

    public function getAllArists(){
        return view('admin.artists');
    }

    public function getAllMusicFiles(){
        return view('admin.musics');
    }

    public function addMusicFiles(){
        return view('admin.addMusic');
    }

    public function getAllVideoFiles(){
        return view('admin.videos');
    }

    public function addVideoFiles(){
        return view('admin.addVideos');
    }

    public function getAllUsers(){
        return view('admin.users');
    }

    public function getAllAlbumns(){
        return view('admin.albumns');
    }
}
