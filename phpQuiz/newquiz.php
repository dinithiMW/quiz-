<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
	<link rel="stylesheet" type="text/css" href="style2.css" />
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