<?php 
    if(sizeof($datos["results"]) > 0 ){
       foreach($datos["results"] as $res){
?>
        <div class="count col-lg-3 col-md-4 col-sm-6 mb-5 card-container">
            <div class="card-flip">
                <div class="card front text-white">
                    <img src="https://image.tmdb.org/t/p/original<?php echo $res["poster_path"] ?>" class="card-img" alt="<?php echo $res["original_title"] ?>">
                </div>
                <div class="card back text-white bg-dark text-center">
                    <div class="card-header"><?php echo $res["title"] ?></div>
                    <div class="card-body">
                        <div class="card-text">
                            <?php                
                                if( strlen($res["overview"]) === 0){
                                    echo "No posee descripción." ;
                                }else{
                                    echo $res["overview"]; 
                                }
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="center">
                            <input type="button" class="button_modal btn btn-success" value="Más info" id="<?php echo $res["id"] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
        };
}else{
    return null;
}
?>