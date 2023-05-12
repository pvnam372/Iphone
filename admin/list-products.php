<!DOCTYPE html>
<html>
<head>
	<title>SẢN PHẨM</title>
</head>
<body>
<?php
	$conn = mysqli_connect("localhost", "root", "", "iphone");
    if(!$conn)
    {
        echo "Kết nối thất bại!";
    }
	mysqli_query($conn, "SET NAMES 'utf8'");

	$str = "select * from products";
	$kq = mysqli_query($conn, $str);
	echo "<table border = '1'><tr><td colspan = 7><B>DANH SÁCH IPHONE</B></td></tr>";
	echo "<tr><th>Mã</th><th>Tên</th><th>Dung lượng</th><th>Màu sắc</th><th>Số lượng</th><th>Đơn giá</th><th>Ngày nhập</th>";
	while ($row = mysqli_fetch_row($kq))
	{	echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>Cập nhật | "; ?>
		<a href="remove.php?id=<?php echo $row[0]; ?>">Xóa</a>
		<?php echo "</td>";
		echo "</tr>";
	}

	echo "</table>";
	echo "<a href='add-product.php'>Thêm mới</a>";

	mysqli_close($conn);
?>
<form action="export_excel.php" method="POST"><a href="export_excel.php?"><input type="submit" name="export_excel" value="Xuất Excel"></form>
</body>
</html>