<?php
$kendaraan="becak";
switch ($kendaraan) {
	case "motor":
		echo "Kendaraan Roda Dua";
		break;
	case "mobi":
		echo "Kendaraan Roda Empat";
		break;
	case "becak":
		echo "kendaraan Roda Tiga";
		break;
	case "truk":
		echo "Kendaraan Roda Delapan";
		break;
	case "bus":
		echo "Kendaraan Roda Enam";
		break;
	default:
		echo "Kendaraan tidak ditemukan";
		break;
}
?>