<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  <h2>Modal Example</h2>
  <a href="#" data-toggle="modal" data-target="#myModal">Load me</a>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script type="text/javascript">
	var ar = <?php echo $jsonarr; ?>
</script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>