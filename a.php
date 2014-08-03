<?php 
	$lat="37.386170";
	$long = "-122.067018";

	$url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=false";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_ENCODING, "");
	//$curlData = curl_exec($curl);
	$curlData=file_get_contents(	$url);
	curl_close($curl);

	$address = json_decode($curlData);
	print_r($address);
?>