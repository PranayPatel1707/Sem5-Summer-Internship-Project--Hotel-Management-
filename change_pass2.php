<?php 
session_start();

	include("db_conn.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        
        $username = $_POST['username'];
		$password = $_POST['password'];
        		
        if(empty($username)){
            header("Location: change_pass.php?error=Username is recquired");
            exit();
    
        }
        elseif(empty($password)){
            header("Location: change_pass.php?error=Password is recquired");
            exit();
    
        }
        else
		{

			//save to database
            $old_username=$_SESSION['username'];
            
			$query = "UPDATE users SET username='$username',password='$password' WHERE username='$old_username' ";
            
			mysqli_query($conn, $query);
			header("Location: change_pass.php?success=Account modified successfully !");
			die;
		}
	}
?>