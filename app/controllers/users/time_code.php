<?php 

$start_time = microtime(true);

for($i = 0; $i < 10000; $i++){
	$math = pow(10 * 500, rand(100, 2000))
}

echo (microtime(true) - $start_time);

 ?>