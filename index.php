<?php ?>
<htmL>
<head>
	<title>NorthStar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h1>Hello World!</h1>
<?php 

if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
//include("makecall.php")
?>

<!-- @start snippet -->
<h3>Sunmizzle ver. 3</h3>
<form action="makecall.php" method="post">
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>

