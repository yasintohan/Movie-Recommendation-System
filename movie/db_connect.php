<?php 
	
	
	try{
	
	

	$host="eu-cdbr-west-03.cleardb.net";//HOST
	$dbname="heroku_8d86a2a38b98539";
	
	$user= "bed47abdbcdac4";
	$pass= "51537a73";
	
	
	$db=new
	PDO("mysql:host=$host;dbname=$dbname;charset=UTF8","$user",$pass);
	
	
	
	
}
catch(PDOException $e){
	print $e->getMessage();
	//header("location: index.php");
	
}
	

	


?>