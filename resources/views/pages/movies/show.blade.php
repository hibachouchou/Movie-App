
<div>
    @extends('layouts.default')
    <!--Content Section-->
    @section('content')
    @include('pages.movies.details.movie_info') 
    @include('pages.movies.details.movie_cast')   
    @include('pages.movies.details.movie_images')
    @stop
    <!---->            
    </div>


