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
 <h3>Our contact informaiton:</h3>
 <p>(402)555-5555 </br>
860 E 23rd Street</br>
 Fremont, NE 68025</p>


<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="process.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your Name:<br>
    <input name="name" type="text" value="" size="30"/><br>
     Your Telephone:<br>
     <input name="phone" type="text" value="" size="30"/><br>
    Your Email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br /><br />
    <input type="submit" value="Submit"/>
    </form>
   
 <?php
    } 
else                /* send the submitted data */
    {
    $name=$_POST['name'];
    $phone= $_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    if (($name=="")||($phone=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		// mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?> 
<br />

 </div>
 </div>
 <?php include('footer.php'); ?>
 

 