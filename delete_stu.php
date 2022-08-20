<?php
session_start();
include("db_conn.php");
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$bed_no = $row["bed_no"];
$query2 = "DELETE FROM users WHERE id = $id"; 
mysqli_query($conn, $query2);
$query3 = "UPDATE beds_info SET allocated='Not-Allocated' WHERE bed_no='$bed_no' ";
mysqli_query($conn, $query3);
header('Location: admin_all_stuid.php'); //If book.php is your main page where you list your all records
exit;

?>