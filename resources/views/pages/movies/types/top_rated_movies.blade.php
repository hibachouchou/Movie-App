<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
    @foreach ($top_rated_movies['results'] as $movie )
    <x-movie-card :movie="$movie" :genres="$genres" />          
@endforeach
  </div> 
 
