
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="relative">
        <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search" value="{{ $search }}">
        <div class="absolute top-0">
            <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
        </div>
    
        <div class="spinner top-0 right-0 mr-4 mt-3"></div>
        @if (strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4">
            @if(isset($searched_movies['results']) && count($searched_movies['results']) > 0)
                <ul>
                    @foreach($searched_movies['results'] as $movie)
                       @if($loop->index < 7)
                        <li class="border-b border-gray-700">
                            <a href="/show/{{$movie['id'] }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150">
                                <img src="https://image.tmdb.org/t/p/w92{{ $movie['poster_path'] }}" alt="poster" class="w-8">
                                <span class="ml-4">{{ $movie['title'] }}</span>
                            </a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
        @endif
    </div>
    
    