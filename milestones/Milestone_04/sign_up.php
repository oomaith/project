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
    Your First Name:<br>
    <input name="first_name" type="text" value="" size="30"/><br>
    Your Last Name:<br>
     <input name ="last_name" type="text" value="" size="30"/><br>
    Your User Name:<br>
    <input name="user_name" type="text" value="" size="30"/><br>
    Your Password:<br>
    <input name="password" type="text" value=""  size="30"><br>
    <input type="submit" value="Submit"/>
    </form>
   
 <?php
    } 
else                /* send the submitted data */
    {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if (($first_name=="")||($last_name=="")||($user_name=="")||($password==""))
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


 </div>
 </div>
 <?php include('footer.php'); ?>
 

 