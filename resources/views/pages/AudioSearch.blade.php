@extends('layout.layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/stream.css') }}">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
            rel="stylesheet" />
    </head>
    <div class="container">
        <div class="header-container">
            <div class="content">
                <div class="search">
                    <input type="search" name="inputSearch" id="searchInput"
                        placeholder="Search Any Artist, Year, Album & Name">
                </div>
                {{-- <div class="filteration">
                    <div class="genre-filter">
                        <select name="genre" id="genre">
                            <option value="select">Select Genre</option>
                            <option value="Drama">Drama</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Horror">Horror</option>
                            <option value="Romance">Romance</option>
                            <option value="Western">Western</option>
                            <option value="Thriller">Thriller</option>
                        </select>
                    </div>
                    <div class="subscription-filter">
                        <select name="subscription" id="subscription">
                            <option value="select">Select Genre</option>
                            <option value="Netflix">Netflix</option>
                            <option value="Prime-Videos">Prime Videos</option>
                            <option value="Apple-TV">Apple TV</option>
                            <option value="Disney">Disney</option>
                        </select>
                    </div>
                    <div class="date-filter">
                        <select name="date" id="date">
                            <option value="select">Subscription</option>
                            <option value="Today">Today</option>
                            <option value="Yesterday">Yesterday</option>
                            <option value="Last-Week">Last Week</option>
                            <option value="Last-Month">Last Month</option>
                        </select>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- Main Container Ends -->

        <div class="main-container">
            <div class="movie-list-container">
                <div class="movie-list-wrapper" id="searchResults"
                    style="max-width: 100%; display: flex; gap: 15px; flex-wrap: wrap;">

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
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#searchInput').on('input', function() {
            var searchTerm = $(this).val();

            $.ajax({
                url: '/search',
                type: 'GET',
                data: {
                    term: searchTerm
                },
                dataType: 'json',
                success: function(response) {
                    displaySearchResults(response.results);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });

        function displaySearchResults(results) {
            var resultsContainer = $('#searchResults');
            resultsContainer.empty();

            if (results.length > 0) {
                $.each(results, function(index, music) {
                    var audioContainer = $('<div class="audio_container mt-2"></div>');
                    var audioImage = $('<div class="audio__image"><img src="uploads/' + music.image +
                        '" alt="" /></div>');
                    var audioContent = $('<div class="audio_content"></div>');
                    var musicName = $('<h3><a href="/music/' + music.id +
                        '">' + music.name + '</a></h3>');
                    var artistLink = $('<a href="/artist/' + music.artist.id + '">' + music.artist
                        .name + '</a>');
                    var audioPlayer = $('<div class="audio__player"><a href="/music/' + music.id +
                        '"><i class="fa fa-play"></i></a></div>');

                    audioContent.append(musicName, artistLink);
                    audioContainer.append(audioImage, audioContent, audioPlayer);

                    resultsContainer.append(audioContainer);
                });
            } else {
                resultsContainer.append('<p>No results found</p>');
            }
        }
    });
</script>
