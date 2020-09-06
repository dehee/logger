<?
if ($_GET["id"] != ""){
	$_GET["d"] = date("Y-m-d H:i:s");
	//print_r($_GET);
	$myfile = fopen("logfile.txt", "a");
	$jsonText = json_encode($_GET, 1);
	print_r($jsonText);
	fwrite($myfile, "\n" & $jsonText);
	fclose($myfile);
	
} 
?>
<html>
<body>
Hello World
</body>
</html>