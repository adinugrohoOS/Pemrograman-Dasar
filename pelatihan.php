<html>
<body>
<form method="post">
<input type="number" required name="t" placeholder="Nilai Tinggi">
<input type="submit" value="hitung bangun">
</form>
</body>
</html>
<?php
$t=$_POST['t'];
//mendefinisikan variabel
$diameter=$t;
$r=$diameter/2;
define("pi",3.14);
// fungsi untuk mencari seperempat lingkaran
function L1($r)
{
	$l1=(pi*pow($r,2))/2;
	$l11=$l1/4;
	return $l11;
}
function L2($r,$ls)
{
	$s=$r;
	$l2=pow($s,2);
	$l21=$l2-$ls;
	return $l21;
}
// pemanggilan fungsi
$ls=L1($r);
$lr=L2($r,$ls);
$lt=$ls+$lr;
echo "total yang di arsir= ".$lt;


//readfile("inifile.txt");
$filein=fopen("inputan.txt","a") or die ("gagal buka file");
$files=fopen("hasilperhitungan.txt","a") or die ("gagal buka file");
$isi="$t|$lt \n";
$isiin=$t.",";

fwrite($filein,$isiin);
fwrite($files,$isi); // untuk tambah data

// baca data dan masukkan ke dalam variabel array
$y=explode("\n",file_get_contents("hasilperhitungan.txt"));
$z=explode(",",file_get_contents("inputan.txt"));
sort($z);
echo"<br> pengurutan inputan :";
for($i=0;$i<count($z);$i++)
{
echo $z[$i];
}	
echo"<br>";
//menampilkan isi file
for($i=0;$i<count($y);$i++)
{
echo "<br>".$y[$i]."<br>";
}	
//
fclose($files);

?>