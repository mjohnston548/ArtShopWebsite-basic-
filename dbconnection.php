<?php
	try {
		$host='localhost';
		$dbname='artshop';
		$username="root";
		$password="";

		$con=new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password);
	} catch (Exception $e) {
		echo "Error!: " . $e->getMessage() . "</br>";
		die();
	}





?>