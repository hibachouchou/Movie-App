<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropDown extends Component
{
    public $search = '';

    public function render()
    {
        $searched_movies = [];

        if(strlen($this->search)>2){
        $url = 'https://api.themoviedb.org/3/search/movie?query=' . $this->search . '&api_key=' . config('services.tmdb.token') . '&language=en-US&page=1';
        $response = Http::get($url);
        $searched_movies = $response->json();
       // dump($searched_movies);
        }
        return view('livewire.search-drop-down', ['searched_movies' => $searched_movies]);   
     
    }
}

