<?php
   session_start();
  require 'config.php';
 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
    
    <div class="login-box">
     <img src="user1.png" class="user1"> 

    <h1><center>Login Here<center></h1>

    <form method="POST" action="login.php">
    	<p>Username</p>
    	<input name="username" type="text" name="username" placeholder="Enter Username" required>

    	<p>Password</p>
    	<input name="password" type="password" name="password" placeholder="Enter Password" required>

      <a href="quiz.php"><input name="login" type="submit" id="login_btn" value="Login" / ></a>

        <p>If You are not Register?</p>
        <a href="register.php"><input type="button" id="register_btn" value="Register Here"/ ></a> 
    </form> 
	     <footer>
  <center><p>Contact Us</p></center>
  
 <center> <i class="fa fa-facebook" style="font-size:20px;margin: 10px;color:#b52678"></i>
 	<i class="fa fa-google-plus" style="font-size:20px;margin: 10px;color: #b52678"></i>
   <i class="fa fa-linkedin" style="font-size:20px;margin: 10px;color: #b52678"></i>
  <i class="fa fa-twitter" style="font-size:20px margin
  10px;color: #b52678"></i></center>
</footer>

    <?php
      
      if(isset($_POST['login']))
      {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query= "select * from users WHERE username='$username' AND password='$password'";
        
        $query_run= mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0)
        {
          $_SESSION['username']=$username;
          header('location:quiz.php');
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid credentials") </script>';

        }
      }

    ?>

</div>


</body>
</html>
