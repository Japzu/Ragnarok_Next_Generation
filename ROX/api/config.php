<?php
include "env.php";
include "models.php";

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection->connect_errno){
    echo "<h3>Cannot connect database please contact your administrator</h3>";
    return;
}


?>