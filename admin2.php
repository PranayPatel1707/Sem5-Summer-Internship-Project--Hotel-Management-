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
        header("Location: admin.php?error=Username is recquired");
        exit();

    }
    elseif(empty($password)){
        header("Location: admin.php?error=Password is recquired");
        exit();

    }

    else{
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password){
                /*$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                header("Location: index.php");
		        exit();*/
                header("Location: dshbrd1.html");

            }
            else{
                header("Location: admin.php?error=Incorrect username or password");
                exit();
            }

        }else{
            header("Location: admin.php?error=Incorrect username or password");
            exit();
        }
        
    }
}else{
    header("Location: admin.php");
    exit();
}

?>