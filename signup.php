<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<style>
    body{
        margin:0px;
        background-size: 100% 100%;
    }
    img{
        background-size: 100% 100%;
        
    }

    *{
        box-sizing: border-box;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    .content{
        position: absolute;
        width:100%;
        float:center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    form{
        max-width: 70%;
        margin: 40px auto;
        padding: 35px;
        border: 2px solid black;
        
        background-color: black;
      
        opacity: 55%;
    }

    h2{
        text-align: center;
        margin-bottom: 20px;
        color: white;
    }

    p{
        color: white;
        margin-left: 17px;
        margin-top: 15px;
    }

    input{
        display:inline-block;
        border: 2px solid black;
        margin:5px;
        padding: 10px;
        width: 250px;
        background-color: lightgrey;
        border-radius: 5px;
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

    label{
        color: white;
        padding:10px;
        font-size:17px;
    }

    button{
        width: 100px;
        float: center;
        background-color: #e91e63;
        color:black;
        padding:10px;
        border: 2px solid black;
        border-radius: 13px;
        margin-left: 10px;

    }
    a{
        color:#e91e63;
    }
    button:hover{
        background-color: lightgrey ;
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

    .sign_in{
        color: white;
        margin-top:7px;

    }


    </style>
</head>
<body>
        <img src="11166-colorful-red-blue-pink-purple-blurred-gradient-minimalism.jpg" alt="background_image" width="100%" height="100%">
        <div class="content">
        <form action="signupadd.php" method="post">
            <h2>SIGN UP</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label> <b>Name</b>            </label>
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="middle_name" placeholder="Middle Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            <br><br>
            <label><b>Email</b></label>
            <input type="email" name="email" placeholder="email address" required>

            <label><b>Contact</b></label>
            <input type="" name="contact" placeholder="0123-456-789" pattern="[0-9]{10}" required>

            <label><b>Gender</b></label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>+.+
            </select>
            <br><br>

            <label><b>User Name</b></label>
            <input type="text" name="username" placeholder="User Name" required>

            <label><b>Password</b></label>
            <input type="password" name="password" placeholder="Password" required><br><br>

            <label><b>Address</b></label><br>
            <textarea name="address" cols="1000" rows="3" required></textarea><br>

            <label for="dob"><b>D.O.B</b></label>
            <input type="date" name="dob" placeholder="dd-mm-yyyy" required>

            <label for="Bed_no"><b>Bed No.</b></label>
            <input type="text" name="bed_no" placeholder="101-1"><br required>

            <label><b>State</b></label>
            <input type="text" name="state" value="Gujarat" required>

            <label><b>Nationality</b></label>
            <input type="text" name="nationality" value="Indian" required><br><br>

            <label><b>Course</b></label>
            <input type="text" name="course" placeholder="Btech Computer Engineering" required>
            
            <label><b>College ID</b></label>
            <input type="text" name="college_id" placeholder="20CE098" required><br><br>

            <label><b>Guardian</b></label>
            <input type="text" name="guardian" required>

            <label><b>Contact</b></label>
            <input type="tel" name="guardian_contact" placeholder="0123-456-789" pattern="[0-9]{10}" required>


        
            <p> Already have an account ? <a href="index.php">LOG IN</a></p>

            <button type="submit"><b>SIGN UP</b></button>
            
        </form>
        </div>

</body>
</html>