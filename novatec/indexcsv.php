<?php 
	require "import.php";

	$csv = new csv();
	if (isset($_POST['sub'])){
		$csv->import($_FILES['file']['tmp_name']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSV</title>
</head>
<body>
	<form action="post" enctype="multipart/form-data">
		<input type="file" name="file" >
		<input type="submit" name="sub" value="import" >

	</form>
</body>
</html>