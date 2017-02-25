<?php
    include('open_db_connection.php');

    $id = trim($_POST['id']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']); 
    $credits = trim($_POST['credits']);         
    
    $sql = "update student set firstname=?, lastname=?, credits=? where id = ?;";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssii', $firstname, $lastname, $credits, $id);
    $stmt->execute(); 
    $stmt->close();    
    
    echo "Student updated.";

    $db->close();
?> 

<p><a href="index.php">Home</a></p>