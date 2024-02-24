<?php 

	$hewan = ["Kucing", "Kuda", "Kelinci", "Kangguru", "Koala", "Keledai"];
	echo $hewan[0]; // Output: Kucing
	echo "<br>";
	echo $hewan[5]; // Output: Ikan
	echo "<br>";

    // Mengganti Array 
    $hewan[2] = "Kukang";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Praktikum 1 - Array</title>
</head>
<body>
	<p>Nama-nama hewan</p>
	<ul>
		<?php
			foreach($hewan as $hewans => $value) {
				echo "<li>". $value. "</li>";
			}
		?>
	</ul>
</body>
</html>