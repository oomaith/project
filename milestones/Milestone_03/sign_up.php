<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="cp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cornfed Coworking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-md-10">
  <img src="images/mylogo12.gif" alt="logo" title="mylogo12" >
  </div> 
  <div class="col-md-2"> 
  <!-- <div class="mybutton">
  <button class="btn btn-primary" type="button" onclick="alert('Thank you for log in!')"class="button">log in</button>
<button class="btn btn-primary" type="button" onclick="alert('Thank you for sign up!')"class="button">sign up</button>
  </div> -->
  </div>
  </div>
  

   <div class="container">
  <nav class="nav navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="hp.html"> Home </a></li>
<li><a href="pp.html"> Plan & Pricing </a></li>
<li><a href="tp.html">Terms of Service </a></li>
<li><a class="active" href="cp.html">Contacts </a></li>
  </ul>
  </div>
  </nav>
   <div id="wrapper">
 <div id="container">
 <h3>User Registration Form </h3>


 
   <form onsubmit="return checkForm();" method="post" action="mailto:olhaith@gmail.com">
  <div class="contact_name">
    <span class="contact_label"><strong>*You full Name:</strong></span></br>
    <input type="text" id="name" required placeholder="Name"/><br />
    <div class="error" id="nameError"></div>
  </div> <!-- .contact_name ends -->
 
  <div class="contact_email">
    <span class="contact_label"><strong>*Email:</strong></span></br>
    <input type="text" id="email" required placeholder="name@domain.com" /><br />
    <div class="error" id="emailError" ></div>
  </div> <!-- .contact_email ends -->
  
  <div class="yourpassword">
    <span class="contact_label"><strong>*Password:</strong></span></br>
    <input type="text" id="password"/><br />
    <div class="error" id="passwordError" ></div>
  </div> <!-- .contact_email ends -->
  
 <div class="contact_phone">
    <span class="contact_label"><strong>*Phone number:</strong></span></br>
    <input type="text" id="phone" required placeholder="555-555-5555" /><br />
    <div class="error" id="phoneError"></div>
  </div> <!-- .contact_email ends -->
 
 
  <div class="company_name">
    <span class="contact_label"><strong>Company Name:</strong></br></span>
    <input id="CompanyName" id="CompanyName"></input>
    <div class="error" id="CompanyNameError"></div>
  </div> <!-- .company_name ends -->
  
  <div class="DateOfBirth">
    <span class="contact_label"><strong>Date of Birth:</strong></br></span>
    <input id="dob" id="telephone"></input>
    <div class="error" id="dobError"></div>
  </div> <!-- .dob ends -->
 
  <div class="contact_submit">
    <input type='submit' value='Submit' /><input type="Reset" value="Clear form">
  </div> <!-- .contact_submit ends -->
  <p><span class="contact_nb">*Required</span></p>
</form>
<script>
   function checkForm() {
 name = document.getElementById("name").value;
 email = document.getElementById("email").value;
 password = document.getElementById("password").value;
 CompanyName = document.getElementById("CompanyName").value;
 phone = document.getElementById("phone").value;
 dob = document.getElementById("dob").value;
 
 if (name == "")
 {
 hideAllErrors();
 document.getElementById("nameError").style.display = "inline";
 document.getElementById("name").select();
 document.getElementById("name").focus();
 return false;
 }
 else if (email == "")
 {
 hideAllErrors();
 document.getElementById("emailError").style.display = "inline";
 document.getElementById("email").select();
 document.getElementById("email").focus();
 return false;
 }
 else if (password == "")
 {
 hideAllErrors();
 document.getElementById("passwordError").style.display = "inline";
 document.getElementById("password").select();
 document.getElementById("password").focus();
 return false;
 }
 else if (phone == "")
 {
 hideAllErrors();
 document.getElementById("phoneError").style.display = "inline";
 document.getElementById("phone").select();
 document.getElementById("phone").focus();
 return false;
 }
 else if (CompanyName == "")
 {
 hideAllErrors();
 document.getElementById("CompanyNameError").style.display = "inline";
 document.getElementById("CompanyName").select();
 document.getElementById("CompanyName").focus();
 return false;
 }
 else if (dob == "")
 {
 hideAllErrors();
 document.getElementById("dobError").style.display = "inline";
 document.getElementById("dob").select();
 document.getElementById("dob").focus();
 return false;
 }
 if (!checkEmail(email))
 {
 alert('Email address is invalid');
 return false;
 }
 if (!checkPassword(password))
 {
 alert('Password is invalid');
 return false;
 }
 
 if(!checkPhone(phone))
 {
 alert("Phone number is invalid");
 return false;
 }
 
 if(!checkComment(CompanyName))
 {
 alert("Company Name is invalid");
 return false;
 }
 if(!checkComment(dob))
 {
 alert("Date of Birth is invalid");
 return false;
 }
 
 
function hideAllErrors() {
 document.getElementById("nameError").style.display = "none";
 document.getElementById("emailError").style.display = "none";
 document.getElementById("passwordError").style.display = "none";
 document.getElementById("CompanyNameError").style.display = "none";
 document.getElementById("phoneError").style.display = "none";
 document.getElementById("dobError").style.display = "none";
}
 
function checkEmail(inputvalue) {
 var pattern = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
 return pattern.test(inputvalue);
} 
function checkPhone(inputvalue) {
var pattern = /^([0-9]{3})-([0-9]{3})-([0-9]{4})$/;
return pattern.test(inputvalue);
}
function checkCompanyName(inputvalue) {return(10<inputvalue.length); }

} // end of the check form function

</script>&#160;	
 </div>
 </div>
 
 
 

 <div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10"></div>
					<div class="col-md-2">
						<img src="images/email.png" title="email icon" alt="email" >
						<img src="images/twitter_16.png" title="Twitter icon" alt="twitter_16">
						<img src="images/facebook_16.png" title="facebook icon" alt="facebook_16">
					</div>
				</div>
			</div>
		</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="phoneno-all-numeric-validation.js"></script> 
  </body>
</html>