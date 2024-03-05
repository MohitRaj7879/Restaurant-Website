<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "rest";
$conn = mysqli_connect($host, $user, $password, $db_name);
if($conn){
    echo "Successfully Connected";
}else{
    echo "Something went wrong";
}

?>