<?php ?>
<htmL>
<head>
	<title>NorthStar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<h1>Hello World!</h1>
<?php 
/*
// Slim RESTful API micro-framework
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Initialize Slim
$app = new \Slim\Slim();

$app->post('/data', function() use ($app)) {
	$location = $app->request->post('location');
	$time = $app->request->post('time');
}
*/
if(isset($_REQUEST['msg'])) {
	echo '<i>' . $_REQUEST['msg'] . '</i>';
}
//include("makecall.php")
?>

<!-- @start snippet -->
<h3>Sunmizzle ver. 4</h3>
<form action="makecall.php" method="post">
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>

