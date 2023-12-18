<div class="container mx-auto px-4 pt-16">
<div class="popular-movies">
<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
@include('pages.movies.components.popular_movies')
</div>
<div class="nowplaying-movies">
<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mt-8">Now Playing</h2>
@include('pages.movies.components.now_playing_movies')
</div>
<div class="toprating-movies">
<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mt-8">Top Rated Movies</h2>
@include('pages.movies.components.top_rated_movies')
</div>
<div class="upcoming-movies">
<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold mt-8">Upcoming Movies</h2>
@include('pages.movies.components.upcoming_movies')
</div>
</div>
