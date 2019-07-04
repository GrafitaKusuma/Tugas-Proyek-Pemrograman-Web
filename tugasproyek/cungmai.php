<?php

include("HEADER.html");
include("main.html");

$nim = @$_POST["nim"];
$nama = @$_POST["nama"];

echo "$nim $nama";
//Simpan kedalam file
	

	$fileku=fopen("data.txt","a");
	$data=$nim.";".$nama."\n";
	fwrite($fileku,$data);
	fclose($fileku);

echo "<pre>";
echo "DATA Mahasiswa<br>";
echo "===========================<br>";
include("data.txt");
echo "</pre>";	
include("FOOTER.html");
?>