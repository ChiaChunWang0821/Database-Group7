<?php
	$user = 'root';
	$password = 'bspsak15';
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=taitungtravel;charset=utf8',$user= 'root',$password='bspsak15');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	}
	catch(PDOException $e)
	{
		Print "ERROR!:".$e->message();
		die();
	}
?>