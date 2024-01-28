@extends('admin.layout.layout')
@section('dashboard')
    <div class="modal fade" id="addAudioSongs" tabindex="-1" aria-labelledby="addAudioSongsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Add Audio Music</h3>
                    <form action="{{ route('addMusics') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="AudioMusicPicture" class="d-none" name="AudioMusicIMage">
                        <input type="file" id="AudioMusicFile" class="d-none" name="AudioMusicFile">
                        <input type="text" class="form-control mb-2" value="{{old('Name')}}" placeholder="Enter Full Name" name="Name">
                        @error('Name')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <input type="text" class="form-control mb-2"  value="{{old('Year')}}" placeholder="Year" name="Year">
                        @error('Year')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <select name="Genre" class="form-control mb-2" id="genre">
                            <option value="{{old('Genre') ? old('Genre') : ''}}"> {{old('Genre') ? old('Genre') : 'Select Genre'}}</option>
                            <option value="Hip Hop">Hip Hop</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classical">Classical</option>
                            <option value="Pop music">Pop music</option>
                            <option value="Instrumental">Instrumental</option>
                        </select>
                        @error('Genre')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <select name="artist" class="form-control mb-2" id="artist">
                            <option value="{{old('artist') ? old('artist') : ''}}"> {{old('artist') ? old('artist') : 'Select Artist'}}</option>
                            @foreach ($Artist as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('artist')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror

                        <select name="album" id="album" onchange="selectAlbum()" class="form-control mb-2">
                            <option value="{{old('album') ? old('album') : ''}}"> {{old('album') ? old('album') : 'Select Album'}} </option>
                            <option value="createAlbum">Add New Album</option>
                        </select>
                        @error('album')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror

                        <input type="text" name="newAlbum" style="display: none;" placeholder="Add New Album"
                            id="newAlbumInput" class="form-control mb-2">
                            
                        <label for="AudioMusicPicture" class="form-control bg-secondary-subtle mb-2">Add Picture</label>
                        @error('AudioMusicIMage')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <label for="AudioMusicFile" class="form-control bg-secondary-subtle mb-2">Add Audio Music</label>
                        @error('AudioMusicFile')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <textarea name="description" value="{{old('description')}}" id="description" min='300' placeholder="Enter Description About This Song"
                            class="form-control mb-2" cols="30" rows="10"></textarea>
                            @error('description')
                            <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                            @enderror





                        <button class="border-0 rounded-2 py-1 px-3 bg-red text-white">Add Audio Song</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-10">
        <div class="container-fluid p-3 h-100 rounded-3 border">
            <div class="row">
                <div class="col-8">
                    <h2 class="ps-2 mb-3">All Audio Songs</h2>

                </div>
                <div class="col-4 text-end">
                    <button class="bg-red text-white border-0 rounded-2 px-3 py-1" data-bs-toggle="modal"
                        data-bs-target="#addAudioSongs">Add Audio Songs</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Album</th>
                        <th scope="col">Year</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->Genre }}</td>
                            <td>{{ optional($item->artist)->name ?: 'N/A' }}</td>
                            <td>{{ $item->album }}</td>
                            <td>{{ $item->Year }}</td>
                            <td><a href="/music/{{ $item->id }}"
                                    class="text-decoration-none text-black">View</a></td>
                            <td>
                                <form action="{{ route('deleteMusic', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-decoration-none  p-0 m-0 border-0 bg-white text-black">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function selectAlbum() {
        let album = document.querySelector('#album');
        let newAlbumInput = document.querySelector('#newAlbumInput');

        if (album.value === 'createAlbum') {
            album.style.display = 'none';
            newAlbumInput.style.display = 'block';
        } else {
            album.style.display = ' block';
            newAlbumInput.style.display = 'none';
        }
    }


    $(document).ready(function() {
        $('#artist').on('change', function() {
            var artistId = $('#artist').val();
            console.log(artistId);
            $.ajax({
                url: '/get-music-album/' + artistId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#album').empty();

                    $('#album').append(`<option value="createAlbum">Selet Albums</option>`);
                    // Check if the data is an array and has elements
                    if (Array.isArray(data) && data.length > 0) {
                        // If there are albums, populate the dropdown
                        data.forEach(function(album) {
                            $('#album').append('<option value="' + album + '">' +
                                album + '</option>');
                        });
                    } else {
                        // If no albums found, provide a default option
                        $('#album').append('');
                    }
                    $('#album').append(
                        '<option value="createAlbum">Add New Album</option>');

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });

    
</script>

@if($errors->any())
    <script>
        $(document).ready(function() {
            $('#addAudioSongs').modal('show');
        });
    </script>
@endif

