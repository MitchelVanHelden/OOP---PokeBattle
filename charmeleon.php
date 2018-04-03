<?php

class charmeleon extends pokemon{

    
    
	public function __construct($name)
    {
      parent::__construct($name, new EnergyType ('fire'), new Weakness ('water'), new Resistance('lightning'), [new Attacks ('Head Butt'), ('Flare')], new hitpoints (60));
    }	 

}


?>