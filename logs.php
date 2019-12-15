<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Log Files</h1>
<?php
$resource=opendir("logs");
while(($entry=readdir($resource))!==FALSE){
	if($entry!='.' && $entry!='..'){
	echo "<a href='logs/login.txt'>".$entry."</a><br/>";
}
}

?>
<br/>
<button class="btn btn-primary" onclick="window.location.href='admin.php'" id='home'>Home</button>
</body>
</html>