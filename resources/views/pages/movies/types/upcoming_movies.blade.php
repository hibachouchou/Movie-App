<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
    @foreach ($upcoming_movies['results'] as $movie )
    @if($loop->index < 10)
    <x-movie-card :movie="$movie" :genres="$genres" />  
    @endif
@endforeach
  </div> 
 
