<?php 
	$image_dir = "img/"
	$image_name = $image_dir . basename($_FILES['avatarka']['name']);

	$upload = move_uploaded_file($_FILES['avatarka']['tmp_name'], $image_name);

	if ($upload == false) {
		echo "Не работает";
	} else {
		echo 'Все работает'
	}
?>