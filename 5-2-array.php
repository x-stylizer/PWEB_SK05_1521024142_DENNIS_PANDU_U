<html>
<head>
<title>Study Kasus 5</title>
<style type="text/css">
	table{
		margin-left: 10px;
		margin-top: 10px;
		background-color: aqua;
	}
</style>
</head>
<body>
	<?php
		$toko = array 
			(
				array(1001,"Sabun Lifebuoy","Rp.1.500,-"),
				array(1002,"Permen Blaster","Rp.5.600,-"),
				array(1003,"Pepsodent","Rp.4.560,-"),
				array(1004,"Madu Arbian","Rp.30.000,-"),
				array(1005,"Kecap ABC","Rp7.250,-"),
				array(1006,"Sauce Tomat ABC","Rp.6.700,-"),
				array(1007,"Gulaku","Rp.8.900,-"),
				array(1008,"Rinso","Rp.7.100,-"),
				array(1009,"Super Pel","Rp.6.450,-"),
				array(1010,"Permen Tanggo","Rp.5.600,-")
			);
		echo "<table border=1px>";
		echo "<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Harga</th>
			</tr>";
		echo "<tr>
				<td>".$toko[0][0]."</td>
				<td>".$toko[0][1]."</td>
				<td>".$toko[0][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[1][0]."</td>
				<td>".$toko[1][1]."</td>
				<td>".$toko[1][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[2][0]."</td>
				<td>".$toko[2][1]."</td>
				<td>".$toko[2][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[3][0]."</td>
				<td>".$toko[3][1]."</td>
				<td>".$toko[3][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[4][0]."</td>
				<td>".$toko[4][1]."</td>
				<td>".$toko[4][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[5][0]."</td>
				<td>".$toko[5][1]."</td>
				<td>".$toko[5][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[6][0]."</td>
				<td>".$toko[6][1]."</td>
				<td>".$toko[6][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[7][0]."</td>
				<td>".$toko[7][1]."</td>
				<td>".$toko[7][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[8][0]."</td>
				<td>".$toko[8][1]."</td>
				<td>".$toko[8][2]."</td>
			</tr>";
		echo "<tr>
				<td>".$toko[9][0]."</td>
				<td>".$toko[9][1]."</td>
				<td>".$toko[9][2]."</td>
			</tr>";
		echo "</table>";
	?>
</body>
</html>