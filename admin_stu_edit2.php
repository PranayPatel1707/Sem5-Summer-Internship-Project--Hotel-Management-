<?php 
session_start();

	include("db_conn.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $id = $_POST['id'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];
        $nationality = $_POST['nationality'];
        $course = $_POST['course'];
        $guardian = $_POST['guardian'];
        $guardian_contact = $_POST['guardian_contact'];
        $college_id = $_POST['college_id'];
        $email = $_POST['email'];
        		
    

		//save to database
    
    
		$query = "UPDATE users SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',dob='$dob',email='$email',address='$address',contact='$contact',state='$state',gender='$gender',nationality='$nationality',guardian='$guardian',guardian_contact='$guardian_contact',college_id='$college_id',course='$course' WHERE username='$username' ";
    
		mysqli_query($conn, $query);
		header("Location: admin_all_stuid.php?success=Details of student with Hostel ID $id modified successfully !");
		die;

	}
?>