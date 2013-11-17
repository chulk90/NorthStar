<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>This is an E-9-1-1 service request. There was an accident in Duke University (Latitude: 36.003458, Longitude: -78.939671) one minute and 36 seconds ago. Please dispatch an ambulance immediately.</Say>

    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>