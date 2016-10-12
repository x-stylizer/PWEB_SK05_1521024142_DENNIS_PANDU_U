<html>
<head>
<title>Study Kasus 5</title>
<style type="text/css">
	table{
		margin-left: 10px;
		margin-top: 10px;
	}
</style>
</head>
<body>
	<?php
$number = array(
    array(5,10,15,20,25,30),
    array(6,11,16,21,26,31),
    array(7,12,17,22,27,32),
    array(8,13,18,23,28,33),
	array(9,14,19,24,29,34),
	array(10,15,20,25,30,35),
	array(11,16,21,26,31,36),
	array(12,17,22,27,32,37),
	array(13,18,23,28,33,38),
	array(14,19,24,29,34,39)
);
echo "<table border=2px>";
	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4905; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	echo "</table>";
?>
</body>
</html>