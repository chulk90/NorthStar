<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Yo Sun Mee Zle! This is Char, your boo!</Say>
    <Dial><?php echo $_REQUEST['number']?></Dial>
</Response>