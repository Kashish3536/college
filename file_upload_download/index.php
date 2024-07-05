<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min,js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<title>File upload and download</title>
</head>
<body>
	
	<div class="Container mt-5">
		<center><h2><u>Upload a file</u></h2></center>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			
				<label for="file" class="form-label"><b><h2>select file</h2></b></label>
			    <input type="file" class="form-control" name="file" id="file">
           
         <button type="submit" class="btn btn-primary">Upload file</button>
     </form>
 </div>
  <style type="text/css">
  	body {

  	 background-image:url("viraj.webp");
  	 background-repeat: no-repeat;
  	}
  	. btn btn-primary {
  		background-color: #04AA6D;
  		 border : none;
  		 color:white;
  		 padding:16px 32px;
  		 text-align: center;
  		 text-decoration: none;
  		 display: inline-block;
  		 font-size:16px;
  		 margin: 4px 2px;
  		 transition-duration: 0.4s;
  		 cursor: pointer;
  	}
  </style>

</body>
</html>