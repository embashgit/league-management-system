<?php
$db = new mysqli("localhost","root","","football");

function addPlayers($footballers, $team){
	$db = new mysqli("localhost","root","","football");
	
	$h = 0;
	$i = 0;
	$j = 1;
	$k = 2;
	$l = 3;
	$m = 4;
	$n = 5;
	
	$counter = count($footballers)/6;
	
	while($h < $counter){
		$name = $footballers[$i];
		$position = $footballers[$j];
		$age = $footballers[$k];
		$lga = $footballers[$l];
		$state = $footballers[$m];
		$session = $footballers[$n];
		
		$i += 6;
		$j += 6;
		$k += 6;
		$l += 6;
		$m += 6;
		$n += 6;
		
		$db->query("INSERT INTO players(name, team, position, age, lga, state, session) VALUES ('$name','$team','$position','$age',
		'$lga','$state','$session')"); 
		$h++;
	}
}

?>