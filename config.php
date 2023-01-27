<?php
$conn = mysqli_connect('localhost','root', '' , 'systemsoftware');

if (!$conn){
    die("connection Failed :  " . $conn_error());
} 

?>