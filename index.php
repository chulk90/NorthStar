<?php ?>
<htmL>
<head>
	<title>NorthStar: Your Guardian from Above</title>
</head>
<body>
<h1>E-911 testing (voice and SMS)</h1>
<?php 

if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
exec ("makecall.php")
?>

<!-- @end snippet -->
</body>
</html>

