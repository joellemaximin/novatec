<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Il s'agit d'un simulateur de paiement</h3>

		<?php
		
			$message = '';
			if(isset($_POST['statut'])){
				$statut = $_POST['statut'];
				
				$stmt = $db->prepare("UPDATE transactions SET statut=:statut where id=id ");
				if ($stmt->execute([':statut' => $statut, ':id'=> $id])) {
					$message = 'Transaction';
				}
					
				$stmt->close();
				$db->close();
			}else{
				$statutErr = "Erreur";

			} 
		?>

	<form  class="form-inline" action="transaction.php">
		<div class="form-group row">
			<label for="id" class="col-sm-2 col-form-label">Identifiant:</label>
			<div class="col-sm-10">
			<input type="text" name="client_id">
			</div>
		</div>
		<div class="form-group row">
			<label for="price" class="col-sm-2 col-form-label">Montant:</label>
			<div class="col-sm-10">
			<input type="text" name="amount" >				
			<span>€</span>
			</div>
		</div>
		<input type="submit" name="statut_update" value="Accepter"/>
		<input type="submit" name="statut_update" value="Refused"/>
		<span class="error">* <?php echo $statutErr;?></span>
  	<br><br>
	</form>
	
<!-- <button type="submit" name="refused" class="btn btn-danger">Refuser</button> -->

</body>
</html>