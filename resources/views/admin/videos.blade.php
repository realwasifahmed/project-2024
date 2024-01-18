@extends('admin.layout.layout')
@section('dashboard')
    <div class="modal fade" id="addAudioSongs" tabindex="-1" aria-labelledby="addAudioSongsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Add Audio Music</h3>
                    <form action="{{ route('addVideos') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="AudioMusicPicture" class="d-none" name="AudioMusicIMage">
                        <input type="text" class="form-control mb-2" placeholder="Enter Full Name" name="Name">
                        <input type="text" class="form-control mb-2" placeholder="Year" name="Year">
                        <select name="Genre" class="form-control mb-2" id="artist">
                            <option value="0">Genre</option>
                            <option value="Hip Hop">Hip Hop</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classic">Classic</option>
                        </select>
                        <select name="artist" class="form-control mb-2" id="artist">
                            <option value="0">Artist</option>
                            <option value="Talha Anjum">Talha Anjum</option>
                            <option value="Talha Younus">Talha Younus</option>
                            <option value="YounStunners">YounStunners</option>
                        </select>
                        <textarea name="description" id="description" min='300' placeholder="Enter Description About This Song"
                            class="form-control mb-2" cols="30" rows="10"></textarea>
                        <label for="AudioMusicPicture" class="form-control bg-secondary-subtle mb-2">Add Picture</label>

                        <button class="border-0 rounded-2 py-1 px-3 bg-red text-white">Add Video Song</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-10">
        <div class="container-fluid p-3 h-100 rounded-3 border">
            <div class="row">
                <div class="col-8">
                    <h2 class="ps-2 mb-3">All Video Songs</h2>

                </div>
                <div class="col-4 text-end">
                    <button class="bg-red text-white border-0 rounded-2 px-3 py-1" data-bs-toggle="modal"
                        data-bs-target="#addAudioSongs">Add Video Songs</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Album</th>
                        <th scope="col">Duration</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Shikayat</td>
                        <td>Aur</td>
                        <td>Uraan</td>
                        <td>3.50 Mins</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Kuasdji</td>
                        <td>0.2 Mins</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="3">Larry the Bird</td>
                        <td>@twitter</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
