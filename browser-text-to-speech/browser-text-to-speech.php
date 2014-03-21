<?php
// @start snippet
require_once('Services/Twilio/Capability.php');

$ACCOUNT_SID = 'AC554454875ef2761dfd97bf9f4d438baa';
$AUTH_TOKEN = 'c2af4f4d0f28090ead35c5b0b4fc8a16';
$APP_SID = 'APa94711e9699f2d1b02ae8d289836deec';
$token = new Services_Twilio_Capability($ACCOUNT_SID, $AUTH_TOKEN);
$token->allowClientOutgoing($APP_SID);
// @end snippet
?>
<!DOCTYPE HTML>
<html> 
	<head> 
		<title>TTS Tester</title> 
		<!-- @start snippet -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
		<script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>
 
		<script type="text/javascript"> 
 
 			Twilio.Device.setup("<?php echo $token->generateToken();?>",{"debug":true});

			$(document).ready(function() {
				$("#submit").click(function() {
					speak();
				});
			});
 
			function speak() {
				var dialogue = $("#dialogue").val();
				var voice = $('input:radio[name=voice]:checked').val();
 
				$('#submit').attr('disabled', 'disabled');
 
				Twilio.Device.connect({ 'dialogue' : dialogue, 'voice' : voice });
			}
 
			Twilio.Device.disconnect(function (conn) {
				$('#submit').removeAttr('disabled');
			});
			<!-- @end snippet -->
		</script> 
	</head> 
	<body> 
		<!-- @start snippet -->
		<p> 
			<label for="dialogue">Text to be spoken</label> 
			<input type="text" id="dialogue" name="dialogue" size="50"> 
		</p> 
		<p> 
			<label for="voice-male">Male Voice</label> 
			<input type="radio" id="voice-male" name="voice" value="1" checked="checked"> 
			<label for="voice-female">Female Voice</label> 
			<input type="radio" id="voice-female" name="voice" value="2"> 
		</p> 
		<p> 
			<input type="button" id="submit" name="submit" value="Speak to me"> 
		</p> 
		<!-- @end snippet-->
	</body> 
</html>
