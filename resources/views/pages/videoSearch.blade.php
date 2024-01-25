@extends('layout.layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/stream.css') }}">
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
                <div class="movie-list-wrapper" id="searchResults" style="display: flex; flex-wrap: wrap; max-width: 100%;">
                    @foreach ($Videos as $video)
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="{{ asset('uploads/' . $video->image) }}" alt="" />
                            <span class="movie-list-item-title">{{ $video->name }}</span>
                            <p class="movie-list-item-desc">
                                {{ $video->description }}
                            </p>
                            <a href="/video/{{ $video->id }}" class="movie-list-item-button"
                                style="text-decoration: none;">Watch</a>
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
                url: '/searchv',
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
                $.each(results, function(index, video) {
                    var movieListItem = $('<div class="movie-list-item"></div>');
                    var movieListItemImg = $('<img class="movie-list-item-img" src="uploads/' + video
                        .image +
                        '" alt="" />');
                    var movieListItemTitle = $('<span class="movie-list-item-title">' + video.name +
                        '</span>');
                    var movieListItemDesc = $('<p class="movie-list-item-desc">' + video.description +
                        '</p>');
                    var movieListItemButton = $('<a href="/video/' + video.id +
                        '" class="movie-list-item-button" style="text-decoration: none;">Watch</a>');

                    movieListItem.append(movieListItemImg, movieListItemTitle, movieListItemDesc,
                        movieListItemButton);

                    resultsContainer.append(movieListItem);
                });
            } else {
                resultsContainer.append('<p>No results found</p>');
            }
        }
    });
</script>
