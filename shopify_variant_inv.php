<?php 
  // Create a private app on your store, add values below
  $API_KEY = ''; 
  $SECRET = '';
  $TOKEN = '';
  $STORE_URL = '';

  $get_json = ""; //set json as a string

  	// Shopify's Api Handles the Parsing of Variant SKUs and inventory via 
  	// the HTTP Request. The limit is 250 variants per request so we loop
  	// through the pages of variant SKUs your store has.

  	for ($p=1; $p<11; $p++) {
		$url = 'https://' . $API_KEY . ':' . $SECRET . '@' . $STORE_URL . '/admin/variants.json?limit=250&page='  . $p . '&fields=sku,inventory_quantity';

		$get_json .= file_get_contents($url);

	}

		$jsonS = array('{"variants":[', ']}');
		$jsonR = array(',','');
		
		// Quick find and replace to get rid of duplicates
		$fin = str_replace($jsonS, $jsonR, $get_json); 

		$fin = substr($fin, 1); // Gets rid of first "," from str_replace

	// Add the variant key back to the beginning
	$fin_json = '{"variants":[' . $fin . ']}'; 

	echo $fin_json; //echo json to browser
?>