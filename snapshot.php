<?php

	$data = file_get_contents("php://input");
	$fic_name = 'snapshot'.rand(1000,9999).'.jpg';
	$fp = fopen('./snapshots/'.$fic_name, 'wb');
	$ok = fwrite( $fp, $data);
	fclose( $fp );
	if($ok)
		echo $fic_name;
	else
		echo "ERROR";
	
?>