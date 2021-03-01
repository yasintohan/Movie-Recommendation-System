<?php 	





$querystr = " FROM `imdb_top_1000` ";

if((isset($_GET["name"]) AND $_GET["name"] != '') OR 
isset($_GET["category"]) OR 
(isset($_GET["yearmin"]) AND $_GET["yearmin"] != '' ) OR 
(isset($_GET["yearmax"]) AND $_GET["yearmax"] != '') OR 
(isset($_GET["imdbmin"]) AND $_GET["imdbmin"] != '') OR 
(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') ) {
	$querystr .= " WHERE ";
}
	



if(isset($_GET["name"]) AND $_GET["name"] != '') {	
	$name = $_GET["name"];
	$querystr .= " `COL_2` LIKE '%{$name}%' ";
	if(	
	(isset($_GET["category"]) AND $_GET["category"] != '') OR 
	(isset($_GET["yearmin"]) AND $_GET["yearmin"] != '' ) OR 
	(isset($_GET["yearmax"]) AND $_GET["yearmax"] != '') OR 
	(isset($_GET["imdbmin"]) AND $_GET["imdbmin"] != '') OR 
	(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') ) {
		$querystr .= " AND ";
	}
} 
if(isset($_GET["category"]) ) {	
	$category = $_GET["category"];
} 
if(isset($_GET["yearmin"]) AND $_GET["yearmin"] != '' ) {	
	$yearmin = $_GET["yearmin"];
	$querystr .= " `COL_3` >= '{$yearmin}' ";
	if(	
	
	(isset($_GET["yearmax"]) AND $_GET["yearmax"] != '') OR 
	(isset($_GET["imdbmin"]) AND $_GET["imdbmin"] != '') OR 
	(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') ) {
		$querystr .= " AND ";
	}
} 
if(isset($_GET["yearmax"]) AND $_GET["yearmax"] != '') {	
	$yearmax = $_GET["yearmax"];
	$querystr .= " `COL_3` <= '{$yearmax}' ";
	if(	
	(isset($_GET["imdbmin"]) AND $_GET["imdbmin"] != '') OR 
	(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') ) {
		$querystr .= " AND ";
	}
} 
if(isset($_GET["imdbmin"]) AND $_GET["imdbmin"] != '') {	
	$imdbmin = $_GET["imdbmin"];
	$querystr .= " `COL_7` >= '{$imdbmin}' ";
	if(	
	(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') ) {
		$querystr .= " AND ";
	}
} 
if(isset($_GET["imdbmax"]) AND $_GET["imdbmax"] != '') {	
	$imdbmax = $_GET["imdbmax"];
	$querystr .= " `COL_7` <= '{$imdbmax}' ";
} 

switch ($type) {
  case 1:
    $typestring = " order by COL_7";
    break;
  case 2:
    $typestring = " order by COL_3";
    break;
  case 3:
    $typestring = " order by COL_2";
    break;
    
  default:
	$typestring = "";
    
}

switch ($sort) {
  case 0:
    $sortstring = " ASC ";
    break;
  case 1:
    $sortstring = " DESC ";
    break;
    
  default:
	$sortstring = "";
    
}

$querystr .= $typestring;
$querystr .= $sortstring;

$countquery=$db->prepare("SELECT COUNT(`COL_1`) as con {$querystr}");
$countquery->execute();
$count=$countquery-> fetch(PDO::FETCH_OBJ);
$pagecount= ceil($count->con / 24);

$querystr .= "LIMIT 24 OFFSET {$ofset}";
$query=$db->prepare("SELECT * {$querystr}");
$query->execute();
$plots=$query-> fetchAll(PDO::FETCH_OBJ);







?>