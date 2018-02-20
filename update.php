<?php

include_once 'Database.php';

$updateQuery = "UPDATE books SET 
name=:name,
description=:desc 
WHERE id = :id";




try{

  $statement = $conn->prepare($updateQuery);

  $statement->execute(array(":name"=>'Python for freshers', ":desc"=>'Python for newbies',":id"=>4 ));

  echo $statement->rowCount()."   record updated";

   
}catch(PDOException $ex){

    echo "An error occures".$ex->getMessage();
}

