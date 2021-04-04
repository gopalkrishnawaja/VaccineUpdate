<!DOCTYPE html>
<html>
	<head>
		<title>Registration phase 1</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script>
function get_age(born, now) {
  var birthday = new Date(now.getFullYear(), born.getMonth(), born.getDate());
  if (now >= birthday) 
    return now.getFullYear() - born.getFullYear();
  else
    return now.getFullYear() - born.getFullYear() - 1;
}

function validateForm() {
  var flag=0;
  var x = document.forms["r1"]["name"].value;
  document.getElementById("error0").innerHTML=''
  document.getElementById("error1").innerHTML=''


  if (!/^[a-zA-Z ]*$/g.test(x)) {
	   flag=1;
  document.getElementById('error0').style.color="red";
  document.getElementById("error0").innerHTML="Only alphabets allowed"; 
  }
  if (x.length>20) {
	   flag=1;
	document.getElementById('error0').style.color="red";
	document.getElementById("error0").innerHTML="Length Must be less than 20";
  }
  
  var dob = document.getElementById("dob").value;
  var now = new Date();
  var birthdate = dob.split("-");
  var born = new Date(birthdate[0], birthdate[1]-1, birthdate[2]);
  age=get_age(born,now);
  alert(age)
        if (age<18)
        {
			flag=1
			document.getElementById('error1').style.color="red";
			document.getElementById("error1").innerHTML="You need to be 18 years or older";
		}
  if(flag==1){
	  return false
  }else{
	 
	  return true}
  
}
</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- form -->
					
					<form name="r1" action="register-2.php" onsubmit="return validateForm()" method="post">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required >
							 <div id="error0"></div>
						</div>
						<div class="form-group">Select date of birth
						<input type="date" name="dob" id="dob" required>
						<div id="error1"></div>
						</div>
						
						<div class="form-group">
							<label for="mobileno">Mobile Number</label>
							<input type="number" class="form-control" id="mobileno" name="mobileno" placeholder="Enter mobile number">
						</div>
						<div>
							<p>Select gender</p>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="female" id="female" value="female">
								<label class="form-check-label" for="female">Female</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="male"id="male" value="male">
								<label class="form-check-label" for="male">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="other" value="">
								<label class="form-check-label" for="other">Other</label>
							</div>
							<div class="form-group form-check-inline">
								<label for="gender">Other gender</label>
								<input type="text" class="form-control" id="gender" name="gender" placeholder="Enter other gender here" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="address">Full Address</label>
							<input type="text" class="form-control" id="address" name="address" placeholder="Enter full address" required>
						</div>
						<div class="form-group">
							<label for="emailid">Email ID</label>
							<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter email ID" required>
						</div>
						<div class="form-group">
							<label for="aadharno">Aadhar Number</label>
							<input type="number" class="form-control" id="aadharno" name="aadharno" placeholder="Enter aadhar number" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Proceed to phase 2</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>