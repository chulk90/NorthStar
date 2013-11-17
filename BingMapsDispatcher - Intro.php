<?php ?>
<htmL>
<head>
	<title>Bing Maps for Dispatcher</title>
</head>
<body>
<h1>Where exactly is the patient?</h1>
<?php 

/*
if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
*/

?>

<!-- @start snippet -->

<h3>Type in the call's reference number:</h3>
<form action="BingMapsDispatcher.php" method="post">
	<span>Reference Number: <input type="text" name="called" /></span>
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>
