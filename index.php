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
		<a href="#" data-toggle="modal" data-target="#subjects">View Subjects</a>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#subjects">View Subjects</button>
		<!-- Modal -->
		<div class="modal fade" id="subjects" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title">View Subjects</h4>
		    </div>
		    <div class="modal-body">
		        <?php
					include('config.php');
					include('getsubject.php');
				?>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    </div>
		  </div>		  
		</div>
		</div>
	</div>
	<div class="container">
		<h2>Modal Example</h2>
		<a href="#" data-toggle="modal" data-target="#teacher">View Teachers</a>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#teacher">View Teachers</button>
		<!-- Modal -->
		<div class="modal fade" id="teacher" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title">View Teachers</h4>
		    </div>
		    <div class="modal-body">
		        <?php
					include('config.php');
					include('getteacher.php');
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