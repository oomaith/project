
<?php

class Artists {
    public function getArtistById($id) {
      $db = DatabaseHelper::getConnection(DB_CONN, DB_USER, DB_PASS);
    
    $id = 1;
    $sql = "SELECT * FROM artists WHERE ArtistID = ?";
    $result = $db->prepare($sql);
    $result -> bindValue(1, $id);
    $result -> execute();
    
        $returnedResultArray = $result->fetchAll();
        if(count($returnedResultsArray)>0) {
            return $returnedResultsArray;
        }else{
            return null; 
            
        }
        } else {
            echo "Error";
        }
    }
}

?>



