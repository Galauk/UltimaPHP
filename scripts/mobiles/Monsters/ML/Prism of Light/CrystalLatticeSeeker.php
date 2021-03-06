<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class CrystalLatticeSeeker extends Mobile {
	public function summon() {
		$this->name = "crystal lattice seeker";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(550, 850);
		$this->dex = rand(190, 250);
		$this->int = rand(350, 450);
		$this->maxhits = rand(350, 550);
		$this->hits = $this->maxhits;
		$this->damage = 13;
		$this->damageMax = 19;
		$this->resist_physical = rand(80, 90);
		$this->resist_fire = rand(40, 50);
		$this->resist_cold = rand(40, 50);
		$this->resist_poison = rand(40, 50);
		$this->resist_energy = rand(40, 50);
		$this->karma = -17000;
		$this->fame = 17000;
		$this->virtualarmor = 0;

}}
?>
