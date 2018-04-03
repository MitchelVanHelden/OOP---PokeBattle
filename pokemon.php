<?php 

class pokemon {

	public $name;
	public $energyType;		
	public $weakness;
	public $resistance;
	public $attacks;
	public $hitpoints;
	

	public function __construct($name, $energyType, $weakness, $resistance, $attacks, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
        $this->hitpoints = $hitpoints;
        
    }

    public function __toString() {
        return json_encode($this);
    }

}