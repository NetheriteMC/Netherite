<?php

declare(strict_types=1);

namespace pocketmine\block;

use pocketmine\item\TieredTool;

class Netherite extends Solid {

	protected $id = self::NETHERITE_BLOCK;

	public function __construct(int $meta = 0) {
		$this->meta = $meta;
	}	

	public function getHardness() : float {
		return 50;
	}

	public function getName() : string {
		return "Netherite Block";
	}

	public function getToolType() : int {
		return BlockToolType::TYPE_PICKAXE;
	}

	public function getToolHarvestLevel() : int {
		return TieredTool::TIER_DIAMOND;
	}

}
