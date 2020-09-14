<?php
require "includes/auth.inc.php";

$statement = $db->prepare("SELECT * FROM transactions where amount = 100 and client_id = 1");
$x = $statement->execute();
var_dump($x);
$y = $statement->fetch();
var_dump($y);


echo '<hr>';

$statement = $db->prepare("SELECT * FROM transactions where amount = 100 and client_id = 999");
$x = $statement->execute();
var_dump($x);
$y = $statement->fetch();
var_dump($y);


echo '<hr>';

$statement = $db->prepare("SELECT * FROM transactions where amount = ? and client_id = ?");
$x = $statement->execute(array(100, 1));
var_dump($x);
$y = $statement->fetch();
var_dump($y);

echo '<hr>';


$statement  = $db->prepare("INSERT INTO transactions (client_id, amount, statut) VALUES (?,?,?)");
$x= $statement->execute(['amount' => $amount, 'statut' => $statut,]);
var_dump($x);
$y = $statement->fetch();
var_dump($y);

$statement = $db->prepare("SELECT * FROM transactions where amount = `$str` and statut = `$stat` ");
$x->execute();
var_dump($x);
$y = $statement->fetch();
var_dump($y);

?>
