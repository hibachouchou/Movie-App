<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
    @foreach ($now_playing_movies['results']  as $movie )
    @if($loop->index >= count($now_playing_movies['results']) - 10)
    <x-movie-card :movie="$movie" :genres="$genres" />  
    @endif           
@endforeach
  </div> 
 
