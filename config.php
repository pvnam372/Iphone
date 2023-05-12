<?php
    $conn = mysqli_connect("localhost", "root", "", "iphone");
    if(!$conn)
    {
        echo "Kết nối thất bại!";
    }
    mysqli_query($conn, "SET NAMES 'utf8'");
?>