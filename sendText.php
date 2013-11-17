<?php
require "twilio-php/Services/Twilio.php";

/* Set our AccountSid and AuthToken */
$AccountSid = "AC554454875ef2761dfd97bf9f4d438baa";
$AuthToken = "c2af4f4d0f28090ead35c5b0b4fc8a16";

/* Your Twilio Number or an Outgoing Caller ID you have previously validated
	with Twilio */
$from= '3106272485';

/* Number you wish to call */
$to= '4434747584';

/* Directory location for callback.php file (for use in REST URL)*/
$url = 'http://chulk90.azurewebsites.net/';

/* Message */
$message = "This is an E-911 service request. There was an accident in Duke University (36.003458,-78.939671) two minutes ago. Please dispatch an ambulance.";

// Create the call client.
$client = new Services_Twilio($AccountSid, $AuthToken);

// Send the SMS message.
try
{
    $client->account->sms_messages->create($from_number, $to_number, $message);
}
catch (Exception $e) 
{
    echo 'Error: ' . $e->getMessage();
}
?>