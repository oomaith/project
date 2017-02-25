<?php
    include('open_db_connection.php');
    include('student.php');    
    
    $firstname = '';
    $lastname = '';  
    $credits = 0; 

    // Show all rows in the student table
    $sql = "SELECT id, firstname, lastname, credits FROM student ORDER BY lastname;";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $id =  $row["id"];            
            $firstname =  $row["firstname"];
            $lastname =  $row["lastname"];
            $credits =  $row["credits"];            
            
            $student = new Student($id,$firstname,$lastname,$credits);
            
            echo $student->formatStudentInfo()."<br>";
            
        }
    } else {
        echo "0 rows in the member table";
    } 
    
    $db->close();
    
?>     
    
<p><a href="index.php">Home</a></p>
