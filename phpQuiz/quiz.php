<?php session_start();?>
<?php include 'config.php';?>
 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body>
	
    <header>
      <div class="container">
       
       <h1>PHP Quizzer</h1>


     </div>
   </header>
   
     <main>
     	<div class="container">
       
       <h2>Test Your PHP Knowledge</h2>
       <p>This is a multiple choice quiz to test your knowledge of PHP</p>
       <ul>
       	  <li><strong>Number of Questions:</strong> 5</li>
          <li><strong>Type:</strong>Multiple choice</li>
         
       </ul>
          
      <a href="newquiz.php"><input name="start" type="submit" id="login_btn" value="Start Quiz" / ></a></br> </br>
          <a href="login.php"><input type="button" id="back_btn" value="Back to Login"></a>
        </div>
     </main>


      

     <footer>
     	
       <div class="container">
       
         copyright &copy; 2019, PHP Quizzer


      </div>
     </footer>

    
   




</body>
</html>