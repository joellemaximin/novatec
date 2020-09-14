<?php
	require_once("includes/auth.inc.php");
?>
	<div class="form-auth">
		<h3 class="display-4">Se connecter</h3>

		<form  class="form-inline" action="auth.php">
			<div class="form-group row">
				<label for="id" class="col-sm-2 col-form-label">Identifiant:</label>
				<div class="col-sm-10">
					<input type="text" placeholder="0023A" name="client_id" 
					>
				</div>
			</div>
			<div class="form-group row">
				<label for="price" class="col-sm-2 col-form-label">Montant:</label>
				<div class="col-sm-10">
				<input id="montant" type="text" name="amount" 
				 placeholder="150">
					<span>€</span>
				</div>
				
			</div>
			<input type="hidden" name="form_submitted" value="1" />

			<input type="submit" value="Submit" >
		</form>

    
	</div>

		

