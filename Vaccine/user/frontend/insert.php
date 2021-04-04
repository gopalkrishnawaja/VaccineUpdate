<?php
	#$servername = "localhost";
	#$username = "root";
	#$password = "gopal123";
	#$dbname = "immunize";
  
	session_start();

	$name=$_SESSION['name'];;
	$dob=$_SESSION['dob'];
	$gender=$_SESSION['gender'];
	$address=$_SESSION['address'];
	$email=$_SESSION['emailid'];
	$aadhar=$_SESSION['aadharno'];
	$mobile=$_SESSION['mobile'];
	$pass=$_POST['pass'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "immunize";
	$conn = new mysqli($servername, $username, $password,$dbname);
	$passh="".md5($pass)."";
	
	 if (mysqli_connect_errno($conn))
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
	$sql="INSERT INTO `customer` (`Aadhar`, `Name`, `Dob`, `Emai`, `Mobile`, `Address`, `Gender`, `Password`) VALUES ('$aadhar', '$name', '$dob', '$email', '$mobile', '$address', '$gender', '$passh') ";
	
	if (mysqli_query($conn, $sql)) {
	header('location: login.php');
	}
	else {
  echo "<br>Error creating table: " . mysqli_error($conn);
}
    // close connection
    mysqli_close($conn)
	
?>