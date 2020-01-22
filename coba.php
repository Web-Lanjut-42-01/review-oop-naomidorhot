<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Menghitung Berat Badan Ideal</h1></center>

	<?php
	if(isset($_GET['submit'])){
		$nama = $_GET['nama'];
		$kelamin = $_GET['kelamin'];
		$tb = $_GET['tb'];
		$bb = $_GET['bb'];
		$bmi = $bb / ($tb*$tb/10000);

		echo '<div class="hasil">';
		echo "<h3>Hasil Perhitungan BMI</h3>";
		echo "Nama           : $nama<br>";
		echo "Jenis Kelamin  : $kelamin<br>";
		echo "Tinggi Badan   : $tb cm<br>";
		echo "Berat Badan    : $bb kg<br>";
		echo "<hr>BMI Anda   : ".number_format($bmi);
		echo "<h4>Kesimpulan : </h4>";

		if ($kelamin=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		} elseif ($kelamin=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		}
	}

?>

</body>
</html>