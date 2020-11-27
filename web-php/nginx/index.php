<?php
echo "Php and Nginx <br/>";

$conn = mysqli_connect("mysql:3306", "root", "password", "training");
 
if (!$conn) {
    echo "Error No: " . mysqli_connect_error();
    echo "Error Description: " . mysqli_connect_error();
    exit;
} else {
    echo "Connect mysql success!";
}
?>