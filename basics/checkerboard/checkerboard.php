<?php

echo "<html><head><title></title><link rel='stylesheet' type='text/css' href='checkerboard.css'></head><body>";

	$red_black = "<div class= 'red'></div><div class= 'black'></div>";
	$black_red = "<div class= 'black'></div><div class= 'red'></div>";
	
	for ($n = 0; $n <= 3; $n++){
		for ($i = 0; $i <= 3; $i++){
			echo "$red_black";
		}
		for($b = 0; $b <= 3; $b++){
			echo "$black_red";
		}
}

echo "</body></html>";
?>