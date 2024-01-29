<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Sound Group - TeamDisplayFlex</title>
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="upper__Preloader"></div>
        <h1 class="logo">Sound Group.</h1>
        <div class="lower__preloader"></div>
    </div> --}}

    <!-- Navigation Menu -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Sound G.</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="{{ route('IndexPage') }}"
                            style="text-decoration: none; color: white;">Home</a></li>
                    <li class="menu-list-item"><a href="/audio" style="text-decoration: none; color: white;">Audio</a>
                    </li>
                    <li class="menu-list-item"><a href="/movies" style="text-decoration: none; color: white;">Video</a>
                    </li>
                    <li class="menu-list-item"><a href="/profile"
                            style="text-decoration: none; color: white;">Favorites</a>
                    </li>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture"
                    src="{{ Auth::check() ? asset('uploads/userProfilePicture/' . Auth::user()->image) : 'img/profile.png' }}"
                    alt="" />
                <div class="profile-text-container">
                    <span class="profile-text">{{ Auth::check() ? Auth::user()->name : 'Guest User' }}</span>
                    <i class="fas cursor-pointer fa-caret-down" id="showPorfileMenu"></i>
                </div>
                {{-- <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Navigation Menu -->

    <!-- Profile Menu -->
    <div class="profile_menu">
        <div class="profile_item">
            <a href="{{ route('ProfilePage') }}">Profile</a>
            <i class="fa fa-chevron-right"></i>
        </div>
        <div class="profile_item">
            <a href="#">Settings</a>
            <i class="fa fa-chevron-right"></i>
        </div>
        <button>
            @if (Auth::check())
                <a href="{{ route('logout') }}" class="text-white" style="text-decoration: none">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-white" style="text-decoration: none">Login/SignUp</a>
            @endif
        </button>
    </div>
    <!-- Profile Menu -->

    <!-- Sidebar Starts -->
    <div class="sidebar">
        <span class="cursor-pointer" id="home">
            <i class="left-menu-icon fas fa-home"></i>
            <p>Home</p>
        </span>
        <span class="cursor-pointer" id="Audio">
            <i class="left-menu-icon fas fa-play"></i>
            <p>Audio</p>
        </span>
        <span class="cursor-pointer" id="Video">
            <i class="left-menu-icon fas fa-camera"></i>
            <p>Video</p>
        </span>
        <span class="cursor-pointer" id="Profile">
            <i class="left-menu-icon fas fa-heart"></i>
            <p>Favrt</p>
        </span>
    </div>
    <!-- Sidebar Ends -->

    @yield('content')

    <script>
        var home = document.querySelector('#home');
        var audio = document.querySelector('#Audio'); // Changed to lowercase 'audio'
        var video = document.querySelector('#Video'); // Changed to lowercase 'video'
        var profile = document.querySelector('#Profile'); // Changed to uppercase 'Profile'

        home.addEventListener('click', () => {
            window.location.href = '/';
        });

        audio.addEventListener('click', () => {
            window.location.href = '/audio';
        });

        video.addEventListener('click', () => {
            window.location.href = '/movies'; // Changed to '/movies'
        });

        profile.addEventListener('click', () => {
            window.location.href = '/profile';
        });
    </script>

    <script src="{{ asset('app.js') }}"></script>

</body>

</html>
