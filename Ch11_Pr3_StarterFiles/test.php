<?php 
    require_once('includes/db-config.php');
    require_once('lib/DatabaseHelper.php');
    
    $db = DatabaseHelper::getConnection(DB_CONN, DB_USER, DB_PASS);
    
    $id = 1;
    $sql = "SELECT * FROM artists WHERE ArtistID = ?";
    $result = $db->prepare($sql);
    $result -> bindValue(1, $id);
    $result -> execute();
        $returnedResultsArray = $result->fetchAll();
        if(count($returnedResultsArray)>0) {
            echo $returnedResultsArray[0]['FirstName'];
        }else{
            echo "Error";
        }
   /* while($row=$result->fetch(PDO::FETCH_ASSOC)) {
        echo $row['FirstName'] ." ". $row['LastName'] . " " .$row['Nationality'] . "<br />";
    }*/




?>