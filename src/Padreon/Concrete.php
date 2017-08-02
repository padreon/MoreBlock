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

class Concrete extends Solid {

	protected $id = self::CONCRETE;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness(){
		return 1.8;
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function getName(){
		static $names = [
			0 => "White Concrete",
			1 => "Orange Concrete",
			2 => "Magenta Concrete",
			3 => "Light Blue Concrete",
			4 => "Yellow Concrete",
			5 => "Lime Concrete",
			6 => "Pink Concrete",
			7 => "Gray Concrete",
			8 => "Silver Concrete",
			9 => "Cyan Concrete",
			10 => "Purple Concrete",
			11 => "Blue Concrete",
			12 => "Brown Concrete",
			13 => "Green Concrete",
			14 => "Red Concrete",
			15 => "Black Concrete",
		];
		return $names[$this->meta]??"Unknown";
	}

}