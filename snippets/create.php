<?php

include_once 'Database.php';



try{
    

//prepared the query

$statement = $conn->prepare("INSERT INTO books(name, description, created_at)
VALUES(:name,:description,now())");


//execute the statement

$statement->bindParam(":name",$name);
$statement->bindParam(":description",$description);

//create first record
$name = "objects and patterns";
$description = "Software crafting";
$statement->execute();


//create second record
$name = "Complete SQL";
$description = "Structured Query language";
$statement->execute();

//create first record
$name = "Complete EML";
$description = "Learn Software crafting";
$statement->execute();



echo "Record created";

}catch(PDOException $ex){

    echo "An error occures".$ex->getMessage();
}

