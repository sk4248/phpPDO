<?php

include_once 'Database.php';

$deleteQuery = "DELETE FROM books  WHERE id = 1";




try{

    $result = $conn->exec($deleteQuery); 
    echo "$result record updated <br/>";

   
}catch(PDOException $ex){

    echo "An error occures".$ex->getMessage();
}

