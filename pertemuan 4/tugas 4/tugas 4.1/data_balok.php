<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
		require_once 'class_balok.php';

		$balok1 = new Balok ( 29,16,7 );
		$balok2 = new Balok ( 16,7,29 );
		$balok3 = new Balok ( 7,29,6 );
		$balok4 = new Balok ( 10,10,10 );
		 

		
		echo "<br>Luas Balok 1 = " . $balok1->getLuas();
		echo "<br>Kel Balok 2 = " . $balok1->getKel();
		echo "<br>Vol Balok 3 = " . $balok1->getVol();
		echo "<br>Vol Balok 4 = " . $balok1->getVol();
		echo "<br><br>";
		echo "<br>Luas Balok 2 = " . $balok2->getLuas();
		echo "<br>Kel Balok 2 = " . $balok2->getKel();
		echo "<br>Vol Balok 3 = " . $balok2->getVol();
		echo "<br>Vol Balok 4 = " . $balok2->getVol();
		echo "<br><br>";
		echo "<br>Luas Balok 3 = " . $balok3->getLuas();
		echo "<br>Kel Balok 2 = " . $balok3->getKel();
		echo "<br>Vol Balok 3 = " . $balok3->getVol();
		echo "<br>Vol Balok 4 = " . $balok3->getVol();
		echo "<br><br>";
		echo "<br>Luas Balok 4 = " . $balok4->getLuas();
		echo "<br>Kel Balok 2 = " . $balok4->getKel();
		echo "<br>Vol Balok 3 = " . $balok4->getVol();
		echo "<br>Vol Balok 4 = " . $balok4->getVol();
		

?>