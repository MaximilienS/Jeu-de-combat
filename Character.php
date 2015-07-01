<?php

class Character
{

		private $hp;

		private $degatsmin;

		private $degatsmax;

		
		public function __construct($hp, $degatsmin, $degatsmax){

			$this->hp=$hp;
			$this->degatsmin=$degatsmin;
			$this->degatsmax=$degatsmax;

		}
		public function attack($perso2){
			$damage=rand($this->degatsmin, $this->degatsmax);
			$perso2->hp -=$damage;
			
		}
		public function getHp(){
			return $this->hp;
		} 
		public function isKo()
		{
			if($this->hp <= 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}	

}


