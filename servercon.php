<?php
$dbconnect = mysqli_connect("localhost", "pdc20_user", "admin123", "pdc20");
if (mysqli_connect_error()){
    echo "Failed to connect to MySQL" .mysqli_connect_error();
    die();
}
?>