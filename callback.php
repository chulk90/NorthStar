<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>There was a motorcycle collision at Latitude of 38.99 and Longitude of -76.936194 about one minute ago. No fire has been detected. Please send an ambulance to the location.</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>