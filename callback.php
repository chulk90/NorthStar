<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    // Convert GPS Coordinates to Street Address via Google Maps
    // http://stackoverflow.com/questions/16395367/how-to-convert-gps-coordinates-to-a-full-address-with-php
 //    $lat="37.386170";
	// $long = "-122.067018";

	// $url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=false";

	// $curl = curl_init();
	// curl_setopt($curl, CURLOPT_URL, $url);
	// curl_setopt($curl, CURLOPT_HEADER, false);
	// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// curl_setopt($curl, CURLOPT_ENCODING, "");
	// //$curlData = curl_exec($curl);
	// $curlData=file_get_contents(	$url);
	// curl_close($curl);

	// $address = json_decode($curlData);
	// print_r($address);
?>
<Response>
    <Say>There was a traffic collision at 335 Pioneer Way about one minute ago. No fire has been detected. Please send an ambulance to the location.</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>