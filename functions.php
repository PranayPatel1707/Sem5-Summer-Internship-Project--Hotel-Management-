<?php
session_start();
include("db_conn.php");
function random_num()
{

	
	$bed_no=$_SESSION['bed_no'];
	$query = "select * from users where bed_no = '$bed_no';
    $result = mysqli_query($conn,$query);

	return $text;
}
?>