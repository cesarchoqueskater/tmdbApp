<?php

require_once '../api/api_key.php';

if(isset($_POST['number_page'])){
    $page = $_POST["number_page"];
    // echo '<h1>' . $page . '</h1>';
    
    $api_moviedb = "https://api.themoviedb.org/3/movie/popular?api_key=" . $API_KEY . "&language=es-ES&page=" . $page ;
    $datos = json_decode( file_get_contents($api_moviedb), true );

?>

<?php include("card.php");?>
      
<?php

}else{
    printf( "No llegó el valor number_page");
    return null;
}

 ?>