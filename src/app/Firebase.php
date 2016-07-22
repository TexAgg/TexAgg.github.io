<?php

namespace App;
use \Httpful\Request;

require __DIR__ . '/../../vendor/autoload.php';

class Firebase 
{
	
	// Database url.
	private $baseUrl;
	// Database secret.
	private $secret;

	public function __construct($url, $secret) 
	{
		$this->baseUrl = $url;
		$this->secret = $secret;
	}

	/**
		Get JSON data from Firebase.
		See the Firebase documentation here:
		https://firebase.google.com/docs/reference/rest/database/#section-get

		@param string $path The path to read data from.
		@return object A php object containing a JSON response.
	*/
	public function getData($path)
	{

		$url = $this->baseUrl . $path . ".json?auth=" . $this->secret; 
		//var_dump($url);

		$response = \Httpful\Request::get($url)
			->expectsJson()
			->send();

		//var_dump($response);
		return $response->body;

	}

}