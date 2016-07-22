<?php

namespace App;

/**
	Return a simple xml object with the url and secret of the database.
*/
function getDbParams() 
{
	$filename = "/../resources/db.xml";
	$xml = simplexml_load_file(__DIR__ . $filename);
	//var_dump($xml->database);

	// Return array of properties.
	return $xml->database;
}