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
    #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 0.5px 4px;  
      border-radius: 5px;  
      font-size: 20px;
    }  
 #btn:hover{  
      background-color: #c0392b;  
    }  
    #btn2{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #32cd32;  
      padding: 0.5px 13px;  
      border-radius: 5px; 
      font-size: 20px; 
    }  
 #btn2:hover{  
      background-color: #008000;  
    }  
    .success{
        background-color: #4CAF50;
        color: white;
        margin-left: 380px;
        width: 40%;
        padding: 10px;
        border: 5px;
        border-radius: 7px;
        font-size: 20px;
        font-family:'Source Sans Pro', sans-serif;
    }
    h2{
        text-align: center;
        margin-bottom: 20px;
        
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
        <h2>ALL STUDENTS</h2>
            <?php 
                
                
                if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } 
                ?>
        <tr>
            <th>HOSTEL ID</th>
            <th>USERNAME</th>
            <th>COLLEGE ID</th>
            <th>ACTION</th>
        </tr>
        <?php
        
            $sql = "SELECT id, username, college_id FROM users";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
                    . $row["college_id"]. "</td>";
                    //echo   "<td><button onclick='deleteRow(".$row["id"].")'>Delete</button></td></tr>";
                    echo "<td><a href='admin_stu_edit.php?id=".$row['id']."' id='btn2'>Edit</a> <a href='delete_stu.php?id=".$row['id']."' id='btn'>Delete</a></td>";
                }
                echo "</table>";
            }
            else { echo "0 results"; }
            
        ?>
    </table>
</body>
</html>