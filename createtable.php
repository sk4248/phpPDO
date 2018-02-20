<?php

include_once 'Database.php';

$table = "CREATE TABLE IF NOT EXISTS books(

   id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
   name varchar(25) NOT NULL UNIQUE,
   description varchar(255) NOT NULL,
   created_at TIMESTAMP

)";

try{
$conn->query($table);

echo "<br />Table created";

}catch(PDOException $ex){

    echo "<br />A database error occured  ".$ex->getMessage();
}