<?php
/**
	@author Matt Gaikema
*/

namespace App;

/**
	Return a simple xml object with the url and secret of the database.
	The url and secret are stored in a file somewhere.

	@return SimpleXML A SimpleXML element with two properties,
	url and secret, which contain the url and the secret of a Firebase database.
*/
function getDbParams() 
{
	$filename = "/../resources/db.xml";
	$xml = simplexml_load_file(__DIR__ . $filename);
	//var_dump($xml->database);

	// Return array of properties.
	return $xml->database;
}