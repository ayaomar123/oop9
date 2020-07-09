<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
	$path = "classes/";
	$ext = ".class.php";
	$fullPath = $path . $className . $ext;

	include_once $fullPath;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
 		$person1 = new Person("Aya",28);
		echo $person1->getPerson();
		echo "<br>";
	?>

</body>
</html>
