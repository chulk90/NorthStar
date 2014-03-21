<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Yo Sun Mee Zle! This is Char, your boo!</Say>

    <!--
    This is an E nine one one service request. There was an accident at Duke University (Latitude: 36.003458, Longitude: -78.939671) 37 seconds ago. Please dispatch an ambulance immediately. Again, Latitude: 36.003458, Longitude: -78.939671. Reference number of this call is 12.
    -->
    
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>