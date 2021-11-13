<!DOCTYPE html>
<html>
<head>
	<title>bài 4</title>
</head>
<body>
<?php
    $maSp = "EV2009";
    $tenSp = "Tấm hợp kim nhôm ngoài trời EV2009";
    $soLuong = 500;
    $donGia = 160000;
    $VAT = 0.05;
    $giaTien = $soLuong * $donGia;
    $daThue = $giaTien * $VAT;
    echo "mã sp: $maSp<br>";
    echo "tên sp: $tenSp<br>";
    echo "số lương: $soLuong<br>";
    echo "đơn giá: $donGia<br>";
    echo "thuế VAT: $VAT<br>";
    echo("tổng tiền khi chưa trừ thuế: $giaTien<br>");
    echo "số tiền sau khi trừ thuế: $daThue";

?>
</body>
</html>