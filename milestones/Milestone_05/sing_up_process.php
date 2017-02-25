<html>
<body>
Thank you,<br>
Your Salutaton is <?php echo $_POST["salutation"];?><br>
Your First Name is <?php echo $_POST["first_name"];?><br>
Your Last Name is <?php echo $_POST["last_name"]; ?><br>
Your Telephone Number is  <?php echo $_POST["TelephoneNumber"]; ?><br>
Your Email is <?php echo $_POST["Email"];?><br>
Your Password is  <?php echo $_POST["Password"]; ?><br>
Your Date of Birth is <?php echo $_POST["date"];?><br>
Your Work Status is <?php echo $_POST["WorkStatus"];?><br>
Your Company Name is <?php echo $_POST["CompanyName"];?><br>
Your Role is <?php echo $_POST["Role"];?><br>

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
    $salutation = "'".trim($_POST['salutation'])."'";
    $first_name = "'".trim($_POST['first_name'])."'";
    $last_name = "'".trim($_POST['last_name'])."'";
    $TelephoneNumber ="'".trim($_POST['TelephoneNumber'])."'";
    $Email = "'".trim($_POST['Email'])."'";
    $Password ="'".trim($_POST['Password'])."'"; 
    $date = "'".trim($_POST['date'])."'"; 
    $WorkStatus = "'".trim($_POST['WorkStatus'])."'"; 
    $CompanyName = "'".trim($_POST['CompanyName'])."'"; 
    $Role = "'".trim($_POST['Role'])."'"; 
    
    $sql = "insert into new_user (salutation, first_name, last_name, TelephoneNumber, Email, Password, date, WorkStatus, CompanyName, Role) values ($salutation, $first_name, $last_name,
    $TelephoneNumber, $Email, $Password, $date, $WorkStatus, $CompanyName, $Role);";    

    if ($db->query($sql) === TRUE) {
        echo "User added.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    $db->close();
?> 
</body>
</html> 