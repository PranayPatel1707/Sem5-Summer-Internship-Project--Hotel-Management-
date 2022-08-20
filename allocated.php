<?php
session_start();
include("db_conn.php");
?>
<?php
$bed_no=$_SESSION['bed_no'];

function check()
{
    $query = ("select * from users where bed_no = '$bed_no';");
    $result = mysqli_query($conn,$query);

	return $result;
}




?>