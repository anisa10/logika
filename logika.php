<?php

$gol = 20;

if ($gol >= 10) {
	echo "Mendali emas, dengan total cetak gol : " . $gol;
	switch ($gol) {
		case 20 :
		echo " Mendaptkan mendali emas, beserta bonus 100 jt";
		break;	
	}
}elseif ($gol >= 7) {
	echo "Mendali perak, dengan total cetak gol : " . $gol;
	switch ($gol) {
		case 9 :
		echo " Mendaptkan mendali perak, beserta bonus 80 jt";
	    break;
	}
}elseif ($gol >= 4) {
	echo "Mendali perunggu, dengan total cetak gol : " . $gol;
	switch ($gol) {
		case 5 :
		echo "Mandapatkan mendali perunggu, beserta bonus 50 jt";
			break;
		}
}else {
	echo "Mendali emas ngambang, dengan cetak gol : " . $gol;
	switch ($gol) {
	    default;
			echo ", Tidak mendapatkan bonus";
			break;
	}
}
?>