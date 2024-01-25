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
                {{-- <button class="featured-button">View Albums</button> --}}
            </div>
            <!-- Main Hero Section Ends -->


            <!-- Audio Section -->
            <div class="movie-list-container margin-top-under-feature">
                <h1 class="movie-list-title">Top Listeners</h1>
                <div class="movie-list-wrapper" style="max-width: 100%; display: flex; gap: 15px; flex-wrap: wrap;">

                    @foreach ($Musics as $music)
                        <div class="audio_container mt-2">
                            <div class="audio__image">
                                <img src="{{ asset('uploads/' . $music->image) }}" alt="" />
                            </div>
                            <div class="audio_content">
                                <h3><a href="/music/{{ $music->id }}">{{ $music->name }}</a></h3>
                                <a href="/artist/{{ $music->artist->id }}">{{ $music->artist->name }}</a>
                            </div>
                            <div class="audio__player">
                                <a href="/music/{{ $music->id }}"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
            <!-- Audio Section -->


            {{-- Latest Stream --}}
            <div class="movie-list-container mt-2">
                <h1 class="movie-list-title">Lastest Streams</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        @foreach ($Videos as $video)
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="{{ asset('uploads/' . $video->image) }}"
                                    alt="" />
                                <span class="movie-list-item-title">{{ $video->name }}</span>
                                <p class="movie-list-item-desc">
                                    {{ $video->description }}
                                </p>
                                <a href="/video/{{ $video->id }}" class="movie-list-item-button"
                                    style="text-decoration: none;">Watch</a>
                            </div>
                        @endforeach


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
                    {{-- <button class="featured-button">View Album</button> --}}
                </div>
            </div>




            <!-- Albumn Start -->

            {{-- <div class="movie-list-container margin-top-under-feature" style="margin-top: 150px;">
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
            </div> --}}

            <!-- Albumn End -->

            <!-- Genre Section Start -->
            <div class="movie-list-container" style="margin-top: 150px;">
                <h1 class="movie-list-title">GENRE</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="{{asset('img/stunners.jpg')}}" alt="" />
                            <a href="/c/Hip Hop" class="text-white"><span class="movie-list-item-title">Hip
                                    hop</span></a>
                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                            <a href="/c/Classical" class="text-white"><span
                                    class="movie-list-item-title">Classical</span></a>

                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="{{asset('img/jazz Music.jpg')}}" alt="" />
                            <span class="movie-list-item-title">Jazz</span>
                            <a href="/c/Jazz" class="text-white"><span class="movie-list-item-title">Jazz</span></a>

                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="{{asset('img/michealjackson.jpg')}}" alt="" />
                            <span class="movie-list-item-title">Pop music</span>
                            <a href="/c/Pop music" class="text-white"><span class="movie-list-item-title">Pop
                                    music</span></a>

                        </div>
                        <div class="movie-list-item Genre-List">
                            <img class="movie-list-item-img" src="{{asset('img/Instrumental.jpg')}}" alt="" />
                            <span class="movie-list-item-title">Instrumental</span>
                            <a href="/c/Instrumental" class="text-white"><span
                                    class="movie-list-item-title">Instrumental</span></a>

                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <!-- Genre Section Ends -->

        </div>
    </div>
@endsection
