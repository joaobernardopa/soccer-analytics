<?php
$servername = "localhost";
$username = "root";
$password = "";


function create_db_connection(){
    try{
        $conn = new PDO("mysql:host=$servername;dbname=soccer_db",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connected successfully";
    }
    catch(PDOException $e){
        echo "connection failed " . $e->getMessage();
    }

    return $conn;
}

function close_db_connection($conn){
  $conn = null;
}



?>