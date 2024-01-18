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
                        <input type="file" id="ArtistProfilePicture" class="d-none" name="ArtistProfilePicture">
                        <input type="text" class="form-control mb-2" placeholder="Enter Full Name" name="Name">
                        <input type="Email" class="form-control mb-2" placeholder="Enter Email Address" name="Email">
                        <label for="ArtistProfilePicture" class="form-control bg-secondary-subtle mb-2">Add Picture</label>

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
                        <th scope="col">Name</th>
                        <th scope="col">Albums</th>
                        <th scope="col">Release</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td><a href="#" class="text-decoration-none text-black">View</a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
