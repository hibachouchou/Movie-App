<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
    @foreach ($now_playing_movies['results'] as $now_playing_movie)
        <div class="mt-8">
            <a href="#">
                <img src="{{ 'https://image.tmdb.org/t/p/w500' . $now_playing_movie['poster_path'] }}" alt="movie" class="hover:opacity-75">
            </a>
            <div class="mt-2 ">
                <a href="#" class="text-lg mt-2 hover:text-gray-300 transition ease-out duration-150" >
                    {{ $now_playing_movie['title'] }}
                </a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span>{{ $now_playing_movie['vote_average'] * 10 . '%' }}</span>
                    <span class="mx-2"></span>
                    <span>{{ \Carbon\Carbon::parse($now_playing_movie['release_date'])->format('M d, Y') }}</span>
                </div>
                <div class="text-gray-400 text-sm">
                    @foreach ($now_playing_movie['genre_ids'] as $genre)
                    @foreach ($genres as $g)
                       @if($genre===$g["id"])
               {{$g["name"]}}
                @endif  
                @endforeach                    
                 @endforeach
                </div>
            </div>
        </div> 
              
@endforeach
  </div> 
 
