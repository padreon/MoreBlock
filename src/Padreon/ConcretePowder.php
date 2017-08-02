<?php

namespace Padreon;

use pocketmine\item\Tool;
use pocketmine\block\Block;
use pocketmine\block\Glass;
use pocketmine\item\Item;
use pocketmine\level\particle\GenericParticle;
use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\Player;
use pocketmine\level\particle\DustParticle;
use pocketmine\block\Transparent;


class ConcretePowder extends Fallable {

	protected $id = self::CONCRETE_POWDER;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness(){
		return 0.5;
	}

	public function getResistance(){
		return 2.5;
	}

	public function getToolType(){
		return Tool::TYPE_SHOVEL;
	}

	public function getName(){
		static $names = [
			0 => "White Concrete Powder",
			1 => "Orange Concrete Powder",
			2 => "Magenta Concrete Powder",
			3 => "Light Blue Concrete Powder",
			4 => "Yellow Concrete Powder",
			5 => "Lime Concrete Powder",
			6 => "Pink Concrete Powder",
			7 => "Gray Concrete Powder",
			8 => "Silver Concrete Powder",
			9 => "Cyan Concrete Powder",
			10 => "Purple Concrete Powder",
			11 => "Blue Concrete Powder",
			12 => "Brown Concrete Powder",
			13 => "Green Concrete Powder",
			14 => "Red Concrete Powder",
			15 => "Black Concrete Powder",
		];
		return $names[$this->meta]??"Unknown";
	}

}
