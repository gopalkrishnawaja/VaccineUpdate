<!DOCTYPE html>
<html>
	<head>
		<title>Registration phase 3</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<?php
  
	session_start();
	?>
				<script>
function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}

function validateForm3() {
  var flag=0;
  console.log("HI")
  var x = document.forms["r3"]["Password"].value;
  var y = document.forms["r3"]["Cpassword"].value;
  document.getElementById("error0").innerHTML=''
  document.getElementById("error1").innerHTML=''
 console.log("2")
  if (!checkPassword(x)) {
	flag=1;
  document.getElementById('error0').style.color="red";
  document.getElementById("error0").innerHTML="Password requirements not satisfied"; 
  }
  console.log(x,y)
  if (x.localeCompare(y)) {
	flag=1;
  document.getElementById('error1').style.color="red";
  document.getElementById("error1").innerHTML="Passwords do not match"; 
  }
  console.log("4")

  if(flag==1){
	  return false
  }else{
	 
	  return true}
  
}
</script>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- form -->
					<form name='r3' action="insert.php"  onsubmit="return validateForm3()" method="post">
						<br>
						<div class="container shadow-sm">
							<div class="row">
								<div class="col-3">
									<div class="form-group">
										<label for="password">Set a Password</label>
										
										<input type="Password" class="form-control" id="Password" name="pass" autocomplete="off" placeholder="**********">
										<div id="error0"></div>
									</div>
								</div>
								<div class="col-1"></div>
								<div class="col-4" align="center">
									*Password should have atleast-<br>1 uppercase letter<br>1 lowercase letter<br>1 digit<br>minimum 6 characters
								</div>
								<div class="col-1"></div>
								<div class="col-3">
									<div class="form-group">
										<label for="cpassword">Confirm Password</label>
										<input type="Password" class="form-control" id="Cpassword" name="cpassword" autocomplete="off" placeholder="**********">
										<div id="error1"></div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="container shadow-sm">
							<div class="row">
								<div class="col-1">
									<p>Add child</p>
								</div>
								<div class="col-11">
									<button class="btn btn-outline-dark"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-3">
									<div class="form-group">
										<!-- <label for="namechild">Set a Password</label> -->
										<input type="text" class="form-control" id="namechild" name="namechild" placeholder="Enter name of child">
									</div>
								</div>
								<div class="col-2">
									<p>Select date of birth<a style="margin-left: 1rem; color: black;" href=""><i class="fa fa-calendar" aria-hidden="true"></i></a></p>
									
								</div>
								<div class="col-4" align="center">
									<p>Select gender</p>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="female" value="female">
										<label class="form-check-label" for="female">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="male" value="male">
										<label class="form-check-label" for="male">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="other" value="">
										<label class="form-check-label" for="other">Other</label>
									</div>
									<div class="form-group form-check">
										<!-- <label for="gender">Other gender</label> -->
										<input type="text" class="form-control" id="gender" name="gender" placeholder="Enter other gender here" disabled>
									</div>
								</div>
								<div class="col-3">
									<div class="form-group">
										<label for="childfile">Upload birth certificate/Aadhar card</label>
										<input type="file" class="form-control" id="childfile" name="childfile">
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="container shadow-sm">
							<div class="row">
								<div class="col-1">
									<p>Vaccination History</p>
								</div>
								<div class="col-11">
									<button class="btn btn-outline-dark"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>Select person</option>
										<option value="self">Self</option>
										<option value="child1">Child 1</option>
									</select>
								</div>
								<div class="col-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>Select vaccine</option>
										<option value="v1">Vaccine 1</option>
										<option value="v2">Vaccine 2</option>
									</select>
								</div>
								<div class="col-3">
									<!-- <label for="year">Year</label> -->
									<input type="text" class="form-control" id="year" name="year" placeholder="Enter year">
								</div>
								<div class="col-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>Select city</option>
										<option value="c1">City 1</option>
										<option value="c2">City 2</option>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>Select zone</option>
										<option value="z1">Zone 1</option>
										<option value="z2">Zone 2</option>
									</select>
								</div>
								<div class="col-4">
									<select class="form-select" aria-label="Default select example">
										<option selected>Select Medical Facility Center</option>
										<option value="center1">Medical Facility Center 1</option>
										<option value="center2">Medical Facility Center 2</option>
									</select>
								</div>
								<div class="col-5"></div>
							</div>
						</div>
						<br>
						<button type="submit" name="submit" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>