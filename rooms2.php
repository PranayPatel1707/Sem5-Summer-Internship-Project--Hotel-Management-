<?php
session_start();
include "db_conn.php";
if (isset($_POST['room'])){

    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

    $room = validate($_POST['room']);


    if(empty($room)){
        header("Location: rooms.php?error=Enter a room number");
        exit();

    }
    else{
        $sql = "SELECT * FROM room WHERE room_no='$room' ";

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['room_no'] === $room){
                
            	$_SESSION['room_no'] = $room;
                header("Location: room_detail.php");
		        exit();

            }
            else{
                header("Location: rooms.php?error=No room named $room");
                exit();
            }

        }else{
            header("Location: rooms.php?error=No room named $room");
            exit();
        }
        
    }
}else{
    header("Location: rooms.php");
    exit();
}

?>