<?php

//Colocar aqui la Clave que se genero
$API_KEY = '';

$page = 1;


$api_moviedb = "https://api.themoviedb.org/3/movie/popular?api_key=" . $API_KEY . "&language=es-ES&page=" . $page ;
// print_r($api_moviedb);
$datos = json_decode( file_get_contents($api_moviedb), true );
