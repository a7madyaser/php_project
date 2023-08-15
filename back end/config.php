<?php
$serverName= "localhost";
$userName= "root";
$password= "";
$dbName= "login_system";


$conn = new mysqli($serverName , $userName , $password , $dbName);
if($conn->connect_error){
    die("Connection Faild: ".$conn->connect_error);
}
else{
    // echo "Connection succeeded";   
}

?>