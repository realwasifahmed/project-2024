@extends('admin.layout.layout')
@section('dashboard')
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Add User</h3>

                    <form action="{{ route('addUsers') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="profilePicture" class="d-none" name="userPicture">
                        <input type="text" class="form-control mb-2" placeholder="Enter Full Name" name="Name">
                        <input type="text" class="form-control mb-2" placeholder="Enter Email Address" name="Email">
                        <label for="profilePicture" class="form-control cursor-pointer bg-secondary-subtle mb-2">Add
                            Picture</label>

                        <button class="border-0 rounded-2 py-1 px-3 bg-red text-white">Add User </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-10">
        <div class="container-fluid p-3 h-100 rounded-3 border">
            <div class="row">
                <div class="col-8">
                    <h2 class="ps-2 mb-3">All Users</h2>

                </div>
                <div class="col-4 text-end">
                    <button class="bg-red text-white border-0 rounded-2 px-3 py-1" data-bs-toggle="modal"
                        data-bs-target="#addUser">Add User</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td><img src="{{ asset('uploads/' . $item->image) }}"
                                    style="width: 45px; height:50; border-radius: 50%;" alt=""></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="/u/{{ '@' . $item->username}}" class="text-decoration-none text-black">View</a></td>
                            <td><a href="#" class="text-decoration-none text-black">Edit</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
