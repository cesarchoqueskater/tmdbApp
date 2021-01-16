<?php

require 'api_key_tmdb.php';


$api_moviedb = "https://api.themoviedb.org/3/movie/" . $id_movies . "?api_key=" . $API_KEY . "&language=es-ES" ;
$data_movie = json_decode( file_get_contents($api_moviedb), true );