<div class="movie-images">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($movie_images['backdrops'] as $image)
            image
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('https://image.tmdb.org/t/p/w500' . $image['file_path']) }}" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
