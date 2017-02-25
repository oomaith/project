<html>
<body>
Thank you,<br>
Your First Name is <?php echo $_POST["first_name"];?><br>
Your Last Name is <?php echo $_POST["last_name"]; ?><br>
Your user is  <?php echo $_POST["user_name"]; ?><br>
Your password is  <?php echo $_POST["password"]; ?>

<!--db connection file -->
<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "sign_up";
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
     $first_name = "'".trim($_POST['first_name'])."'";
    $last_name = "'".trim($_POST['last_name'])."'"; 
     $user_name = "'".trim($_POST['user_name'])."'"; 
    $password ="'".trim($_POST['password'])."'";        
    
    $sql = "insert into new_user (first_name, last_name, user_name, password) values ($first_name, $last_name,
    $user_name, $password);";    

    if ($db->query($sql) === TRUE) {
        echo "User added.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    $db->close();
?> 
</body>
</html> 