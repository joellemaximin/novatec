<?php
	require_once "includes/configdb.inc.php";
	
	class csv extends mysqli 
    {
			function import($file)
			{

				$file = fopen($file, 'r');
					print "<pre>";
					print_r($row);
					print "</pre>";
				while ($row = fgetcsv($file)){
					$value = "'". implode("','", $row) ."'";
					$sql = "INSERT INTO clients(id) VALUES(". $value .")";
					if($this->query($sql)){
						$this->state_csv = true;
					} else {
						$this->state_csv = false;
					}
				}	
			}

    }

?>