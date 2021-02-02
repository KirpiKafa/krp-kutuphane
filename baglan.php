<?php
	
	$baglanti = new mysqli("localhost", "root", "", "test");
	
	mysqli_set_charset($baglanti,"utf8");
	
	if($baglanti->connect_error)
		die("Bağlantı Sağlanamadı".$baglanti->connect_error);
?>
