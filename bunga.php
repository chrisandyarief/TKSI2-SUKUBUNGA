<?php
	function hitungBunga($pinjaman,$bunga,$tenor,$admin){
		$periode = $tenor;
		$biayaAdmin = $admin; 
		$sisaAngsuran = $pinjaman;
		$totalAngsuranPokok = 0;
		$totalBunga = 0;
		$total = 0;
		$totalAngsuran = 0;
		$totalAdmin = 0;
	
		for ($i=1; $i <= $tenor ; $i++) {
			$bungaBulanan = $bunga/$tenor;
			$angsuranPokok = $pinjaman/$periode;
			$totalAngsuranPokok = $totalAngsuranPokok+$totalAngsuran;
			$bungaPerBulan = ($pinjaman -  (($i - 1) * $angsuranPokok )) * $bunga / 12;
			$totalBunga = $totalBunga + $bungaPerBulan;
			$totalAngsuran = $bunga + $angsuranPokok + $admin;
			$total = $total + $totalAngsuran;
			$sisaAngsuran = $sisaAngsuran - $totalAngsuran;
			$totalAdmin = $totalAdmin +$admin;
			
			echo "<table>";
			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td>$angsuranPokok</td>";
			echo "<td>$bungaPerBulan</td>";
			echo "<td>$admin</td>";
			echo "<td>$totalAngsuran</td>";
			echo "<td>$sisaAngsuran</td>";
			echo "</tr>";
		}
		echo "<tr>";
		echo "<td></td>";
		echo "<td>$totalAngsuranPokok</td>";
		echo "<td>$totalBunga</td>";
		echo "<td>$totalAdmin</td>";
		echo "<td>$total</td>";
		echo "</tr>";
		echo "<table>";
	};

	hitungBunga($_POST["pinjaman"],$_POST["bunga"],$_POST["tenor"],$_POST["admin"]);
?>
