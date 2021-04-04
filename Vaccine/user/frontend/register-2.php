<!DOCTYPE html>
<html>
	<head>
		<title>Registration phase 2</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<?php
  
	session_start();
	$_SESSION['name'] = $_POST['name'];
  
	$_SESSION['dob']= $_POST['dob'];
	$_SESSION['gender']= $_POST['gender'];
	$_SESSION['address']= $_POST['address'];
	$_SESSION['emailid']= $_POST['emailid'];
	$_SESSION['aadharno']= $_POST['aadharno'];
	$_SESSION['mobile']= $_POST['mobileno'];
	
?>



	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- form -->
					<form action="register-3.php" method="post">
						<div class="form-group">
							<label class="align-left" style="margin-right: 2rem;">Verification for mobile</label>
							<button class="btn align-right btn-outline-dark">Send message</button>
							<br><br>
							<p>Enter OTP</p>
							<div class="row">
								<input id='field1' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="5" required>
								<input id='field2' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="2" required>
								<input id='field3' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="1" required>
								<input id='field4' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="9" required>
								<input id='field5' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="9" required>
								<input id='field6' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="9" required>
							</div>
						</div>
						<div class="form-group">
							<label class="align-left" style="margin-right: 2rem;">Verification for email id</label>
							<button class="btn align-right btn-outline-dark">Send link</button>
							<br><br>
							<p>Enter OTP</p>
							<div class="row">
								<input id='field7' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="1" required>
								<input id='field8' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="2" required>
								<input id='field9' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="2" required>
								<input id='field10' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="3" required>
								<input id='field11' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="3" required>
								<input id='field12' type="text" style="margin-right: 2rem; height: 3rem; width:3rem;" value="3" required>
							</div>
							</div>
							<br>
							<div class="form-group">
								<label class="align-left" style="margin-right: 2rem;">Biometric Verification</label>
								<button class="btn align-right btn-outline-dark">Verify</button>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Proceed to phase 3</button>
						</form>
					</div>
				</div>
			</div>
			<script type="text/javascript">
        function Random() {
            return Math.floor(Math.random() * 10);
        }
		for (i = 1; i < 13; i++) { 
		console.log(i,document.getElementById('field'+i).value)
        document.getElementById('field'+i).value = Random()}
</script>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		</body>
	</html>