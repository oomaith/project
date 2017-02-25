<?php include('header.php'); ?>
<style>
    li a:hover:not(.active) {
    background-color: #CCCC00;
}

.active {
    background-color: #CCCC00;
}
#wrapper {
background-color: #99ccff;
	background-image:linear-gradient(to bottom, #ffffff,#99ccff);
	background-repeat: no-repeat;
color: black;
margin-left: 20px;
padding-left: 20px;

}
.mybutton {
	color: #CCCC00;
    border: none;
 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin-top: 10px;
    cursor: pointer;
}


h2 {text-align: center;}

h1 {color:#000066;}
.contact_nb{color: red;}
</style>
   <div id="wrapper">
 <div id="container">
 <h3>Registration form.</h3>



<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="sing_up_process.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Salutation:<br>
        <select name="salutation">
        <option value=""></option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
        <option value="Ms">Ms</option>
        <option value="Dr">Dr</option>
        </select><br>
    Your First Name:<br>
        <input name="first_name" type="text" value="" size="30"/><br>
    Your Last Name:<br>
        <input name ="last_name" type="text" value="" size="30"/><br>
    Telephone Number:<br>
        <input name="TelephoneNumber" type="text" value="" size="30"/> Format: 5555555555<br>
    Email:<br>
        <input name="Email" type="text" value=""  size="30"><br>
    Password:<br>
        <input name="Password" type="text" value=""  size="30"><br>  
    Date of Birth:<br>
        <input type="date" name="date" max="1979-12-31"><br>
    Work Status:<br>
        <select name="WorkStatus">
        <option value=""></option>
        <option value="Employed">Employed</option>
        <option value="Unemployed">Unemployed</option>
        <option value="Student">Student</option>
        </select><br>
    Company / Organization Name:<br>
        <input name="CompanyName" type="text" value="" size="30"/><br>
    Role:<br>
        <select name="Role">
        <option value=""></option>
        <option value="Employee">Employee</option>
        <option value="Owner">Owner</option></select><br><br>
        <input type="submit" value="Submit"/><br>
        </form>
  
 <?php
    } 
else                /* send the submitted data */
    {
    $salutation=$_POST['salutation'];    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $TelephoneNumber=$_POST['TelephoneNumber'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $date= $_POST['date'];
    $WorkStatus= $_POST['WorkStatus'];
    $CompanyName= $_POST['CompanyName'];
    $Role= $_POST['Role'];
    if (($salutation=="")||($first_name=="")||($last_name=="")||($TelephoneNumber=="")||($Email=="")|| ($Password=="")||($date=="")||($WorkStatus=="")||($CompanyName=="")||($Role==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $first_name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		// mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }
?> 
<br/>
 </div>
 </div>
 
 <?php include('footer.php'); ?>
 

 