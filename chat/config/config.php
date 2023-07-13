<?php

    $conn = mysqli_connect("localhost", "root", "", "delivery");
    if (!$conn) {
        echo "Connect" . mysqli_connect_error();
    }

?>