<?php ?>
<htmL>
<head>
	<title>NorthStar: Your Guardian from Above</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h1>E-911 testing (voice and SMS)</h1>
<?php 

if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
//include("makecall.php")
?>

<!-- @start snippet -->
<h3>Click on 'Connect me!' when you're ready.</h3>
<form action="makecall.php" method="post">
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>

