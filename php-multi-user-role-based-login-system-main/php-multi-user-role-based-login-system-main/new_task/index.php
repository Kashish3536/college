<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title> Videos </title>
</head>
<body>

	<div class="container mt-3 mb-3">
		<h1><b>Videos </b></h1>
		<hr/>
				<a href="upload.php" class="btn btn-primary mt-3">Upload a New Video</a>
				<hr/>
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM video";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="100%" height="80%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
					</div>

				<?php }
?>
</div>
				</div>
</body>
</html>