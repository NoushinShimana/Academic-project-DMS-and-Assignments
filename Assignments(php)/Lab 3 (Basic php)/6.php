<!DOCTYPE html>
<html>
<body>
	<?php

	function IsPrime($n){
		$p=0;
	for($i=2;$i<$n;$i++){
		if($n%$i==0){
			$p+=1;
		}
	}
	if($p==0){
		echo"prime";
	}
	else{
		echo"not prime";
	}
}

	$x=IsPrime(22);

	?>
</body>
</html>