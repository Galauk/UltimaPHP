<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Club extends TypeNormal {
	public function build() {
		$this->name = "club";
		$this->graphic = 0x13B4;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 40;
		$this->aosmindamage = 11;
		$this->aosmaxdamage = 13;
		$this->aosspeed = 44;
		$this->mlspeed = 2;
		$this->oldstrengthreq = 10;
		$this->oldmindamage = 8;
		$this->oldspeed = 40;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 31;
		$this->maxHits = 40;
		$this->weight = 9.0;

}}
?>
