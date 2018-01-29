<?php
include_once "kapcsolat.php";
?>
<!DOCTYPE html>
<html>

<head>
<title>Bakos Richárd Gábor</title>

<link rel="stylesheet" href="font.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="szamlalo.js"></script>

</head>

<body>
<h1>Szám kiírás pörgetéssel:</h1>


<script>
///php hivas miatt
var a = '<?php echo $line ;?>';
setTimeout(porog, 0);

function porog(){
	document.getElementById("odometer").innerHTML = a;
}
</script>
<div class="odometer" id="odometer"></div>
</body>
</html>
