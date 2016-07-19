<?php

namespace App;

function getDbParams() {
	$filename;
	if ($_SERVER['SERVER_NAME'] == 'www.mattgaikema.com')
		$filename = "/../resources/db.xml";
	else 
		$filename = "/../resources/local_db.xml";

	$xml = simplexml_load_file(__DIR__ . $filename);
	//var_dump($xml->database);

	// Return array of properties.
	return $xml->database;
}