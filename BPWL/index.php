<?php

require 'vendor/autoload.php';
use Carbon\Carbon;

$sekarang = Carbon::now();

echo "Sekarang :$sekarang <br>";
echo "Umur Saya :".Carbon::createFromDate(2000,11,25)->age . "<br>";
echo "Besok :". $sekarang->addDay() . "<br>";
echo "Bulan Depan :".$sekarang->addMonth() . "<br>";
echo "Tahun Depan :".$sekarang->addYear() . "<br>";

if(Carbon::now()->isWeekend()){
	echo "Horee Libur Bisa Rebahan Guys";
}else{
	echo "Yah Tugas Lagi Cuy";
}
?>