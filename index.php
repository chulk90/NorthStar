<?php ?>
<htmL>
<head>
	<title>NorthStar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h1>Hello World!</h1>
<?php 

echo $_GET['latitude'];
echo $_GET['longitude'];
echo $_GET['temp'];

require "twilio-php/Services/Twilio.php";

/*

// Slim RESTful API micro-framework
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Initialize Slim
$app = new \Slim\Slim();

$location = '';
$time = '';

$app->post('/data', function() use ($app)) {
	$location = $app->request->post('location');
	$time = $app->request->post('time');
}

$app->run();
*/

$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];
$temperature = $_GET['temp'];


if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
//include("makecall.php")

// The following below is copied from "makecall.php"

/* Set our AccountSid and AuthToken */
$AccountSid = "AC554454875ef2761dfd97bf9f4d438baa";
$AuthToken = "c2af4f4d0f28090ead35c5b0b4fc8a16";

/* Your Twilio Number or an Outgoing Caller ID you have previously validated
	with Twilio */
$from= '3106272485';

/* Number you wish to call */
$to= '4434747584';

/* Chul - Number you wish to call */
$called= '4434747584';

/* Directory location for callback.php file (for use in REST URL)*/
//$url = 'http://northstartechnologies.azurewebsites.net/';
$url = 'http://nstar.io/';

date_default_timezone_set('America/Los_Angeles');
$date = date('G:i:s A');
// $date = date('m/d/Y h:i:s a', time());
echo $date;

/* SMS: Message */
//$message = "E911 - Collision detected at " . "38.99 , -76.936194 at " . $date . ". No fire detected. Please send an ambulance.";
$message = "Collision at " . $latitude . $longitude . " at " . $date . ". No fire detected. Please send an ambulance.";

/* Instantiate a new Twilio Rest Client */
$client = new Services_Twilio($AccountSid, $AuthToken);

$client_sms = new Services_Twilio($AccountSid, $AuthToken);

/*
if (!isset($_REQUEST['called']) || strlen($_REQUEST['called']) == 0) {
    $err = urlencode("Must specify your phone number");
    header("Location: index.php?msg=$err");
    die;
}
*/

/* make Twilio REST request to initiate outgoing call */
// $call = $client->account->calls->create($from, $to, $url . 'callback.php?number=' . $_REQUEST['called'] . '&latitude=' . $_REQUEST['latitude'] . '&longitude=' . $_REQUEST['longitude']);

// Send the SMS message.
$sms = $client_sms->account->sms_messages->create($from, $to, $message, array());
echo $sms->sid;

?>

<h3> v7 </h3>

<!-- @start snippet -->

<!--
<h3>Sunmizzle ver. 5</h3>
<form action="makecall.php" method="post">
    <input type="submit" value="Connect me!" />
</form>
-->

<!-- @end snippet -->

</body>
</html>

