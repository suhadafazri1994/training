<!DOCTYPE html>
<html>
<head>
	<title>Segitiga</title>
</head>
<body>
 
	
 
	<form action="" method="POST">
		Masukan bintang 
		<input type="text" name="bintang">
		<input type="submit" name="enter" value="GO">
	</form>
 
	<?php 
 
		if (isset($_POST["enter"])) {
			@$nil = $_POST["bintang"];
 
			for ($i=1;$i<=10;$i++)
{
    for($j=$i;$j<=10;$j++)
    {
        echo "&nbsp;&nbsp;*&nbsp;&nbsp;";
    }
    echo "<br>";
}
		}
 
	 ?>
 
</body>
</html>