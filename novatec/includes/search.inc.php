<?php 

	require_once "includes/configdb.inc.php";
	
	if(isset($_POST['submit'])){


    $stat = $_POST['statut'];
    if(empty($id)){
        header("Location: transaction.php?errors=emptyfields&id=".$id);
        $id_err = "Please enter an id.";
        exit();
    } else {
        $statement = $db->prepare("SELECT * FROM transactions where amount = `$str` and statut = `$stat` ");
        $statement->execute();
        $transactions = $statement->fetch();
					?>
					<br>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">ID</th>
								<th scope="col">Prix</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($transactions as $transac): ?>
							<tr>
								
								<th scope="row"></th>
								<td><?= $transac->amount; ?></td>
								<td><?= $transac->statut; ?></td>
							</tr>
						<?php endforeach; ?>
							}
							
						}
						?>
						</tbody>
					</table>
				} 
				<?php 
				
				}	else {
					// close if not fount
					echo "Ces données n'existent pas";
					exit();
			}

		}
	}

?>  