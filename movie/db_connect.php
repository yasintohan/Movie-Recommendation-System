<?php 
	
	
	try{
	
	
	$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$host=$cleardb_url["host"];//HOST
	$dbname== substr($cleardb_url["path"],1);
	
	$user= $cleardb_url["user"];
	$pass= $cleardb_url["pass"];
	
	
	$db=new
	PDO("mysql:host=$host;dbname=$dbname;charset=UTF8","$user",$pass);
	
	
	
	
}
catch(PDOException $e){
	print $e->getMessage();
	//header("location: index.php");
	
}
	

	


?>