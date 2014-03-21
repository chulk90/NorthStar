<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>There was a motorcycle collision in <?php echo $_REQUEST['location']?> at <?php echo $_REQUEST['time']?> No fire has been detected, and the victim appears to be in a stable condition.</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>