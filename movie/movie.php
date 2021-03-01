<?php
session_start();

	include("db_connect.php");

if(isset($_GET["id"])) {	
	$id = $_GET["id"];
} else {
	$id = 1;
}


$command = escapeshellcmd('python main.py');
$output = shell_exec($command);
echo $output;
$arr = json_decode($output);
var_dump($arr);



include("php_actions/moviesql.php");



$page = $_SERVER['PHP_SELF'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

   
   <?php include("menus.php"); ?>
   
   

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    
	<ol class="breadcrumb">
	  <li class="active">Ana Sayfa</li>
	</ol>

    <h1><a href="index.php"><strong><span class="glyphicon glyphicon-home"></span> Ana Sayfa</strong></a></h1>
	
	



	
	<hr class="hr">
	

	
<div class="anasayfamenu">
	

	<div class="row">
	
		<div class="col-sm-3 col-md-3 col-lg-2">
			<div class="thumbnail">
				<img src="<?= $movie->COL_1 ?>" alt="<?= $movie->COL_2 ?>" onerror="if (this.src != 'error.jpg') this.src = 'img/default.jpg';" width="100%">
			<div class="caption">
			<h5 style="min-height:70px;"><?= $movie->COL_2 ?></h5>
			<p><?= $movie->COL_3 ?></p>
			<p><?= $movie->COL_7 ?></p>
			<p style="min-height:70px;"><?= $movie->COL_6 ?></p>
		
			</div>
			</div>
		</div>	
	
	</div>
	

  
 
  
  
  
  
  


 </div> 
	
	
	
	
    <hr>
</div>



<?php include("footer.php"); ?>