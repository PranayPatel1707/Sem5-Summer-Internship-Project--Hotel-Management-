<?php
    session_start();
    include "db_conn.php";
    if (isset($_POST['username'])){
        function validate($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
    
        $username = validate($_POST['username']);

        if(empty($username)){
            header("Location: admin_stu_personal.php?error=Username is recquired");
            exit();
    
        }

        else{
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $username){
                    $_SESSION['username'] = $username;
                    header("Location: admin_stu_personal3.php");
                    exit();
                }
                else{
                    header("Location: admin_stu_personal.php?error=Incorrect username");
                    exit();
                }
            }
            else{
                header("Location: admin_stu_personal.php?error=Incorrect username");
                exit();
            }
        }
    }
    else{
        header("Location: admin_stu_personal.php");
        exit();
    }
?>
