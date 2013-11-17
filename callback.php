<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>This is an E nine one one service request. There was an accident at Duke University (Latitude: 36.003458, Longitude: -78.939671) 37 seconds ago. Please dispatch an ambulance immediately. Again, Latitude: 36.003458, Longitude: -78.939671. Reference number of this call is 12.</Say>
    <Sms>This is an E-911 request. There was an accident in Duke University (36.003458,-78.939671) 38 seconds ago. Please dispatch an ambulance immediately. Reference #: 12"</Sms>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>