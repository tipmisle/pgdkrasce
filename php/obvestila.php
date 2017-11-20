<?php 
include '../config/db.php';
include '../class/class_obvestilo.php';
$obvestilo = new obvestilo;
$obvestila = $obvestilo->obvestilaPodatki();

foreach ($obvestila as $obvestilo) {
	echo "
			<ul>
				<h3>". $obvestilo['naslov'] ."</h3>
				<li>Datum: ". $obvestilo['created_at'] ."</li>
				<li>". $obvestilo['tekst'] ."</li>
			</li>
	";
}

 ?>