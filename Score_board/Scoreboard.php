<?php include '../home/Register_database.php'; 


	Database::make_conn();
		


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>LEADER_BOARD_TABLE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">LEADER_BOARD_TABLE</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						  <tr>
						      <th>Rank</th>
						      <th>Team ID</th>
							  <th>Team Name</th>
							  <th>Year</th>
							  <th>Department</th>
						      <th>Score</th>
						      <th>&nbsp;</th>
							</tr> 
						  </thead>
						  <tbody>
						  <?php //if ($result->num_rows > 0 ) ?> 
						  <?php $result = Database::upd_db();
						  $count = 1; 
						  while ($row = $result->fetch_assoc()) {

						  ?>
						  <tr class="alert" role="alert">
						      <th scope="row" style="font-size: xx-large;"><?php print $count ;?></th>
							  <td><?php print $row['team_id']?></td>
						      <td><?php print $row['team_name']?></td>
						      <td><?php print $row['year']?></td>
							  <td><?php print $row['department']?></td>
							  <td><?php print $row['scores']?></td>
						    </tr> <?php $count++; } ?>

						  
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

