<?php

namespace Padreon;

use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\block\Block;


class Main extends PluginBase {
	public function onEnable() {
		Block::$list[Block::CONCRETE] = Concrete::class;
		Item::$list[Block::CONCRETE] = Concrete::class;
		Item::$list[Block::CONCRETE_POWDER] = ConcretePowder::class;
		
/*		
		self::$list[self::BLACK_GLAZED_TERRACOTTA] = BlackGlazedTerracotta::class;
		self::$list[self::BLUE_GLAZED_TERRACOTTA] = BlueGlazedTerracotta::class;
		self::$list[self::BROWN_GLAZED_TERRACOTTA] = BrownGlazedTerracotta::class;
		self::$list[self::CYAN_GLAZED_TERRACOTTA] = CyanGlazedTerracotta::class;
		self::$list[self::GRAY_GLAZED_TERRACOTTA] = GrayGlazedTerracotta::class;
		self::$list[self::GREEN_GLAZED_TERRACOTTA] = GreenGlazedTerracotta::class;
		self::$list[self::LIGHT_BLUE_GLAZED_TERRACOTTA] = LightBlueGlazedTerracotta::class;
		self::$list[self::LIME_GLAZED_TERRACOTTA] = LimeGlazedTerracotta::class;
		self::$list[self::MAGENTA_GLAZED_TERRACOTTA] = MagentaGlazedTerracotta::class;
		self::$list[self::ORANGE_GLAZED_TERRACOTTA] = OrangeGlazedTerracotta::class;
		self::$list[self::PINK_GLAZED_TERRACOTTA] = PinkGlazedTerracotta::class;
		self::$list[self::PURPLE_GLAZED_TERRACOTTA] = PurpleGlazedTerracotta::class;
		self::$list[self::RED_GLAZED_TERRACOTTA] = RedGlazedTerracotta::class;
		self::$list[self::SILVER_GLAZED_TERRACOTTA] = SilverGlazedTerracotta::class;
		self::$list[self::WHITE_GLAZED_TERRACOTTA] = WhiteGlazedTerracotta::class;
		self::$list[self::YELLOW_GLAZED_TERRACOTTA] = YellowGlazedTerracotta::class;
*/		
		
		for ($i = 0; $i <= 15; $i++) {
			$item = Item::get(Block::CONCRETE, $i);
			$item->setCustomName($item->getName());
			Item::addCreativeItem($item);
			
			$item1 = Item::get(Block::CONCRETE_POWDER, $i);
			$item1->setCustomName($item1->getName());
			Item::addCreativeItem($item1);
		}
	}
}