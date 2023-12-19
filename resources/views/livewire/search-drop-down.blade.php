
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="relative">
        <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search" value="{{ $search }}">
        <div class="absolute top-0">
            <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
        </div>
    
        @if (strlen($search) >= 2)
            @if (empty($searched_movies))
                <!-- Loading Spinner -->
                <div role="status" class="absolute top-0 right-0 mt-2 mr-2">
                    <svg aria-hidden="true" class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            @else
                <!-- Search Results -->
                <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4">
                    @if(count($searched_movies['results']) > 0)
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
        @endif
    </div>
    