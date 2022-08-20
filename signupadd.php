<?php 
session_start();

	include("db_conn.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        
        $email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];
        $nationality = $_POST['nationality'];
        $course = $_POST['course'];
        $guardian = $_POST['guardian'];
        $guardian_contact = $_POST['guardian_contact'];
        $college_id = $_POST['college_id'];
        $bed_no = $_POST['bed_no'];
        $dob = $_POST['dob'];


        $query = ("select * from users where bed_no = '$bed_no';");
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) === 1)
        {
            header("Location: signup.php?error=Entered bed no. is already been allocated to someone");
            exit();
        }
        else{
            //save to database

		    $query2 = ("INSERT into users (username,password,first_name,middle_name,last_name,email,contact,address,course,college_id,guardian,guardian_contact,state,nationality,gender,bed_no,dob) values ('$username','$password','$first_name','$middle_name','$last_name','$email','$contact','$address','$course','$college_id','$guardian','$guardian_contact','$state','$nationality','$gender','$bed_no','$dob')");
		    mysqli_query($conn, $query2);

            $query3 = "UPDATE beds_info SET allocated='Allocated' WHERE bed_no='$bed_no' ";
            mysqli_query($conn, $query3);
            
		    header("Location: login.php");
		    die;
        }
        
        
        

			
	
	}
?>