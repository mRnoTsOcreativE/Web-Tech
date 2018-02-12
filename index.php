<?php
	echo "Hello<br>";
	$a=5;
	$b=10;
	$i=0;
	$s=5;
	$k=5;
	echo $a+$b ."<br>";
	for($i; $i<100; $i++){
		echo  ($i+1) . " Line " .($i+1). "<br>";
	}
	$cgpa=array("A"=>3,"B"=>3.4,"C"=>3.5);
	echo "Cgpa of student B :". $cgpa['B'] . "<br>";
	foreach($cgpa as $name=>$value){
		echo "Name : ". $name ." Cgpa : ". $value ."<br>";
	}
	echo "<br>";
	for($m=0;$m<5;$m++){
		for($n=0;$n<=$m;$n++){
			echo "*";
		}
		echo "<br>";
	}
	
	for($m=0;$m<5;$m++){
		for($n=5;$n>$m;$n--){
			echo "*";
		}
		echo "<br>";
	}
	
	for($m=1;$m<=5;$m++){
		for($n=5;$n>=1;$n--){
			if($y<=$x)
			{
				echo "*";
			}
			else
				echo "$nbsp";
			
		}
		for($n=0)
		echo "<br>";
	}
	
?>