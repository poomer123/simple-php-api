<!DOCTYPE html>
<html>
<head>
	<title>Simple Json API via php</title>
</head>
<body>

<?php 
	// header('Content-type:application/json;charset=utf-8');

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "DB-testing";

	$connect = mysqli_connect($servername, $username, $password, $db) or die("Error " . mysqli_error($connect));

	if ($connect):
		// echo 'connected ';
	endif;




	
	$query = "
		SELECT * FROM DB_usermeta
	";
	
	if( !empty($_GET["id"]) ):
		$query = $query . "WHERE umeta_id = ". $_GET['id'];
	endif;

	// echo "$query";
	$rs_query = mysqli_query($connect, $query) or die("Error in Selecting " . mysqli_error($connect));



	$emparray = array();
	while ( $query_fetch = mysqli_fetch_assoc($rs_query) ):
		$emparray[] = $query_fetch;
	endwhile;




    echo "{";
      echo '"Name Test":';
		echo json_encode($emparray);
	echo "}";
?>




</body>
</html>