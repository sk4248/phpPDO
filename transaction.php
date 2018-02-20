<?php

include_once 'Database.php';


try{
    
    //$statement = $conn->query("SHOW TABLE STATUS FROM library");
    $name ="My Book";
    $description = "My book dscription";
//begin trascation
$conn->beginTransaction();

$sql1 = "INSERT INTO books (name,description,created_at) VALUES(:name, :desc, now())";
$statement= $conn->prepare($sql1);
$statement->execute(array(":name"=>$name, ":desc"=>$description));
echo "operatoin completed<br/>";

$sql2 = "DELETE FROM books WHERE id =:id";
$statement= $conn->prepare($sql2);
$statement->execute(array(":id"=>6));
    
$conn->commit();

echo "operation succeeded <br/>";

}catch(PDOException $ex){
    $conn->rollback();

echo "An error occured".$ex->getMessage();

}