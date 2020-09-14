<?php
$out = fopen('php://output', 'w');
fputcsv($out, array('this','is some', 'csv "stuff", you know.'));
fclose($out);
?>