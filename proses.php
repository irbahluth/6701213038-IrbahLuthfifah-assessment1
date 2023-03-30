<?php
// ambil nilai input dari form.html
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operasi = $_POST['operasi'];

// lakukan operasi aritmatika sesuai dengan pilihan di dropdown box
<<<<<<< HEAD
if ($operasi == '+') {
	$hasil = $angka1 + $angka2;
} elseif ($operasi == '-') {
	$hasil = $angka1 - $angka2;
} elseif ($operasi == '*') {
	$hasil = $angka1 * $angka2;
} elseif ($operasi == '/') {
	$hasil = $angka1 / $angka2;
=======
switch ($operasi) {
	case '+':
		$hasil = $angka1 + $angka2;
		break;
	case '-':
		$hasil = $angka1 - $angka2;
		break;
	case '*':
		$hasil = $angka1 * $angka2;
		break;
	case '/':
		$hasil = $angka1 / $angka2;
		break;
	default:
		$hasil = "Operasi tidak valid";
>>>>>>> branch_6701213038
}

// tampilkan hasil operasi aritmatika
echo "Hasil $angka1 $operasi $angka2 = $hasil";
