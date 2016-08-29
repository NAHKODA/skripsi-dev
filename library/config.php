<?php 

$config = array (
			//config base_url
			'base_url' => "http://".$_SERVER['HTTP_HOST'].
				str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME'])
	);

?>