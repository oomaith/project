<?php
 include('header.php'); 
 include('open_db_connection.php'); ?>

<?php
     
    $salutation = '';
    $first_name = '';
    $last_name = '';    
    $TelephoneNumber = '';
    $Email = $_POST["Email"];
    $Password= '';
    $date='';
    $WorkStatus=''; 
    $CompanyName='';
    $Role='';
  

    // Show all rows in the student table
    /*
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
    */
    $sql = "SELECT * FROM new_user where Email='" . $Email . "'";
    $result = $db->query($sql);
    //var_dump($result);
    
//   echo "num: " . $result->num_rows;
 //   echo " sql = " . $sql;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
echo "<br/> &nbsp;&nbsp;&nbsp;&nbsp; USER INFORMATION   :</br></br> &nbsp;&nbsp;&nbsp;&nbsp; Name: " . $row["salutation"] . " " . $row["first_name"] . " ". $row["last_name"] . "<br/> &nbsp;&nbsp;&nbsp;&nbsp; Phone: " . $row["TelephoneNumber"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Email: " . $row["Email"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Password: ". $row["Password"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Date of Birth: " . $row["date"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Work Status: " . $row["WorkStatus"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Name of the Company: " . $row["CompanyName"] . " </br>&nbsp;&nbsp;&nbsp;&nbsp; Role: " . $row["Role"] . " <br/>";
          
        }
    } else {
        echo "0 rows in the member table";
    } 
    
    $db->close();
    
?>
<br/><br/>
<?php   include('footer.php'); ?>