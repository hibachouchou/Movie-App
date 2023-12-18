
<div>
    @extends('layouts.default')
    <!--Content Section-->
    @section('content')
    @include('pages.movies.components.movie_info') 
    @include('pages.movies.components.movie_cast')
    @include('pages.movies.components.movie_images')
    @stop
    <!---->            
    </div>


