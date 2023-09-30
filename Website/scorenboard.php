<?php include '../home/Register_database.php'; 


	Database::make_conn();
		


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Capture The Flag - Leaderboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/particles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a href="../home/index.html" class="pl-md-0 p-3 text-light">Home</a>
              <a href="login.html" class="p-3 text-decoration-none text-light">Flag-Checker</a>
              <a href="../Website/scorenboard.php" class="p-3 text-decoration-none text-light active">Leaderboard</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">os-challenges</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">Stegnography</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">Linux</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">Python</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">Help</a>
              <a href="registration.html" class="p-3 text-decoration-none text-light active">Register</a>
            </div>
          </div>
        </nav>
  
      </div>
   
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <br><br>
                    <h2 class="heading-section">Leaderboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table" style="background-color: transparent;">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Rank</th>
                                    <th>Team ID</th>
                                    <th>Team Name</th>
                                    <th>Year</th>
                                    <th>Dept</th>
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
						    </tr> <?php $count++; } ?>>
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
    <div id="particles-js"></div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
