<?php session_start(); ?>


<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='qdb';
  $result;
  

  

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
 mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";
  ?>
<!DOCTYPE html>
<html>
<head>
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
     
     <h2>Congatulatins..! You are Done.</h2>

   </div>
 </main>


<div class="container">


<?php




$result=0;
if (isset($_POST['submit'])) {
if (!empty($_POST['qcheck'])) {
$count = count($_POST['qcheck']);
     


      echo " You have selected " . $count . " Questions: ";?>
     
     <?php


      $selected = $_POST['qcheck'];
      $q = "select * from questions";
      $query = mysqli_query($conn, $q);
      $i = 1;
      while($rows = mysqli_fetch_array($query)) {

      $checked = $rows['ans_id'] == $selected[$i];
      if ($checked) {
      $result++;
      }else{

         }
          $i++;
          
        }
    
?>
<?php

    
      echo "<strong><font-size=20px>Your score is: <strong>".$result ."</br>";
      }
      else{
        echo "<b>Please Select Atleast One Option.</b>";
        }
         
        }
        ?>
      </div>
    
    <main>
      <div class="container">
       
      
          <a href="login.php"><input type="button" id="logout_btn" value="Logout"></a>
        </div>
     </main>


   <footer>

      
       <div class="container">
       
         copyright &copy; 2019, PHP Quizzer


      </div>
     </footer>
</body>
</html>