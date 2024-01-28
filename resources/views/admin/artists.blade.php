@extends('admin.layout.layout')
@section('dashboard')
    <!-- Modal -->
    <div class="modal fade" id="addArtists" tabindex="-1" aria-labelledby="addArtistsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Add Artist</h3>
                    <form action="{{ route('addArtist') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="artistPicture" class="d-none" name="artistPicture">
                        <input type="text" class="form-control mb-2" placeholder="Enter Full Name" name="Name">
                        @error('Name')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <input type="Email" class="form-control mb-2" placeholder="Enter Email Address" name="Email">
                        @error('Email')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror
                        <label for="artistPicture" class="form-control bg-secondary-subtle mb-2">Add Picture</label>
                        @error('artistPicture')
                        <span style='color: red; text-align: left; display: block; margin-top: -10px; margin-bottom: 10px; font-size:13px;'> {{$message}}</span>
                        @enderror

                        <button class="border-0 rounded-2 py-1 px-3 bg-red text-white">Add Artist</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-10">
        <div class="container-fluid p-3 h-100 rounded-3 border">
            <div class="row">
                <div class="col-8">
                    <h2 class="ps-2 mb-3">All Artists</h2>

                </div>
                <div class="col-4 text-end">
                    <button class="bg-red text-white border-0 rounded-2 px-3 py-1" data-bs-toggle="modal"
                        data-bs-target="#addArtists">Add Artist</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td><img src="{{ asset('uploads/' . $item->picture) }}"
                                    style="width: 40px; height: 40px; border-radius: 100%; objec-fit: cover;"
                                    alt=""></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="/artist/{{ $item->id }}" class="text-decoration-none text-black">View</a></td>
                            <td>
                                <form action="{{ route('deleteArtist', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" {{ $item->id }}"
                                        class="text-decoration-none border-0 bg-white text-black">Delete</button>
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
@if($errors->any())
    <script>
        $(document).ready(function() {
            $('#addArtists  ').modal('show');
        });
    </script>
@endif