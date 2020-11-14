<?php 

//bilangan prima 1-50

$prima = array(1, 2);

for($i=3; $i<=50; $i++){
	$bilprima = true;
	for($j=2; $j<$i; $j++){
		if($i % $j==0){
			$bilprima = false;
		}
	}
	if($bilprima){
		array_push($prima, $i);
	}
}

echo "Bilangan prima antara 1-50 adalah ";
foreach ($prima as $i) {
	echo "$i ";
}

 ?>