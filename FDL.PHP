<<html>
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
$Email = $_POST['email'];
$Password=$_POST['password'];

$insert_query = "SELECT * FROM credentials WHERE Username='$Username' AND Email= '$Email'";
$result = mysqli_query($connection,$insert_query);

if (!$result) {
    // Error executing the query
    echo "Error: " . mysqli_error($connection);
    exit();
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($Password, $row['Password'])){
		$emails = array("19188039@brookes.ac.uk","18002410@brookes.ac.uk","19280233@brookes.ac.uk","19276146@brookes.ac.uk",
		"p0088119@brookes.ac.uk","19234576@brookes.ac.uk","19277035@brookes.ac.uk");
        if (in_array($row['Email'],$emails )) {
			echo "Welcome to the Administrators Page<br><br>";
			echo "<a href='FDE.html'>Click for Events</a><br><br>";
			echo "<a href='summary1.php'>Academic Conference Feedback Summary</a> <br><br>";
			echo "<a href='summary2.php'>Engineering and Technology Workshop Feedback Summary</a><br><br>";
			echo "<a href='summary3.php'>The Cultural Festival Feedback Summary</a> ";
        } else {
            echo "Regular user login successful<br>";
            echo "<a href='FDE.html'>Click here for Events</a>";
        }
    } else {
        echo "Failure to log in. Incorrect credentials<br>"; 
        echo "<a href='FDL.html'>Click here to Log in</a> ";
    }
} else {
    echo "User not found<br>";
    echo "<a href='FDR.html'>Click here to register</a>";
}

mysqli_close($connection);
?>
</body>
</html>




