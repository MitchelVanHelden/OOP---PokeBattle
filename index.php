<?php

require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'weakness.php';
require 'resistance.php';
require 'energytype.php';
require 'attacks.php';
require 'hitpoints.php';
require 'health.php';


$pikachu =  new pikachu ('Mitchel');
 
 print_r('<pre>'. $pikachu . '</pre>');

$charmeleon =  new charmeleon('Charmy') ;
 
print_r('<pre>'. $charmeleon . '</pre>');




 ?>