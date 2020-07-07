<?php

declare(strict_types=1);

namespace pocketmine\item;

class NetheriteLeggings extends Armor {

	public function __construct(int $meta = 0) {
		parent::__construct(self::NETHERITE_LEGGINGS, $meta, "Netherite Leggings");
	}

	public function getDefensePoints() : int {
		return 6;
	}

	public function getMaxDurability() : int {
		return 555;
	}

}
