<?php

$x = array(4, 6, 1, 3, 5, 7, 25);
	foreach($x as $value){
	echo "$value ";
	}
	echo "<br>";
	foreach ($x as $value) {
	    for ($i = 0; $i <= $value; $i++){ 
	    echo "*";
	}
	  echo "<br>";  


}
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
	foreach($x as $value){
	echo "$value ";
	}
	echo "<br>";
	foreach ($x as $value){
	    if (gettype($value) == "string"){
	    	for ($i = 0; $i <= strlen($value)-1; $i++){
	    	echo $value[0];
	    	}
	    } 
	    else{
	    for ($i = 0; $i <= $value -1; $i++){ 
	    echo "*";
	    }
	}
	  echo "<br>";  
}
?>