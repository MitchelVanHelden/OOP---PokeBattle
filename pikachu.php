<?php

class pikachu extends pokemon{
	
	
	public $health;

	public function __construct($name)
    {
    	parent::__construct($name, new EnergyType ('lightning'), new Weakness ('fire'), new Resistance('fighting'), [new Attacks ('pika punch'), ('electric ring')], new Hitpoints (60), $this->health = new Health (60));

    	
        
    }
}


?>