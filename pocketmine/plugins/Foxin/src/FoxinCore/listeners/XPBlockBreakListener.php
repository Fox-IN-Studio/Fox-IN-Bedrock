<?php

namespace FoxinCore\listeners;

use pocketmine\block\BlockTypeIds;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\world\particle\FloatingTextParticle;

class XPBlockBreakListener implements Listener {

    public function onBlockBreak(BlockBreakEvent $event): void {
        $block = $event->getBlock();
        $player = $event->getPlayer();

        if ($block->getTypeId() === BlockTypeIds::STONE) { // Stone ID
            printf("Stone block broken by %s\n", $player->getName());
            $player->sendTip("§l§a+1 XP");
        }
    }
}
