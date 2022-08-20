<?php
session_start();
include "db_conn.php";
if (isset($_POST['bed'])){

    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

    $bed = validate($_POST['bed']);


    if(empty($bed)){
        header("Location: room_detail.php?error=Enter a bed number");
        exit();

    }
    else{
        $sql = "SELECT * FROM beds_info WHERE bed_no='$bed' ";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['bed_no'] === $bed){
                if($row['allocated'] === "Allocated")
                {
                    $_SESSION['bed_no'] = $bed;
                    header("Location: room_detail3.php");
		            exit();
                }
                else
                {
                    header("Location: room_detail.php?error=$bed has not been Allocated to anyone yet");
                    exit();
                    
                }
            }
            else{
                header("Location: room_detail.php?error=No bed named $bed");
                exit();
            }

        }else{
            header("Location: room_detail.php?error=No bed named $bed");
            exit();
        }
        
    }
}else{
    header("Location: room_detail.php");
    exit();
}

?>