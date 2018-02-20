<?php

include_once 'Database.php';

$selectQuery = "SELECT *FROM books";


try{

    $statement = $conn->query($selectQuery);
   while($row = $statement->fetch(PDO::FETCH_OBJ)){
       echo "Name: ".$row->name."-".$row->description."<br />";
       var_dump($row);
   }
}catch(PDOException $ex){

    echo "An error occures".$ex->getMessage();
}

