<?php
    $connection = mysqli_connect("localhost","root","","badminton scoreboard");

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>