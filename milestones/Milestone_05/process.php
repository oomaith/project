<?php
 include('header.php'); 
 include('open_db_connection.php'); ?>

<html>
<body>
    <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;Thank you for your business,  <?php echo $_POST["name"]; ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;Your phone is: <?php echo $_POST["phone"]; ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;Your email address is:  <?php echo $_POST["email"]; ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;Your Message is:  <?php echo $_POST["message"]; ?>

<!--db connection file -->
<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "coworking";
    $dbport = 3306;

    // Create database connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check if database connection was created
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //echo "Database connection created successfully";
?>
<!--insert data to mysql -->
<?php
    // include('open_db_connection.php');

     $name = "'".trim($_POST['name'])."'";
    $email = "'".trim($_POST['email'])."'"; 
     $phone = "'".trim($_POST['phone'])."'"; 
    $message ="'".trim($_POST['message'])."'";        
    
    $sql = "insert into user (name, email, phone, message) values ($name, $email, $phone, $message);";    

    if ($db->query($sql) === TRUE) {
        echo "User added.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    $db->close();
   
   
   // collect db_connection insert 
   
?> 
</body>
</html> 
<br/><br/>
<?php   include('footer.php'); ?>