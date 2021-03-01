<?php
session_start();

	include("db_connect.php");

if(isset($_GET["page"])) {	
	$pg = $_GET["page"];
	$ofset = ($_GET['page'] - 1) * 24;
} else {
	$ofset = 0;
	$pg = 0;
}

if(isset($_GET["type"]) AND isset($_GET["sort"])) {	
	$type = $_GET["type"];
	$sort = $_GET["sort"];
} else {
	$type = 0;
	$sort = 2;
}




include("php_actions/mainsql.php");












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
	

	
	
	
<div class="row" style="margin-bottom:10px;">
<div class="col-lg-12">
	<div class="btn-group pull-right">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            
			
			Filter By	 
			<?php switch ($type) {
			  case 1:
				echo " Imdb score";
				break;
			  case 2:
				echo " Date";
				break;
			  case 3:
				echo " Alphabetical";
				break;
				
			  default:
				echo "";
				
			} ?>
			
			
			<span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="index.php?type=1&sort=0<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Increasing by imdb score</a></li>
            <li><a href="index.php?type=1&sort=1<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Decreasing by imdb score</a></li>
			<li class="divider"></li>
            <li><a href="index.php?type=2&sort=0<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Increasing by date</a></li>
            <li><a href="index.php?type=2&sort=1<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Decreasing by date</a></li>
			<li class="divider"></li>
            <li><a href="index.php?type=3&sort=0<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Alphabetical order - A-Z</a></li>
            <li><a href="index.php?type=3&sort=1<?php if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>">Alphabetical order - Z-A</a></li>
          </ul>
        </div>
</div>
 </div>
  
  <div class="row">
  
  
							<?php
							foreach($plots as $plot){?>
								
								
							  <div class="col-sm-3 col-md-3 col-lg-2">
								<div class="thumbnail">
								  <img src="<?= $plot->COL_1 ?>" alt="<?= $plot->COL_2 ?>" onerror="if (this.src != 'error.jpg') this.src = 'img/default.jpg';" width="100%">
								  <div class="caption">
									<h5 style="min-height:70px;"><?= $plot->COL_2 ?></h5>
									<p><?= $plot->COL_3 ?></p>
									<p><?= $plot->COL_7 ?></p>
									<p style="min-height:70px;"><?= $plot->COL_6 ?></p>
									<a href="movie.php?id=<?= $plot->movie_id ?>" class="btn btn-primary" role="button">Filme Git</a>
								  </div>
								</div>
							  </div>	
															
						
								
							<?php } ?>
  

  
  
  
</div>
  
  
  <nav aria-label="Page navigation">
  
  <ul class="pagination">
	<?php if($pg > 1) { ?>
	<li>
      <a href="index.php?page=1<?php if (isset($type) AND isset($sort) AND $type != 0) { ?>&type=<?= $type ?>&sort=<?= $sort;  } if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;&laquo;</span>
      </a>
    </li>
	
    <li>
      <a href="index.php?page=<?= $_GET['page']-1 ?><?php if (isset($type) AND isset($sort) AND $type != 0) { ?>&type=<?= $type ?>&sort=<?= $sort;  } if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
	<?php } ?>
	
	
	
	
	
	<?php
	if($pg < 5) { $x = 1; if($pagecount >10) {$y = 10;} else {$y = $pagecount; } } else { $x = $pg-4; 
		if($pg+5 > $pagecount) {
			$y = $pagecount;
		} else { $y = $pg+5; }
	}
	
	
	for ($x; $x <= $y; $x++) { 
	
	if($pg == $x) { ?> 

	<li class="active">
	
	<?php } else { ?>
	
	<li>
	<?php } ?>
	
	  <a href="index.php?page=<?= $x ?><?php if (isset($type) AND isset($sort) AND $type != 0) { ?>&type=<?= $type ?>&sort=<?= $sort;  } if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>"><?= $x ?></a></li>
	
	<?php } ?>
	
	
	
	
<?php if($pg < $pagecount) { ?>
    <li>
      <a href="index.php?page=<?= $_GET['page']+1 ?><?php if (isset($type) AND isset($sort) AND $type != 0) { ?>&type=<?= $type ?>&sort=<?= $sort;  } if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
	<li>
      <a href="index.php?page=<?=  $pagecount ?><?php if (isset($type) AND isset($sort) AND $type != 0) { ?>&type=<?= $type ?>&sort=<?= $sort;  } if(isset($name)) { ?>&name=<?=$name; }  if(isset($yearmin)) { ?>&yearmin=<?=$yearmin; }  if(isset($yearmax)) { ?>&yearmax=<?=$yearmax; }  if(isset($imdbmin)) { ?>&imdbmin=<?=$imdbmin; }  if(isset($imdbmax)) { ?>&imdbmax=<?=$imdbmax; } ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;&raquo;</span>
      </a>
    </li>
	
	<?php } ?>
	
  </ul>
  
  
  
</nav>
  
  
 
  
  
   
  
  
  
  
  
  


 </div> 
	
	
	
	
    <hr>
</div>



<?php include("footer.php"); ?>