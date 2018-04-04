<?php

require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'weakness.php';
require 'resistance.php';
require 'energytype.php';
require 'attacks.php';



	$pikachu = new Pikachu('Pika');
	$charmeleon = new Charmeleon('Charmelie');

	
	$pikachu->attack($pikachu->attacks[0], $charmeleon);
	$charmeleon->attack($charmeleon->attacks[1], $pikachu);
	
	
	


 ?>