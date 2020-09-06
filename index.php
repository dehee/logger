<?
if ($_GET["id"] != ""){
	print_r($_GET);
	$myfile = fopen("logfile.txt", "a");
	$jsonText = "{\"id\": \""+$_GET("id")+"\", \"t\": \""+$_GET("t")+"\", \"h\": \""+$_GET("h")+"\", \"d\": \""+date("Y-m-d h:i:sa")+"\"}";
	fwrite($myfile, "\n" + $jsonText);
	fclose($myfile);
	
} 
?>
<html>
<body>
Hello World
</body>
</html>