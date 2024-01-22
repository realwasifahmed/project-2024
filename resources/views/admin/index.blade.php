@extends('admin.layout.layout')
@section('dashboard')
    <div class="col-10">
        <div class="container-fluid p-3 h-100 rounded-3 border">
            <div class="row">
                <h2 class="ps-2 mb-3">Dashboard</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 mb-4">
                        <div class="container py-2 bg-secondary-subtle rounded-2">
                            <h3 class="fs-4 ">Users</h3>
                            <h1 class="text-red">{{ $userCount ? $userCount : 'N/A' }}</h1>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="container py-2 bg-secondary-subtle rounded-2">
                            <h3 class="fs-4 ">Artists</h3>
                            <h1 class="text-red">{{ $artistCount ? $artistCount : 'N/A' }}</h1>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="container py-2 bg-secondary-subtle rounded-2">
                            <h3 class="fs-4 ">Audio Songs</h3>
                            <h1 class="text-red">{{ $musicsCount ? $musicsCount : 'N/A' }}</h1>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="container py-2 bg-secondary-subtle rounded-2">
                            <h3 class="fs-4 ">Video Songs</h3>
                            <h1 class="text-red">{{ $videoCount ? $videoCount : 'N/A' }}</h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h3>Latest Audio Musics</h3>
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Artist</th>
                                    <th scope="col">Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestMusic as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->artist->name }}</td>
                                        <td>{{ $item->Year }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h3>Latest Video Musics</h3>
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Artist</th>
                                    <th scope="col">Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latstVideos as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->artist->name }}</td>
                                        <td>{{ $item->Year }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
