<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
	<?php  
  

session_start(); 
  
$aadhar = ""; 
$email    = ""; 
$errors = array();  
$_SESSION['success'] = ""; 

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "immunize";
	$conn = new mysqli($servername, $username, $password,$dbname);
	 if (mysqli_connect_errno($conn))
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
   
// User login 
if (isset($_POST['submit'])) { 
      
    
    $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
   
    // Error message if the input field is left blank 
    if (empty($aadhar)) { 
        array_push($errors, "Aadhar no. is required"); 
    } 
	if(strlen($aadhar)!=12){
		if (count($errors) == 0) {
		array_push($errors, "invalid Aadhar no."); }
	}
    if (empty($password)) { 
		if (count($errors) == 0) {
		array_push($errors, "Password is required"); }
    } 
	$pass="".md5($password)."";
	echo $pass;
    // Checking for the errors 
    if (count($errors) == 0) {
        $query = "SELECT * FROM `customer` WHERE Aadhar = 
                '$aadhar'AND Password='$pass'"; 
        $results = mysqli_query($conn, $query); 
        if (mysqli_num_rows($results) == 1) { 
              
            // Storing username in session variable 
            $_SESSION['username'] = $username; 
            header('location: homepage.php'); 
        } 
        else { 
            // If the username and password doesn't match 
            array_push($errors, "Username or password incorrect");  
        } 
    } 
} 
   
?> 

	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
		<!-- form -->
		<form actiom ="login.php" method="post">
			<div class="form-group">
				<label for="aadharno">Aadhar Number</label>
				<input type="number" class="form-control" id="aadhar" name="aadhar" placeholder="xxxx - xxxx - xxxx">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="**********">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Login</button>
		</form>
		<p>Not a member?<a href="register-1.php" style="margin-left: 2rem;">Register</a></p>
		</div>
		<?php  
			if (count($errors) > 0) : ?> 
		<div class="error" style="color:red"> 
			<?php foreach ($errors as $error) : ?> 
        <p><?php echo"$error" ?></p> 
        <?php endforeach ?> 
		</div> 
		<?php  endif ?> 
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>