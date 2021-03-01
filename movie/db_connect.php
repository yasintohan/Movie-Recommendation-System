<?php 
	
	
	try{
	$host='localhost';//HOST
	$dbname='movies_db';//DATABASE NAME
	
	$user= 'admin';
	$pass= 'adminpass';
	
	
	$db=new
	PDO("mysql:host=$host;dbname=$dbname;charset=UTF8","$user",$pass);
	
}
catch(PDOException $e){
	print $e->getMessage();
	header("location: index.php");
	
}
	

	


?>