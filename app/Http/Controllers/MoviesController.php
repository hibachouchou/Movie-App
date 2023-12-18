<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'https://api.themoviedb.org/3/movie/popular?api_key=' . config('services.tmdb.token') . '&language=en-US&page=1';
        $response = Http::get($url);
        $popular_movies = $response->json();
       //
       $url1 = 'https://api.themoviedb.org/3/movie/now_playing?api_key=' . config('services.tmdb.token') . '&language=en-US&page=1';
       $response1 = Http::get($url1);
       $now_playing_movies = $response1->json();
       //
       $url2 = 'https://api.themoviedb.org/3/movie/top_rated?api_key=' . config('services.tmdb.token') . '&language=en-US&page=1';
       $response2 = Http::get($url2);
       $top_rated_movies = $response2->json();
       //
       $url3 = 'https://api.themoviedb.org/3/movie/upcoming?api_key=' . config('services.tmdb.token') . '&language=en-US&page=1';
       $response3 = Http::get($url3);
       $upcoming_movies = $response3->json();
       //dd($popular_movies);
    return view('welcome',['popular_movies'=> $popular_movies,'now_playing_movies'=> $now_playing_movies,'top_rated_movies'=> $top_rated_movies,'upcoming_movies'=> $upcoming_movies]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
