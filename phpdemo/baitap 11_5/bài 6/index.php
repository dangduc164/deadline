<!DOCTYPE html>
<html>
<head>
	<title>bài 6</title>
</head>
<body>
	<? php
	$number="";
	?>
	<form method="get" action="#">
		<label>nhập số</label>
		<input type="number" name="number" value="<?=$number?>">
		<input type="submit" name="check">
	</form>
	<? php
	    switch ($number) {
	    	case '0':
	    		echo " Ngày thứ hai";
	    		break;
	    	case '1':
	    		echo " Ngày thứ ba";
	    		break;
	    	case '2':
	    		echo " Ngày thứ tư";
	    		break;
	    	case '3':
	    		echo " Ngày thứ năm";
	    		break;
	    	case '4':
	    		echo " Ngày thứ sáu";
	    		break;
	    	case '5':
	    		echo " Ngày thứ bảy";
	    		break;
	    	case '6':
	    		echo " Ngày Chủ nhật";
	    		break;
	    	default:
	    		echo " chưa có dữ liệu!";
	    		break;
	    }
	?>

</body>
</html>