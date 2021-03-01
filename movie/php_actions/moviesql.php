<?php 	


$moviequery=$db->prepare("SELECT * FROM `imdb_top_1000` WHERE `movie_id` = {$id}");
$moviequery->execute();
$movie=$moviequery-> fetch(PDO::FETCH_OBJ);




?>