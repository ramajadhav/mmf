<?php
$db_host= "localhost";
$db_user = "root";
$bd_password = "";
$db_name = "mmf";
$db_port = 3306;

$con = new mysqli($db_host, $db_user, $bd_password, $db_name, $db_port);

if($con->connect_error){
    die("connection failed");
}
// else{
//     echo "connect";
// }
?>