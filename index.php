<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
	<style>
    body{
        margin:0px;
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
        max-width: 430px;
        margin: 40px auto;
        padding: 35px;
        border: none;
        
        background-color: black;
        opacity: 55%;
        
    }

    h2{
        text-align: center;
        margin-bottom: 20px;
        color: #f0f8ff;
    }

    p{
        color: white;
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
        font-size:17px;
    }

    button{
        width: 340px;
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
        <form action="login.php" method="post">
            <h2>STUDENT LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label><b>User Name</b></label>
            <input type="text" name="username" placeholder="User Name"><br>

            <label><b>Password</b></label>
            <input type="password" name="password" placeholder="Password"><br>

            <p> Don't have an account ? <a href="signup.php">SIGN UP</a></p>

            <button type="submit"><b>Login</b></button>
            
        </form>
        </div>

</body>
</html>