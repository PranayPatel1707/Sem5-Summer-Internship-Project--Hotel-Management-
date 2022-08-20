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
        <title>STUDENT PROFILE</title>
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

    }
    h2{
        text-align: center;
    }
    button{
        width: 100px;
        float: center;
        background-color: #008CBA;;
        color:black;
        padding:10px;
        border: none;
        border-radius: 13px;
        margin-left: 300px;
    }

    button:hover{
        background-color: #4CAF50 ;
        color: black;
    }
    input{
        display:inline-block;
        border: none;
        margin:0px;
        padding: 8px;
        width: 500px;
        background-color: transparent;
        border-radius: 5px;
        font-size: 20px;
    }
    select{
        border: none;
        margin:0px;
        padding: 8px;
        width: 500px;
        background-color: transparent;
        border-radius: 5px;
        font-size: 20px;
    }
    textarea{
        display:inline-block;
        border: 2px solid black;
        margin:5px;
        padding: 10px;
        width: 250px;
        background-color: lightgrey;
        border-radius: 5px;
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
    .success{
        background-color: #4CAF50;
        color: black;
        margin: 20px auto;
        width: 60%;
        padding: 10px;
        border: 5px;
        border-radius: 7px;
        font-size: 20px;
        font-weight: 400;
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
    <form action="admin_stu_edit2.php" method="post">
    <table>
        <h2>STUDENT PERSONAL DETAILS</h2>
        <?php 
                
                
                if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } 
                ?>
        <tr>
            <th>HOSTEL ID</th>
            <?php
                
                $id=$_GET['id'];
                
                $sql = "SELECT id FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $id=$row["id"];
                    echo "<td>" ."<input type='text' name='id' value='$id' readonly>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>USER NAME</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT username FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $username=$row["username"];
                    echo "<td>" ."<input type='text' name='username' value='$username' readonly >". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>PASSWORD</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT password FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $password=$row["password"];
                    echo "<td>" ."<input type='text' name='password' value='$password' readonly>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>BED NO.</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT bed_no FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $bed_no=$row["bed_no"];
                    echo "<td>" ."<input type='text' name='bed_no' value='$bed_no' required> ". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>FIRST NAME</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT first_name FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $first_name=$row["first_name"];
                    echo "<td>" ."<input type='text' name='first_name' value='$first_name' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>MIDDLE NAME</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT middle_name FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $middle_name=$row["middle_name"];
                    echo "<td>" ."<input type='text' name='middle_name' value='$middle_name' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>LAST NAME</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT last_name FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $last_name=$row["last_name"];
                    echo "<td>" ."<input type='text' name='last_name' value='$last_name' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>GENDER</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT gender FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<td>" . 

                    "<select name='gender'>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                    <option value='other'>Other</option>
                    </select>"

                    ."</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>EMAIL ID</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT email FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $email=$row["email"];
                    echo "<td>" ."<input type='text' name='email' value='$email' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>CONTACT NUMBER</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT contact FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $contact=$row["contact"];
                    echo "<td>" ."<input type='text' name='contact' value='$contact' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>ADDRESS</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT address FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $address=$row["address"];
                    echo "<td>" ."<input type='text' name='address' value='$address' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>DOB</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT dob FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $dob=$row["dob"];
                    echo "<td>" ."<input type='date' name='dob' value='$dob' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>STATE</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT state FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $state=$row["state"];
                    echo "<td>" ."<input type='text' name='state' value='$state' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>NATIONALITY</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT nationality FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $nationality=$row["nationality"];
                    echo "<td>" ."<input type='text' name='nationality' value='$nationality' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>COURSE</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT course FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $course=$row["course"];
                    echo "<td>" ."<input type='text' name='course' value='$course' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>COLLEGE ID</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT college_id FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $college_id=$row["college_id"];
                    echo "<td>" ."<input type='text' name='college_id' value='$college_id' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>GUARDIAN</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT guardian FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $guardian=$row["guardian"];
                    echo "<td>" ."<input type='text' name='guardian' value='$guardian' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
        <tr>
            <th>GUARDIAN CONTACT NUMBER</th>
            <?php
                
                $id=$_GET['id'];
                $sql = "SELECT guardian_contact FROM users WHERE id ='$id' ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $guardian_contact=$row["guardian_contact"];
                    echo "<td>" ."<input type='text' name='guardian_contact' value='$guardian_contact' required>". "</td>";
                }
                else{
                    echo "Not filled";
                }
            ?>
        </tr>
                
        </table>
    
        <button type='submit'><b>Save</b></button>
    </form>
</body>
</html>