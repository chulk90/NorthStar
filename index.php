<?php ?>
<htmL>
<head>
	<title>NorthStar: Your Guardian from Above</title>
</head>
<body>
<h1>Click-to-call</h1>
<?php 

if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}

?>

<!-- @start snippet -->

<h3>Please enter your phone number, and you will be connected to Chul's phone</h3>
<form action="makecall.php" method="post">
    <span>Your Number: <input type="text" name="called" /></span>
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>

