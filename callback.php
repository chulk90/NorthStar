<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>There was a motorcycle collision near 463 Apache Boulevard in Tempe, Arizona about one minute ago. No fire has been detected, and the victim appears to be in a stable condition. Please send an ambulance to the location.</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>