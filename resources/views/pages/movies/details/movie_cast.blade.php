<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($movie_credit['cast'] as $castMember)
            @if($loop->index <5)
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ 'https://image.tmdb.org/t/p/w300' . $castMember['profile_path'] }}" alt="{{ $castMember['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $castMember['name'] }}</a>
                        <div class="text-sm text-gray-400">
                            {{ $castMember['character'] }}
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
