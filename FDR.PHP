<html>
<body>
<?php

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

$Username = $_POST['username'];
$Email=$_POST['email'];
$Password = $_POST['password'];
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

$check = mysqli_query($connection, "SELECT * FROM credentials WHERE Username = '$Username' AND Email = '$Email'");

if(mysqli_num_rows($check) > 0){
    echo "This User already exists<br>";
	echo "<a href='FDR.html'>Click here to Register</a> ";
    }
 else{

	$insert_query ="INSERT INTO credentials (Username,Email,Password) values('$Username','$Email','$hashedPassword')";


	$result = mysqli_query($connection,$insert_query);
  
	if($result){
		echo "Create User Data Succeeded<br>";
		echo "<a href='FDL.html'>Click here to Login</a> ";
}
	else {
    echo "Error connection:". mysqli_connect_error();
  }
  mysqli_close($connection);
 }
?>
</body>
</html>


