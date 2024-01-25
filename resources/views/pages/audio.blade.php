@extends('layout.layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('singlepage.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            /* (A) MATERIAL ICONS */
            .aWrap .svg-inline--fa {
                color: white !important;
            }

            /* (B) WRAPPER */
            .aWrap {
                font-family: Arial, Helvetica, sans-serif;
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* allow buttons to wrap into another row on small screens */
                /* flex-wrap: wrap; */
                width: 550px;
                padding: 10px 30px;
                margin: 5px 0;
                border-radius: 10px;
                background: black;
                gap: 1rem;
            }

            .aWrap,
            .aWrap * {
                box-sizing: border-box;
            }

            /* (C) PLAY/PAUSE BUTTON */
            .aPlay {
                padding: 0;
                margin: 0;
                background: 0;
                border: 0;
                cursor: pointer;
            }

            /* (D) TIME */
            .aCron {
                font-size: 14px;
                color: #cbcbcb;
                margin: 0 10px;
            }

            /* (E) RANGE SLIDERS */
            /* (E1) HIDE DEFAULT */
            .aWrap input[type="range"] {
                appearance: none;
                border: none;
                outline: none;
                box-shadow: none;
                width: 150px;
                padding: 0;
                margin: 0;
                background: 0;
            }

            .range,
            .range-volume {
                position: relative;
                display: flex;
                align-items: center;
            }

            .range input,
            .range-volume input {
                position: relative;
                z-index: 1;
            }

            .range .change-range,
            .range-volume .change-range {
                position: absolute;
                left: 0;
                top: 0;
                height: 6px;
                width: 0px;
                background-color: rgb(187, 187, 187);
                border-radius: 10px 0 0 10px;
            }

            .range-volume .change-range {
                height: 10px;
                width: 95%;
            }

            .under-ranger {
                position: absolute;
                left: 0;
                top: 0;
                height: 6px;
                width: 100%;
                background-color: rgb(63, 63, 63);
                border-radius: 10px;
            }

            .range-volume .under-ranger {
                height: 10px;
            }

            .aWrap input[type="range"]::-webkit-slider-thumb {
                appearance: none;
            }

            /* (E2) CUSTOM SLIDER TRACK */
            .aWrap input[type="range"]::-webkit-slider-runnable-track {
                background: transparent;
                height: 6px;
                border-radius: 10px;
            }

            /* (E3) CUSTOM SLIDER BUTTON */
            .aWrap input[type="range"]::-webkit-slider-thumb {
                width: 16px;
                height: 16px;
                border-radius: 50%;
                border: 0;
                background: #fff;
                position: relative;
                cursor: pointer;
                margin-top: -5px;
            }

            .aWrap input[type="range"]::-moz-range-thumb {
                width: 16px;
                height: 16px;
                border-radius: 50%;
                border: 0;
                background: #fff;
                position: relative;
                cursor: pointer;
                margin-top: -5px;
            }

            /* (F) VOLUME */
            .aVolIco {
                margin: 0 10px;
                cursor: pointer;
            }

            input.aVolume {
                width: 100px !important;
            }

            .aVolume::-webkit-slider-runnable-track {
                height: 10px !important;
            }

            .aVolume::-webkit-slider-thumb {
                margin-top: -3px !important;
            }

            .aVolume::-moz-range-thumb {
                margin-top: -3px !important;
            }

            .volume-container {
                display: flex;
                align-items: center;
            }

            .fa-play,
            .fa-pause {
                color: white !important;
            }
        </style>
    </head>

    <div class="main-container">
        <div class="banner">
            <div class="banner-opacity"></div>
            <div class="banner-img">
                <img src="{{ asset('img/music.jpeg') }}" alt="">
            </div>
            <div class="banner-content">
                <img src="{{ asset('uploads/' . $Audio->image) }}" style="border-radius: 10px" alt="">
                <h2>{{ $Audio->name }}</h2>
                <p>{{ $Audio->description }}</p>

                <!-- (B) AUDIO PLAYERS -->
                <div class="aWrap" style="margin-top: 20px;" data-src="{{ asset('AudioMusics/' . $Audio->musicFile) }}">
                    <button class="aPlay" disabled><span class="aPlayIco"><i
                                class="fa fa-play text-white"></i></span></button>
                    <div class="range">
                        <span class="under-ranger"></span>
                        <input class="aSeek" type="range" min="0" value="0" step="1" disabled><span
                            class="change-range"></span>
                    </div>
                    <div class="aCron">
                        <span class="aNow"></span> / <span class="aTime"></span>
                    </div>
                    <div class="volume-container">
                        <span class="aVolIco"><i class="fa fa-volume-up"></i></span>
                        <div class="range-volume">
                            <span class="under-ranger"></span>
                            <input class="aVolume" type="range" min="0" max="1" value="1"
                                step="0.1" disabled><span class="change-range"></span>
                        </div>
                    </div>
                </div>

                {{-- <button class="btn-banner active">Play Now</button> --}}
                {{-- <button class="btn-banner">Add to Fav</button> --}}
            </div>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="{{ asset('uploads/' . $Audio->image) }}"
                    style="height: 250px; object-fit: cover; border-radius: 10px;" alt="">
            </div>
            <div class="about-content">
                <h3><a href="/c/{{ $Audio->Genre }}" style="text-decoration: none; color: white;">{{ $Audio->Genre }}</a>
                </h3>
                <h2><a href="/artist/{{ $Audio->artist->id }}" style="color: red; text-decoration: none;"> <span
                            style="font-size: 40px;">
                            {{ ucfirst($Audio->artist->name) }}</span></a></h2>
                <p>"{{ $Audio->name }}" by {{ $Audio->artist->name }}, released in {{ $Audio->Year }}, is a captivating
                    musical journey encapsulated in the album "{{ $Audio->album }}" Their {{ $Audio->Genre }} of genres,
                    from the enchanting title track to the rhythmic intricacies of "Journey Through Time," serves as a
                    testament to the unifying power of diverse sounds. The vibrant artwork mirrors the dynamic nature of the
                    music, inviting listeners to explore limitless sonic possibilities. Beyond technical brilliance, the
                    album is an emotional exploration, connecting with the universal language of music.
                    {{ $Audio->artist->name }} celebrates the beauty that emerges when different musical elements
                    harmonize, offering not just an album, but a testament to the endless possibilities of creative
                    expression and the unifying power of music.
                </p>

            </div>


        </div>


        <div class="review-container">
            <div class="rating-top">
                <p>rating and reviews</p>
                <div class="rating-icon">
                    <div class="left-border"></div>

                    <div class="right-border"></div>

                </div>
            </div>

            <div class="rating-reviews">
                <div class="rating-content">
                    {{-- <div class="rating-num">
                        <p>666 rating</p>
                        <p>0 reviews</p>
                    </div>
                    <div class="loved-progress">
                        <p>loved</p>
                        <i class="fa-solid fa-heart"></i>
                        <div class="progress">
                            <div class="bar" style="width:35%">
                            </div>

                        </div>
                        <p>63%</p>
                    </div>

                    <div class="liked-progress">
                        <p>liked</p>
                        <i class="fa-solid fa-thumbs-up"></i>
                        <div class="progress-2">
                            <div class="bar-2" style="width:35%">
                            </div>

                        </div>
                        <p>25%</p>
                    </div>

                    <div class="disliked-progress">
                        <p>disliked</p>
                        <i class="fa-solid fa-thumbs-down"></i>
                        <div class="progress-3">
                            <div class="bar-3" style="width:5%">
                            </div>

                        </div>
                        <p>5%</p>
                    </div> --}}

                    <div class="bottom-rated">
                        <p>{{ $Reviews->count() }} Reviews</p>
                        <div class="rate-icon">
                            @if (Auth::check())
                                @php
                                    $isFavorited = $Favs->where('user_id', Auth::user()->id)->isNotEmpty();
                                @endphp
                                @if ($isFavorited)
                                    <div class="heart-icon" style="background-color: {{ $isFavorited ? 'green' : 'red' }}">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                @else
                                    <div class="heart-icon">
                                        <form action="{{ route('toggleFavorite') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="AudioID" value="{{ $Audio->id }}">
                                            <button type='submit'
                                                style="background-color: transparent; border: none; cursor: pointer;">
                                                <i class="fa-solid fa-heart"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @else
                                <div class="heart-icon" style="background-color: red">
                                    <a href="/login"><i class="fa-solid fa-heart"></i></a>
                                </div>
                            @endif

                            {{-- <div class="heart-icon">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                            <div class="heart-icon">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </div> --}}
                        </div>

                        @if (Auth::check())
                            @if ($Reviews->where('userId', Auth::user()->id)->count() > 0)
                                <button class="rated-btn">You've Already Given a Review</button>
                            @else
                                <button class="rated-btn cursor-pointer" onclick="shareThougths()">Share Your
                                    Thoughts</button>
                            @endif
                        @else
                            <button class="rated-btn cursor-pointer"><a href="{{ route('login') }}"
                                    style="text-decoration: none; color: white;">Please Login</a></button>
                        @endif

                    </div>

                </div>
                <div class="review-content">

                    @if ($Reviews->isNotEmpty())
                        @foreach ($Reviews as $review)
                            <div class="reviewBox" style="margin-bottom: 20px;">
                                <img src="{{ asset('uploads/userProfilePicture/' . $review->user->image) }}"
                                    style="width: 50px; height: 50px; object-fit: cover; border-radius: 100px; "
                                    alt="">

                                @if (Auth::check() && $review->user->id === Auth::user()->id)
                                    <i onclick="openUpdateModal({{ $review->id }})" class="fa fa-pencil"
                                        style="position: absolute; right: 9.5%; margin-top: 10px; color: red;"></i>
                                @endif
                                <div class="reviewContent" style="background-color: rgb(244, 244, 244); width: 80%">
                                    <p style="color: black; font-weight: 600; font-size: 18px">
                                        {{ $review->user->name ?? 'Error Getting UserName' }}</p>

                                    <p style="color: black; font-size: 14px;">{{ $review->reviewText }}</p>
                                </div>
                            </div>

                            <div class="reviewPopupContianer UpdateReviewContainer"
                                id="updatereviewContainer_{{ $review->id }}">
                                <div class="reviewContainerBox">
                                    <i class="fa fa-times" id="close"
                                        style="color: red; position: relative; left: 97%; cursor: pointer;"
                                        onclick="closePopup()"></i>
                                    <form action="{{ route('updateReview') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="userID"
                                            value="{{ Auth::check() ? Auth::user()->id : '' }}">
                                        <input type="hidden" name="musicID" value="{{ $Audio->id }}">
                                        <input type="hidden" name="reviewID" value="{{ $review->id }}">
                                        <textarea name="reviewContent" id="reviewContent" cols="30" rows="10" placeholder="Give Your Remarks">
                                            {{ $review->reviewText }}
                                        </textarea>

                                        <button type="submit" class="cursor-pointer">Update Review</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">no reviews yet
                        </p>
                    @endIf

                </div>
            </div>


        </div>



        <div class="reviewPopupContianer" id="reviewContainer">
            <div class="reviewContainerBox">
                <i class="fa fa-times" id="close" style="color: red; position: relative; left: 97%; cursor: pointer;"
                    onclick="closePopup()"></i>
                <form action="{{ route('addReview') }}" method="post">
                    @csrf
                    <input type="hidden" name="userID" value="{{ Auth::check() ? Auth::user()->id : '' }}">
                    <input type="hidden" name="musicID" value="{{ $Audio->id }}">
                    <textarea name="reviewContent" id="reviewContent" cols="30" rows="10" placeholder="Give Your Remarks"></textarea>

                    <button type="submit" class="cursor-pointer">Add Review</button>
                </form>
            </div>
        </div>

        <div class="related-content-container">
            <p>Latest</p>
            <div class="rating-icon">

                <div class="left-border"></div>
                {{-- <div class="icon">
                    <img src="./Assets/IMG/724200f7-d5ce-40e8-bdc4-018f7477b2d3.jpg" alt="">
                </div> --}}
                <div class="right-border"></div>
            </div>
            <div class="related-movies">
                @foreach ($latest as $latest)
                    <a href="/music/{{ $latest->id }}" class="movie">
                        <img src="{{ asset('uploads/' . $latest->image) }}" style="height: 270px; object-fit: cover;"
                            alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- <script>
    const reviewContainer = document.getElementById('reviewContainer');

    function shareThougths() {
        reviewContainer.classList.add('active');
    }

    function closePopup() {
        reviewContainer.classList.remove('active');
    }
</script> --}}
