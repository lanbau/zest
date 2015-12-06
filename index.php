<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$connect = mysqli_connect('localhost','root','root','TMS');
	if (mysqli_connect_errno()) {
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$fetch = mysqli_query($connect,"SELECT id, name, day, start_time, end_time, start_date, end_date FROM Subject");
	$emptyarray = array();
	while($row=mysqli_fetch_array($fetch)) {
	    $emptyarray[] = $row;
	}
	$jsonarr = json_encode($emptyarray);
	echo $jsonarr;
?>
<script type="text/javascript">
	var ar = <?php echo $jsonarr; ?>
</script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>