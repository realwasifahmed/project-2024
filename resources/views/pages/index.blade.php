@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="content-container">
            <!-- Main Hero Section Start -->

            <video src="./Video/202401030020.mp4" id="background__Video" loop autoplay muted></video>
            <div class="background__overlay"></div>
            <div class="featured-content hero_section_main_container">
                <img class="featured-title" src="img/f-t-1.png" alt="" />
                <p class="featured-desc">
                    Young Stunners are a Pakistani hip-hop duet formed in Karachi in
                    2012 by Talha Anjum, Talhah Yunus and with the music production by
                    Jokhay. The Trio is composed of Talha Anjum and Talhah Yunus Jokhay.
                    Talha Anjum and Talhah Yunus rose to fame as rappers on YouTube
                    after releasing their first song "Burger-e-Karachi".
                </p>
                <button class="featured-button">View Albums</button>
            </div>
            <!-- Main Hero Section Ends -->


            <!-- Audio Section -->
            <div class="movie-list-container margin-top-under-feature">
                <h1 class="movie-list-title">Top Listeners</h1>
                <div class="movie-list-wrapper" style="max-width: 100%; display: flex; gap: 15px; flex-wrap: wrap;">
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="audio_container mt-2">
                        <div class="audio__image">
                            <img src="./img/8.jpg" alt="" />
                        </div>
                        <div class="audio_content">
                            <h3><a href="#">Shikayat</a></h3>
                            <a href="#">Aur</a>
                        </div>
                        <div class="audio__player">
                            <a href="#"><i class="fa fa-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Audio Section -->


            {{-- Latest Stream --}}
            <div class="movie-list-container mt-2">
                <h1 class="movie-list-title">Lastest Streams</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/1.jpeg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/2.jpeg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/15.jpg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4.jpg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/5.jpg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/1.jpeg" alt="" />
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.
                            </p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            {{-- Latest Stream --}}




            <div class="featured-content second__featured__Container position-relative">
                <video muted loop autoplay src="./Video/Untitled project.mp4"></video>
                <div class="background__overlay"></div>
                <div class="content__container">
                    <img class="featured-title" src="img/8.jpg" alt="" />
                    <p class="featured-desc">
                        Aur The Band is a Pakistani band formed in 2020 by Usama Ali, Ahad
                        Khan, and Raffey Anwar who have managed to become a quick
                        favourite among Pakistani music fans. Singers, composers, and
                        producers of the viral fan-favorite song “Tu Hai Kahan”, the song
                        that has crossed 47 million views on youtube.
                    </p>
                    <button class="featured-button">View Album</button>
                </div>
            </div>




            <!-- Albumn Start -->

            <div class="movie-list-container  margin-top-under-feature">
                <h1 class="movie-list-title">ALBUMS</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                            <span class="movie-list-item-title">Open Letter</span>
                            <p class="movie-list-item-desc">
                                Open Letter has everything that makes a project legendary,
                                from crazy bars, and multiple flows to deep poetry and great
                                features.
                            </p>
                            <button class="movie-list-item-button">Play Album</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <!-- Albumn End -->

            <!-- Genre Section Start -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">GENRE</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <a href="#" class="text-white"><span class="movie-list-item-title">Hip hop</span></a>
                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <span class="movie-list-item-title">Classical</span>
                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <span class="movie-list-item-title">Jazz</span>
                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <span class="movie-list-item-title">Pop music</span>
                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <span class="movie-list-item-title">Instrumental</span>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <!-- Genre Section Ends -->

        </div>
    </div>
@endsection
