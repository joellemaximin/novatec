<?php 
// session_start();
require_once "includes/configdb.inc.php";

// foreach($db->query('SELECT * from transactions') as $row) {
//     foreach($row as $data) {
//         echo $data.'</br>';
//     }
// }


if(isset($_GET['form_submitted'])){


    $id = $_GET['client_id'];
    $amount = $_GET['amount'];
    if(empty($id)){
        header("Location: auth.php?errors=emptyfields&id=".$id);
        $id_err = "Please enter an id.";
        exit();
    } else {
        $statement = $db->prepare("SELECT * FROM transactions where amount = ? and client_id = ?");
        $statement->execute(array($amount, $id));
        if ($statement->fetch()) {
            
            header("Location: transaction.php?auth=success");
            exit();
  
        } else {
            // close if not fount
            echo "not found";
            exit();
        }

    }        
}


?>

