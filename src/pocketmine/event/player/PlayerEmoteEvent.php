<?php

declare(strict_types=1);

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;
use pocketmine\utils\UUID;

class PlayerEmoteEvent extends PlayerEvent implements Cancellable {

	/** @var UUID */
	protected $emoteId;

	public function __construct(Player $player, UUID $emoteId) {
		$this->player = $player;
		$this->emoteId = $emoteId;
	}

	public function getEmoteId() : UUID {
		return $this->emoteId;
	}

}
