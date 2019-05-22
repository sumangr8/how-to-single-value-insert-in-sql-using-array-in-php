<?php
$con=mysqli_connect("localhost","root","","demo");
$name=implode(",", $_POST['name']);
$surname=implode(",", $_POST['surname']);
$city=implode(",", $_POST['city']);
$language=implode(",", $_POST['language']);
	$s=mysqli_query($con,"insert into contact(name,surname,city,language) value('$name','$surname','$city','$language')");




?>