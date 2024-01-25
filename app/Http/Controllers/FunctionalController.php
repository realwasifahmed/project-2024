<?php

namespace App\Http\Controllers;

use App\Mail\RegisterEmail;
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
        if ($request->album === 'createAlbum') {
            $Musics->album = $request->newAlbum;
        } else {
            $Musics->album = $request->album;
        }

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

        if ($request->album === 'createAlbum') {
            $Videos->album = $request->newAlbum;
        } else {
            $Videos->album = $request->album;
        }

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



    public function getAlbum($artistId)
    {
        $uniqueAlbums = videos::where('artist_id', $artistId)->distinct()->pluck('album');

        return response()->json($uniqueAlbums);
    }

    public function getArtistVideos($artistId)
    {
        $uniqueAlbums = musics::where('artist_id', $artistId)->distinct()->pluck('album');

        return response()->json($uniqueAlbums);
    }



    public function addReview(Request $request)
    {
        $AudioReview = new AudioReview;
        $AudioReview->userId = $request->userID;
        $AudioReview->audioid = $request->musicID;
        $AudioReview->reviewText = $request->reviewContent;
        $AudioReview->save();

        return back();
    }

    public function updateReview(Request $request)
    {
        $reviewID = $request->reviewID;

        $existingReview = AudioReview::where('id', $reviewID)->first();

        if ($existingReview) {
            $existingReview->reviewText = $request->reviewContent;
            $existingReview->save();
            return back()->with('success', 'Review updated successfully.');
        } else {
            return back()->with('error', 'Review not found.');
        }
    }

    public function addVideoReview(Request $request)
    {
        $videoReview = new ReviewVideo;
        $videoReview->userId = $request->userID;
        $videoReview->videoid = $request->musicID;
        $videoReview->reviewText = $request->reviewContent;
        $videoReview->save();

        return back();
    }

    public function updateVideoReview(Request $request)
    {
        $reviewID = $request->reviewID;

        $existingReview = ReviewVideo::where('id', $reviewID)->first();

        if ($existingReview) {
            $existingReview->reviewText = $request->reviewContent;
            $existingReview->save();
            return back()->with('success', 'Review updated successfully.');
        } else {
            return back()->with('error', 'Review not found.');
        }
    }


    public function search(Request $request)
    {
        $term = $request->input('term');

        $results = musics::where('name', 'like', '%' . $term . '%')
            ->orWhere('album', 'like', '%' . $term . '%')
            ->orWhereHas('artist', function ($query) use ($term) {
                $query->where('name', 'like', '%' . $term . '%');
            })
            ->orWhere('genre', 'like', '%' . $term . '%')
            ->orWhere('year', 'like', '%' . $term . '%')
            ->with('artist') // Eager load the artist relationship
            ->get();

        return response()->json(['results' => $results]);
    }
    public function searchVideo(Request $request)
    {
        $term = $request->input('term');

        $results = videos::where('name', 'like', '%' . $term . '%')
            ->orWhere('album', 'like', '%' . $term . '%')
            ->orWhereHas('artist', function ($query) use ($term) {
                $query->where('name', 'like', '%' . $term . '%');
            })
            ->orWhere('genre', 'like', '%' . $term . '%')
            ->orWhere('year', 'like', '%' . $term . '%')
            ->with('artist') // Eager load the artist relationship
            ->get();

        return response()->json(['results' => $results]);
    }


    public function toggleFavorite(Request $request)
    {
        $Favorite = new favorites;
        $Favorite->user_id = Auth::check() ? Auth::user()->id : '';
        $Favorite->music_id = $request->AudioID;
        $Favorite->save();
        return back();
    }
    public function addFavVideo(Request $request)
    {
        $Favorite = new favoriteVideos;
        $Favorite->user_id = Auth::check() ? Auth::user()->id : '';
        $Favorite->video_id = $request->AudioID;
        $Favorite->save();
        return back();
    }

    public function RegisterUser(Request $request)
    {
        $image = $request->file('UserImage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/userProfilePicture'), $imageName);

        $username = Str::random(12);

        $register = new User;
        $register->image = $imageName;
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = bcrypt($request->input('password'));
        $register->username = $username;

        $register->save();
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
    }


    public function deleteUser($id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            // Delete the user
            $user->delete();

            return back()->with('success', 'User deleted successfully');
        } else {
            // User not found
            return back()->with('error', 'User not found');
        }
    }

    public function deleteArtist($id)
    {
        $artist = artist::find($id);
        if ($artist) {
            // Delete the user
            $artist->delete();

            return back()->with('success', 'User deleted successfully');
        } else {
            // User not found
            return back()->with('error', 'User not found');
        }
    }


    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/'); // Redirect to the dashboard or your desired page
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
