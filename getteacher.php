<?php
	if (mysqli_connect_errno()) {
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$fetch = mysqli_query($connect,"SELECT id, name, salary, qualifications FROM Teacher");
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
	echo '<td>'. "salary" .'</td>';
	echo '<td>'. "qualifications" .'</td>';
	echo '<tr>';

	foreach ($emptyarray as $URL){
	    echo '<tr>'; 
	    echo '<td>'. $URL['id']."</td>";
	    echo '<td>'. $URL['name'].'</td>';
	    echo '<td>'. $URL['salary'].'</td>';
	    echo '<td>'. $URL['qualifications'].'</td>';
	    echo '<tr>';
	}
	echo '</table>';
	echo '</div>';
?>