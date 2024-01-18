<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Sound Group </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        .bg-red {
            background-color: red;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .text-red {
            color: red;
        }
    </style>
</head>

<body>
    @php
        $currentRoute = Route::currentRouteName();
    @endphp
    <div class="container-fluid">
        <div class="row vh-100 p-2">
            <div class="col-2 bg-red h-100 pt-3 position-relative rounded-3">
                <h2 class="text-white fw-bold text-uppercase fs-4 text-center">Sound Group</h2>

                <a href="{{ route('AdminPage') }}"
                    class="fs-6 mt-4 {{ $currentRoute == 'AdminPage' ? 'text-black bg-white' : 'text-white border' }} rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3 ">Dashboard</a>
                <a class="fs-6 {{ $currentRoute == 'AllUsers' ? 'text-black bg-white' : 'text-white border' }}  rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3"
                    href="{{ route('AllUsers') }}">Users</a>
                <a class="fs-6 {{ $currentRoute == 'AllArtists' ? 'text-black bg-white' : 'text-white border' }} rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3"
                    href="{{ route('AllArtists') }}">All
                    Artists</a>
                <a class="fs-6 {{ $currentRoute == 'AllMusicFiles' ? 'text-black bg-white' : 'text-white border' }} rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3"
                    href="{{ route('AllMusicFiles') }}">All
                    Musics</a>
                <a class="fs-6 {{ $currentRoute == 'getAllVideoFiles' ? 'text-black bg-white' : 'text-white border' }} rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3"
                    href="{{ route('getAllVideoFiles') }}">All
                    Videos</a>
                <a class="fs-6 {{ $currentRoute == 'getAllAlbumns' ? 'text-black bg-white' : 'text-white border' }} rounded-3 py-2 d-block text-decoration-none mb-2 fw-normal cursor-pointer ms-2 ps-3"
                    href="{{ route('getAllAlbumns') }}">All
                    Albums</a>
            </div>


            @yield('dashboard')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('musics') // id
        new MultiSelectTag('video') // id





        document.querySelector('musics')
    </script>
</body>

</html>



</body>

</html>
