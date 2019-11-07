<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
	<link rel="stylesheet" type="text/css" href="style2.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>



<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='qdb';
 

  

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
  mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";
  ?>


<form action="final.php" method="POST">
<?php
    $q = "SELECT * FROM questions  ORDER BY rand() limit 5"; 
	$x=1;
	$query = mysqli_query($conn,$q);
	
	while ($rows = mysqli_fetch_array($query)) {

		?>

	<div class="current">Question <?php echo $x; ?> of 5 </div>
           
	<div class="card">
		<p class="card-header"><?php echo $rows['question'] ?></p>
		 <footer>
  <center><p>Contact Us</p></center>
  
 <center> <i class="fa fa-facebook" style="font-size:20px;margin: 10px;color:#b52678"></i>
 	<i class="fa fa-google-plus" style="font-size:20px;margin: 10px;color: #b52678"></i>
   <i class="fa fa-linkedin" style="font-size:20px;margin: 10px;color: #b52678"></i>
  <i class="fa fa-twitter" style="font-size:20px margin
  10px;color: #b52678"></i></center>
</footer>
	
	<?php
	$q = "SELECT * FROM answer WHERE ans_id='{$rows['qid']}' order by rand()"; 
	$query1 = mysqli_query($conn, $q);
	$x++;
	while ($rows = mysqli_fetch_array($query1)) { 
		?>
		
		<div class="card-body">
			<input type="radio" name="qcheck[<?php echo $rows['ans_id'] ; ?>] "  value="<?php echo $rows['aid']; ?>">
			<?php echo $rows['answer'];  ?>
		</div>
	


	<?php  
} 
}
 ?>
  </div>

 <div class="button">
<input type="submit" name="submit" id="submit_btn" value="Submit" >
<a href="final.php">
</div>
</form>

<footer>
      
       <div class="container">
       
         copyright &copy; 2019, PHP Quizzer


      </div>
     </footer>

</body>
</html
