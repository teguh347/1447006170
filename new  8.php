<?php
$nilai = 80;

switch ($nilai)
	{
	case $nilai>=80 :
		echo "index nilai A";
		break;
	case  $nilai>=70 :
		echo "index nilai B";
		break;
	case $nilai>=60 :
		echo "index nilai C";
	case $nilai>=50 :
		echo "index ilai D";
	default :
		echo "Tidak Lulus";
		break;
	}
?>
