<?php 
	
	
	try{
	
	
	$cleardb_url      = parse_url(getenv("mysql://bed47abdbcdac4:51537a73@eu-cdbr-west-03.cleardb.net/heroku_8d86a2a38b98539?reconnect=true"));
	$cleardb_server   = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_db       = substr($cleardb_url["path"],1);


	$active_group = 'default';
	$query_builder = TRUE;

	$db['default'] = array(
		'dsn'    => '',
		'hostname' => $cleardb_server,
		'username' => $cleardb_username,
		'password' => $cleardb_password,
		'database' => $cleardb_db,
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
	
	
}
catch(PDOException $e){
	print $e->getMessage();
	header("location: index.php");
	
}
	

	


?>