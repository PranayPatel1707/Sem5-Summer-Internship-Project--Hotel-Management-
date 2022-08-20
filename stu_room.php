<?php
    session_start();
    include("db_conn.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Hostel Management System Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
        <title>ROOM REPORT</title>
    <style>
    table {
        border-collapse: collapse;
        width: 65%;
        margin-left: 380px;
        font-family:'Source Sans Pro', sans-serif;
        font-size: 20px;
        text-align: center;
        border: 2px solid black;
    }
    th {
        background-color: #000;
        color: white;
        font-weight: normal;
        padding: 5px;
    }
    tr:nth-child(odd) {
        background-color: white;
        padding: 5px;
        color: black;
    }
    tr:nth-child(even) {
        background-color: #cccccc;
        padding: 5px;
        color: black;
    }
    form{
        max-width: 450px;
        margin: 40px auto;
        padding: 30px;
        border: 2px solid black;
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: transparent;
        border-radius: 5px;
        
    }
    input{
        display:block;
        border: 2px solid black;
        margin:10px;
        padding: 10px;
        width: 95%;
        background-color: lightgrey;
        border-radius: 5px;
    }
    label{
        color: black;
        padding:10px;
        font-size:17px;
    }
    button{
        width: 100px;
        float: center;
        background-color: #008CBA;
        color:white;
        padding:10px;
        border: 2px solid black;
        border-radius: 13px;
        margin-left: 10px;

    }

    button:hover{
        background-color: #4CAF50 ;
        color:white;
    }
    .error{
        background-color: orangered;
        color: black;
        margin: 20px auto;
        width: 95%;
        padding: 10px;
        border: 5px;
        border-radius: 7px;
    }
    form{
        max-width: 600px;
        margin: 40px auto;
        padding: 30px;
        border: 3px solid black;
        
        background-color: #e91e63; 
        border-radius: 10px;       
    }

    h2{
        text-align: center;
        margin-bottom: 20px;

    }

    p{
        color: black;
        margin-left: 17px;
        margin-top: 15px;
    }

    input{
        display:block;
        border: 2px solid black;
        margin:10px;
        padding: 10px;
        width: 95%;
        background-color: white;
        border-radius: 5px;
    }

    label{
        color: white;
        padding:10px;
        font-size:22px;
    }
    *{
        box-sizing: border-box;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    button{
        width: 150px;
        float: center;
        background-color: #f5deb3;
        color:black;
        padding:10px;
        border: 2px solid black;
        border-radius: 13px;
        margin-left: 10px;

    }

    button:hover{
        background-color: lightgrey ;
        color: black;
    }

    .error{
        background-color: #f5deb3;
        color: black;
        margin: 20px auto;
        width: 95%;
        padding: 10px;
        border: 5px;
        border-radius: 7px;
    }
    </style>
</head>
<body style="background-color:#cccccc">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/stu_profile.php">
            
            <span class="nav-link-text ms-1">My Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/stu_room.php">
            
            <span class="nav-link-text ms-1">Room Details</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/change_pass.php">
            
            <span class="nav-link-text ms-1">Change Password</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/index.html">
            
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>      
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  
  
    
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
 
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
    <table>
        <h2>ROOM DETAILS</h2>
        <tr>
            <th>SR NO</th>
            <th>BED NO</th>
            <th>ROOM NO</th>
            <th>COST</th>
            <th>ALLOCATED</th>
        </tr>
        <?php

            $room_no = $_SESSION['stu_room'];
            $sql = "SELECT * FROM beds_info where room_no='$room_no' ";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) > 0){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["sr_no"]. "</td><td>" . $row["bed_no"] . "</td><td>"
                    . $row["room_no"]. "</td><td>" . $row["cost"]."</td><td>" . $row["allocated"]. "</td></tr>";
                }
                echo "</table>";
                
            }
            else { echo "0 results"; }
            
        ?>
    </table>
    <form action="stu_room2.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>            
        <label for="bed">Enter bed number to view student details</label>
        <input type="text" id="bed" name="bed" placeholder="101-1"><br>
        <button type="submit">View</button>
    </form>
</body>
</html>


