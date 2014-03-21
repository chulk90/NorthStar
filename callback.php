<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>This is a test. One, two, three, four, five.</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>