<?php
require "twilio-php/Services/Twilio.php";

/* Set our AccountSid and AuthToken */
$AccountSid = "AC554454875ef2761dfd97bf9f4d438baa";
$AuthToken = "c2af4f4d0f28090ead35c5b0b4fc8a16";

/* Your Twilio Number or an Outgoing Caller ID you have previously validated
	with Twilio */
$from= '3106272485';

/* Number you wish to call */
$to= '3018143567';

/* Directory location for callback.php file (for use in REST URL)*/
$url = 'http://northstartechnologies.azurewebsites.net/';

/* SMS: Message */
$message = "Hi Sunmizzle! Test test! - makecall.php";

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
$call = $client->account->calls->create($from, $to, $url . 'callback.php?number=' . $_REQUEST['called']);

// Send the SMS message.
$sms = $client_sms->account->sms_messages->create($from, $to, $message, array());
echo $sms->sid;

/* redirect back to the main page with CallSid */
$msg = urlencode("Connecting... ".$call->sid);
header("Location: index.php?msg=$msg");
?>
