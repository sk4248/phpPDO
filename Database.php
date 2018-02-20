<?php

define("DSN","mysql:host=localhost;dbname=library" );
define("USERNAME", "root");
define("PASSWORD","embellishment");

$options= array(PDO::ATTR_PERSISTENT=>true);

try{

    $conn = new PDO(DSN,USERNAME,PASSWORD,$options);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "connection succesful";

}catch(PDOException $ex){

    echo "A database error occured  ".$ex->getMessage();
}