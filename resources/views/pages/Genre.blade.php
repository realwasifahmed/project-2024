@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="content-container">


            @if ($Musics->isEmpty() && $Videos->isEmpty())
                <h1 style="padding: 20px;">Not Music Neither Video is availabe in {{ $Genre }}</h1>
            @endif
            <!-- Audio Section -->
            @if ($Musics->isNotEmpty())
                <div class="movie-list-container" style="padding-top: 30px;">
                    <h1 class="movie-list-title">All Musics in {{ $Genre }}</h1>
                    <div class="movie-list-wrapper" style="max-width: 100%; display: flex; gap: 15px; flex-wrap: wrap;">

                        @foreach ($Musics as $music)
                            <div class="audio_container mt-2">
                                <div class="audio__image">
                                    <img src="{{ asset('uploads/' . $music->image) }}" alt="" />
                                </div>
                                <div class="audio_content">
                                    <h3><a href="#">{{ $music->name }}</a></h3>
                                    <a href="#">{{ $music->artist->name }}</a>
                                </div>
                                <div class="audio__player">
                                    <a href="/music/{{ $music->id }}"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            @endif

            <!-- Audio Section -->


            {{-- Latest Stream --}}
            @if ($Videos->isNotEmpty())
                <div class="movie-list-container" style="padding-top: 30px;">
                    <h1 class="movie-list-title">All Streams in {{ $Genre }}</h1>
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
                                    <a href="/music/{{ $video->id }}" class="movie-list-item-button"
                                        style="text-decoration: none;">Watch</a>
                                </div>
                            @endforeach


                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
            @endif
            {{-- Latest Stream --}}






        </div>
    </div>
@endsection
