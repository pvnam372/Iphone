<?php
    $tensp = $_POST["ten"];
    $dungluong = $_POST["dl"];
    $mausac = $_POST["mau"];
    $slsp = $_POST["sl"];
    $dg = $_POST["gia"];
    $date = $_POST["ngay"];

    $conn = mysqli_connect("localhost", "root", "", "iphone");
    if(!$conn)
    {
        echo "Kết nối thất bại!";
    }
    mysqli_query($conn, "SET NAMES 'utf8'");
    $str2 = "insert into products (ten,dung_luong,mau,so_luong,don_gia,ngay_nhap) values ('$tensp', '$dungluong', '$mausac','$slsp','$dg','$date')";
    mysqli_query($conn, $str2);
    header("location: list-products.php");
    mysqli_close($conn);

?>
