<?php  


if(isset($_POST['id_movie'])){
    $id_movies = $_POST['id_movie'] ;
    
    include("../details_movie_api.php");

        $genres_total = count($data_movie["genres"]);

        // Formatear Fecha
        $release_date = $data_movie["release_date"];
        $date_value = explode('-', $release_date);
        $newDate = $date_value[2].'/'.$date_value[1].'/'.$date_value[0];
?>
    

        <div class="modal-view">
            <div class="img-photo-background">
                <img src="https://image.tmdb.org/t/p/original<?php echo $data_movie["backdrop_path"] ?>" class="img-card-model" alt="<?php echo $data_movie["original_title"] ?>">
            </div>

            <div class="description-movie img-poster-background">
                <img src="https://image.tmdb.org/t/p/original<?php echo $data_movie["poster_path"] ?>" class="img-poster" alt="<?php echo $data_movie["original_title"] ?>">
            </div>
            <div class="description-movie description-poster-background">
                <h1 class="title-movie"><?php echo $data_movie["original_title"] ?> (<?php echo $date_value[0] ?>)</h1>
                <h4 class="genres-movie">
                    <?php echo $newDate . "   "?>
                    <?php 
                        for($i = 0;  $i < $genres_total ; $i++){
                            if($i != ($genres_total - 1) ){
                                echo $data_movie["genres"][$i]["name"] . ' - ';
                            }else{
                                echo ' '. $data_movie["genres"][$i]["name"] ;
                            } 
                        }
                    ?>
                </h4>
                <div class="percentage-movie">
                    <div class="puntuacion-text">
                        <h3>Puntuación <br>de <br>usuario</h3>
                    </div>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="0 0 36 36" class="circular-chart color">
                                <path class="circle-bg" d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="<?php echo ($data_movie["vote_average"]*10) ?>, 100" d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"><?php echo ($data_movie["vote_average"]*10) ?>%</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <h4 class="sub_title-movie">Vista General</h4>
                <div class="view-general">
                    <?php                
                        if( strlen($data_movie["overview"]) === 0){
                            echo "No posee descripción." ;
                        }else{
                            echo $data_movie["overview"]; 
                        }
                    ?>
                </div>
            </div>
        </div>
              
<?php
  }else{
     echo 'No se puede mostrar mas detalle de la pelicula id no reconocido';
  }
?>