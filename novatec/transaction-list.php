<?php
	require_once("includes/search.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
	<body>
		<p>Le paiement a été accepté</p>

		<p>Le paiement a été refusé</p>

		<div class="search-input">
			<form action="transaction-list.php" method="GET">
				<input type="text" name="query" />
				<input type="submit" value="Search" />
			</form>	
		</div>
	</body>
</html>
