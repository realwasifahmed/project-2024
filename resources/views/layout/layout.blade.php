<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
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
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Series</li>
                    <li class="menu-list-item">Popular</li>
                    <li class="menu-list-item">Trends</li>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="" />
                <div class="profile-text-container">
                    <span class="profile-text">Wasif Ahmed</span>
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
        <button>Logout</button>
    </div>
    <!-- Profile Menu -->

    <!-- Sidebar Starts -->
    <div class="sidebar">
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-home"></i>
            <p>Home</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-search"></i>
            <p>Search</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-users"></i>
            <p>Users</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-heart"></i>
            <p>Favrt</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-tv"></i>
            <p>Watch</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-hourglass-start"></i>
            <p>Time</p>
        </span>
        <span class="cursor-pointer">
            <i class="left-menu-icon fas fa-shopping-cart"></i>
            <p>Shop</p>
        </span>
    </div>
    <!-- Sidebar Ends -->

    @yield('content')

    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
