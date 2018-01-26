<?php 

	header('Content-type:application/json;charset=utf-8');

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "DB-testing";

	$connect = mysqli_connect($servername, $username, $password, $db);

	if ($connect):
		// echo 'connected ';
	endif;

	$query = "
		SELECT * FROM usermeta
	";

	$rs_query = mysqli_query($connect, $query);




	$emparray = array();
	while ( $query_fetch = mysqli_fetch_assoc($rs_query) ):
		$emparray[] = $query_fetch;
	endwhile;

    echo "{";
      echo '"Name Test":';
		echo json_encode($emparray);
	echo "}";
?>



