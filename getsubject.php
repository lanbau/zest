<?php
	if (mysqli_connect_errno()) {
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$fetch = mysqli_query($connect,"SELECT id, name, day, start_time, end_time, start_date, end_date FROM Subject");
	$emptyarray = array();
	while($row=mysqli_fetch_array($fetch)) {
	    $emptyarray[] = $row;
	}
	$jsonarr = json_encode($emptyarray);
	// echo $jsonarr;
	echo '<div class="table-responsive">';
	echo '<table class="table table-striped">';
	echo '<tr>'; 
	echo '<td>'. "id" ."</td>";
	echo '<td>'. "name" .'</td>';
	echo '<td>'. "day" .'</td>';
	echo '<td>'. "start_time" .'</td>';
	echo '<td>'. "end_time" .'</td>';
	echo '<td>'. "start_date" .'</td>';
	echo '<td>'. "end_date" .'</td>';
	echo '<tr>';

	foreach ($emptyarray as $URL){
	    echo '<tr>'; 
	    echo '<td>'. $URL['id']."</td>";
	    echo '<td>'. $URL['name'].'</td>';
	    echo '<td>'. $URL['day'].'</td>';
	    echo '<td>'. $URL['start_time'].'</td>';
	    echo '<td>'. $URL['end_time'].'</td>';
	    echo '<td>'. $URL['start_date'].'</td>';
	    echo '<td>'. $URL['end_date'].'</td>';
	    echo '<tr>';
	}
	echo '</table>';
	echo '</div>';
?>