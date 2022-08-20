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
        <title>ALL STUDENTS ID</title>
    <style>
    table {
        border-collapse: collapse;
        border: 2px solid #e91e63;
        margin-left:300px;
        font-family:'Source Sans Pro', sans-serif;
        font-size: 20px;
        text-align: center;
        color: white;
    }
    th:nth-child(odd) {
        
        
        font-weight: normal;
        padding: 5px;
        width: 400px;
        background-color: #e91e63;
    
    }
    
    tr:nth-child(odd) {
        background-color: #e91e63;
        padding: 5px;
    
    }
    tr:nth-child(even) {
        background-color: #cccccc;
        padding: 5px;
    
    }
    td{
        width: 800px;
        color: black;
    }
    h2{
        text-align: center;
    }
    </style>
</head>
<body style="background-color:#cccccc">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0"  target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="">
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/admin_all_stuid.php">
            
            <span class="nav-link-text ms-1">All Students</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/admin_stu_personal.php">
            
            <span class="nav-link-text ms-1">Student Personal Info</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://localhost/pinestay-master/rooms.php">
            
            <span class="nav-link-text ms-1">Rooms</span>
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
        <h2>STUDENT DETAILS</h2>
        <tr>
            <th>BED NO</th>
            <?php
                
                $bed_no=$_SESSION['bed_no'];
                $sql = "SELECT bed_no FROM users WHERE bed_no ='$bed_no' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . $row["bed_no"]. "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>FIRST NAME</th>
            <?php
                
                $bed_no=$_SESSION['bed_no'];
                $sql = "SELECT first_name FROM users WHERE bed_no ='$bed_no' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . $row["first_name"]. "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>EMAIL ID</th>
            <?php
                
                $bed_no=$_SESSION['bed_no'];
                $sql = "SELECT email FROM users WHERE bed_no ='$bed_no' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . $row["email"]. "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>CONTACT NO</th>
            <?php
                
                $bed_no=$_SESSION['bed_no'];
                $sql = "SELECT contact FROM users WHERE bed_no ='$bed_no' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . $row["contact"]. "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>COLLEGE ID</th>
            <?php
                
                $bed_no=$_SESSION['bed_no'];
                $sql = "SELECT college_id FROM users WHERE bed_no ='$bed_no' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . $row["college_id"]. "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>

    </table>
</body>
</html>