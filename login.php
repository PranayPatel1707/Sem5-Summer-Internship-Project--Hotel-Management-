<?php
session_start();
include "db_conn.php";
if (isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);


    if(empty($username)){
        header("Location: index.php?error=Username is required");
        exit();

    }
    elseif(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();

    }

    else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password){
                /*$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                header("Location: index.php");
		        exit();*/
                header("Location: dshbrd.html");
                $_SESSION['username']=$username;
                $bed_no=$row['bed_no'];
                $result = substr($bed_no, 0, 3);
                $_SESSION['stu_room']=$result;
            }
            else{
                header("Location: index.php?error=Incorrect username or password");
                exit();
            }

        }else{
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
        
    }
}else{
    header("Location: index.php");
    exit();
}

?>