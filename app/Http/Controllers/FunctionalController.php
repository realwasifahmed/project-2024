<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionalController extends Controller
{
    public function addArtist(Request $request)
    {
        dd($request->all());

        return back();
    }

    public function addMusics(Request $request)
    {
        dd($request->all());
        return back();
    }

    public function addVideos(Request $request)
    {
        dd($request->all());
        return back();
    }

    public function addUsers(Request $request)
    {
        dd($request->all());
        return back();
    }

    public function createAlbum(Request $request)
    {
        dd($request->all());
    }
}
