<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
$db_username = 'root';
$db_password = '';
$db_host='localhost';
$db_database='fdgr5';
$connection = mysqli_connect($db_host,$db_username,$db_password,$db_database);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

$likedMost = $_POST['likedMost'];
$improvement=$_POST['improvement'];
$recommendation = $_POST['recommendation'];
$overallExperience = $_POST['overallExperience'];
$anonymityRating = $_POST['anonymityRating'];

$insert_query ="INSERT INTO feedback1 (likedMost,improvement,recommendation,overallExperience,anonymityRating) values('$likedMost','$improvement','$recommendation','$overallExperience','$anonymityRating')";

$result = mysqli_query($connection,$insert_query);
  
	if($result){
		echo "Create Feedback Data Succeeded<br>";
		echo "<a href='FDE.html'>Click here to see Events</a> ";
}
	else {
    echo "Error connection:". mysqli_connect_error();
  }
  mysqli_close($connection);

?>
</body>
</html>



