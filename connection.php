<?php
    $connection = mysqli_connect("localhost","root","","badminton 2019");

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>