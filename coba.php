<html>
<head>
<title></title>
</head>
<body>
	<form method="POST">
		<div class="col-md-2">
		<label>Masukkan nilai sisi :</label>
		<input type="number" name="sisi"></div><br>
		<button type="submit" value="hitung">Hitung</button><br>
	</form>
</body>
</html>

<?
	//deklarasi variable dari inputan
	$sisi = $_POST('sisi');
	$diameter = $sisi;
	$jari = $diameter / 2;
	$alas = $jari;
	$tinggi = $jari;
	define("pi", 3.14);

	// membuat fungsi untuk mencari luas masing" bangun
	function Lpersegi(){ //fungsi mencari luas persegi
		$LP = $sisi * $sisi;
		return $LP;
	}
	function Llingkaran($jari){ //fungsi mencari luas lingkaran
		$LL = (pi * pow($jari, 2));
		return $LL;
	}
	function Lsegitiga($alas, $tinggi){ //fungsi mencari luas segitiga
		$LS = 1/2 * $alas * $tinggi;
		return $LS;
	}

	echo "Luas masing-masing bangun : P ="
		.Lpersegi()." L = ".Llingkaran()." S = ".Lsegitiga();
?>