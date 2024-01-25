@extends('layout.layout')
@section('content')

    <head>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    </head>
    <div class="aritst__container">
        <div class="artist__cover">
            <div class="artist__detials">
                <img src="{{ asset('uploads/userProfilePicture/' . Auth::user()->image) }}" alt=""
                    style="object-fit: cover" />
                <div class="artist_meta">
                    <div class="verified_artist">
                        <!-- <i class="fa fa-check"></i> Verified Artist -->
                    </div>
                    <p>Profile</p>
                    <h1>{{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>

        <div class="content_container mb-2">
            <div class="content__details">
                <div class="audio__content">
                    <h3>Fav Listen</h3>
                    <hr />
                    <div class="customscroll">
                        <table>
                            <tbody>
                                @foreach ($favs as $item)
                                    <tr style="margin-bottom: 30px">
                                        <td><img src="{{ asset('uploads/' . $item->musics->image) }}" alt="" /> <a
                                                href="/music/{{ $item->musics->id }}"
                                                style="text-decoration: none; color: white;">{{ $item->musics->name }}</a>
                                        </td>
                                        <td> {{ $item->musics->Genre }}</td>
                                        <td> {{ $item->musics->Year }}</td>
                                        <td><a href="/music/{{ $item->musics->id }}" style="color: white;"><i
                                                    class="fa fa-play"></i></a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="video__content__slider">
                    <h3>Fav Watch</h3>
                    <hr />


                    <div class="artis__video__container">
                        <div class="artist__video__box swiper-container" style=" overflow: hidden;">
                            <div class="slide__container swiper-wrapper">
                                @foreach ($videoFavs as $video)
                                    <div class="swiper-slide" >
                                        <div class="image-container">
                                            <img src="{{ asset('uploads/' . $video->video->image) }}" alt="" />
                                            <a href="/video/{{ $video->id }}"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <i class="fa fa-chevron-right swiper-button-next"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <h4>Fav Libraries</h4>
            <!-- <hr class="divider"> -->
            <div class="my__library">
                <div class="movie-list-container mt-2">
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
            </div> --}}
        </div>
    </div>
@endsection
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.artist__video__box', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
