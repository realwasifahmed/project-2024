<?php

namespace App\Http\Controllers;

use App\Mail\RegisterEmail;
use App\Models\artist;
use App\Models\musics;
use App\Models\User;
use App\Models\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FunctionalController extends Controller
{
    public function addArtist(Request $request)
    {
        // dd($request->all());
        $file = $request->file('artistPicture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);

        $userName = Str::random(12);

        $Artist = new artist;
        $Artist->picture = $fileName;
        $Artist->name = $request->Name;
        $Artist->email = $request->Email;
        $Artist->username = $userName;
        $Artist->save();

        return back();
    }

    public function addMusics(Request $request)
    {
        // dd($request->all());
        $Image = $request->file('AudioMusicIMage');
        $ImageName = time() . '.' . $Image->getClientOriginalExtension();
        $Image->move(public_path('uploads'), $ImageName);

        $AudioFile = $request->file('AudioMusicFile');
        $AudioFileName = time() . '.' . $AudioFile->getClientOriginalExtension();
        $AudioFile->move(public_path('AudioMusics'), $AudioFileName);

        $Musics = new musics;
        $Musics->image = $ImageName;
        $Musics->name = $request->Name;
        $Musics->Year = $request->Year;
        $Musics->Genre = $request->Genre;
        $Musics->artist_id = $request->artist;
        $Musics->description = $request->description;
        $Musics->musicFile = $AudioFileName;
        $Musics->save();
        return back();
    }


    public function deleteMusic($id)
    {
        $music = musics::where('id', $id)->first();

        if ($music) {
            $music->delete();
        }

        return back();
    }


    public function addVideos(Request $request)
    {
        // dd($request->all());

        $Image = $request->file('VideoImageFile');
        $ImageName = time() . '.' . $Image->getClientOriginalExtension();
        $Image->move(public_path('uploads'), $ImageName);

        $Video = $request->file('VideoFile');
        $VideoName = time() . '.' . $Video->getClientOriginalExtension();
        $Video->move(public_path('videos'), $VideoName);


        $Videos = new videos;
        $Videos->image = $ImageName;
        $Videos->name = $request->Name;
        $Videos->Year = $request->Year;
        $Videos->Genre = $request->Genre;
        $Videos->artist_id = $request->artist;
        $Videos->description = $request->description;
        $Videos->videoFile = $VideoName;
        $Videos->save();
        return back();
    }


    public function deleteVideo($id)
    {
        $video = videos::where('id', $id)->first();

        if ($video) {
            $video->delete();
        }

        return back();
    }


    public function addUsers(Request $request)
    {

        // dd($request->all());

        $file = $request->file('userPicture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);


        $password = Str::random(12);
        $userName = Str::random(12);

        $Users = new User;
        $Users->image = $fileName;
        $Users->name = $request->Name;
        $Users->email = $request->Email;
        $Users->username = $userName;
        $Users->password = bcrypt($password);
        $Users->save();

        $content = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:12',
        ]);

        Mail::to($request->email)->send(new RegisterEmail($content));
        return back();
    }

    public function createAlbum(Request $request)
    {
        dd($request->all());
    }
}
