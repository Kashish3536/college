<?php
include("db.php");

if (isset($_POST['upload'])) {
	$name = $_FILES['file'];
	echo "<pre>";
	print_r($name);
	exit()
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_destination = "uploads/" .$file_name;

	if (move_uploaded_file($temp_name,$_destination)){

		$q = "INSERT INTO video (name) VALUES ('$file_name')";

		if(mysqli_query($conn,$q)){

			$success ="Video uploaded Successfully.";

		}
		else{

			$failed = "Something went wrong??";
		}
	}
	else{

		$msz = "Please select a video to upload..!";
	}
}
?>

<!Doctype html>
<html>
<head>
	<title>Upload videos</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!--<script src ="assets/js/jquery.min.js"></script>-->
</head>
<body>
	 <div  class="container mt-3">
	 	<h1 class="text-center mb-5"><b>upload video </b></h1>
        <div class="col-lg-8 m-auto">
        	<form action="upload.php" method="post" enctype="multipart/form-data">
        		<div class="form-group">
        			<label><strong>Upload a video:</strong></label>
        			<input type="file" name="file" class="form-control">
        		</div>
        		<?php if(isset($success)){ ?>
        			<div class="alert alert-success">


        				<?php echo $success;?>
        			</div>
        			<?php}?>
        			<?php if(isset($failed)) {?>
                     <div class="alert alert-danger">


                     	<?php echo $failed;?>
                     </div>
                     <?php}?>
                     <?php if(isset($msz)){ ?>
                     	<div class="alert alert-danger">


                     		   <?php echo $msz;?>
                     		</div>
                     		<?php}?>
                     		<input type ="submit" name="upload" class="btn-btn-success ml-3">
                     	</form>
                     </div>

                 </div>
                 </body>
                 </html>    
                 

        			