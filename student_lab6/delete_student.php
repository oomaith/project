<?php
    include('open_db_connection.php');

    $id = trim($_POST['id']);    
    
    $stmt = $db->prepare("delete from student where id = ?");
    $stmt->bind_param('i', $_POST['id']);
    $stmt->execute(); 
    $stmt->close();    
    
    echo "Student deleted.";

    $db->close();
?> 

<p><a href="index.php">Home</a></p>