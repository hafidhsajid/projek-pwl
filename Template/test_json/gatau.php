<?php
$json = file_get_contents("response.json");
$bulan = array ('Januari', 'Februari', 'Maret');
foreach ($bulan as $index => $nama_bulan) {
	echo  '. ' . $nama_bulan . '<br/>';
}
?>