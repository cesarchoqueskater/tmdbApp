<?php

require 'api_key_tmdb.php';

$page = 1;


$api_moviedb = "https://api.themoviedb.org/3/movie/popular?api_key=" . $API_KEY . "&language=es-ES&page=" . $page ;
$datos = json_decode( file_get_contents($api_moviedb), true );

