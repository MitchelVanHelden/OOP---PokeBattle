<?php
class Weakness{
	

	public function __construct($name)
	{
		$this->name = $name;	
	}

	public function __toString() {
      	  return json_encode($this);
   		 }
}