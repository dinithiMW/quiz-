<?php
   
  require 'config.php';


  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
      
    <div class="login-box">
  <img src="user1.png" class="user1"> 

    <h1><center>Registration Here<center></h1>

    <form method="POST" action="register.php">
    	<p>Username</p>
    	<input name="username" type="text" name="username" placeholder="Enter Username" required>

    	<p>Password</p>
    	<input name="password" type="password" name="password" placeholder="Your Password" required>

        <p>Confirm Password</p>
        <input name="cpassword" type="password" name="password" placeholder="Confirm Password" required>

    	   <a href="login.php"><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" ></a>

       
        <a href="login.php"><input type="button" id="back_btn" value="Back to Login"></a>
    </form>


<?php
  
   if (isset($_POST['submit_btn']))
   {
    /*echo '<script type="text/javascript"> alert("Sign up button clicled") </script> ';*/

     $username=$_POST['username'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];

     if($password==$cpassword)
     {
        $query=" select * from users WHERE username='$username' ";
        $query_run= mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript"> alert("User already exists.. Try another username") </script> ';
        }
        else
        {
           $query=" insert into users value ('$username', '$password')";
           $query_run = mysqli_query($con,$query);

           if($query_run)
           {
             echo '<script type="text/javascript"> alert("User Registered.. go to login page to login ") </script> ';
             
           } 
           else{
             echo '<script type="text/javascript"> alert("Error") </script> ';
       }
        }

     }
 
     else{
       echo '<script type="text/javascript"> alert("Password and Confirm password does not match") </script> ';
       }
 

   }  
?>

</div>


</body>
</html>