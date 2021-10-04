<?php
	$db = mysqli_connect('server53','aquvamid_aqua','SR^g0;!DeE#Z','aquvamid_aqua');
	if (!$db) {
		echo "Database connection faild";
	}

	$image = $_FILES['image']['name'];
	$price = $_POST['filename'];
	$ingredients = $_POST['description'];
	$item_name=$_POST['Addtional info'];

	$imagePath = 'uploads/'.$image;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO food(price,image,ingredients,item_name)VALUES('".$price."','".$image."','".$ingredients."','".$item_name."')");


?>