<?php

if(isset($_POST['number_page'])){
    $page = $_POST["number_page"];
    // echo '<h1>' . $page . '</h1>';
    
    //Colocar aqui la Clave que se genero
    $API_KEY = '';
    
    $api_moviedb = "https://api.themoviedb.org/3/movie/popular?api_key=" . $API_KEY . "&language=es-ES&page=" . $page ;
    $datos = json_decode( file_get_contents($api_moviedb), true );

    if(sizeof($datos["results"]) > 0 ){
        foreach($datos["results"] as $res){

?>

        <div class="count col-lg-3 col-md-4 mb-5 col-sm-6 card-container">
            <div class="card-flip">
                <div class="card front text-white">
                    <?php
                        if($res["poster_path"] != ''){
                            echo "<img src='https://image.tmdb.org/t/p/original" . $res["poster_path"] . " ' class='card-img' alt=". $res["original_title"] .">";
                        }else{
                            echo "<img src='https://angelapinyo.com/wp-content/themes/photobook/images/blank.png' alt=". $res["original_title"] .">";
                        }
                    ?>
                </div>
                <div class="card back text-white bg-dark text-center">
                    <div class="card-header"><?php echo $res["title"] ?></div>
                    <div class="card-body">
                        <div class="card-text">
                            <?php                
                                if( strlen($res["overview"]) === 0){
                                    echo "No posee descripción..." ;
                                }else{
                                    echo $res["overview"]; 
                                }
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="center">
                            <a href="#" class="btn btn-success">Más info</a>
                            <!-- <?php echo $page ?>  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        };
    };   

}else{
    // printf( "No llegó el valor number_page");
    return null;
}

 ?>