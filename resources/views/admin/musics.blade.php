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
                            @foreach ($Artist as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                            @endforeach

                        </select>
                        <label for="AudioMusicPicture" class="form-control bg-secondary-subtle mb-2">Add Picture</label>
                        <label for="AudioMusicFile" class="form-control bg-secondary-subtle mb-2">Add Audio Music</label>
                        <textarea name="description" id="description" min='300' placeholder="Enter Description About This Song"
                            class="form-control mb-2" cols="30" rows="10"></textarea>





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
                            <td>{{ $item->Year }}</td>
                            <td><a href="/music/{{ $item->id }}/{{ Str::kebab($item->name) }}"
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
