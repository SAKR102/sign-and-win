<?php

$conn = mysqli_connect("localhost", "root", "", "page");

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error()."<br>";
}

?>

