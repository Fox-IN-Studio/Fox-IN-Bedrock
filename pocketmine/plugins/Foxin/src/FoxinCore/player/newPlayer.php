<?php

namespace FoxinCore\player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class newPlayer implements Listener {

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();

        if ($player->hasPlayedBefore() === false) {
            $player->sendMessage("§l§aWelcome to the server !");
        } else {
            return;
        }
    }
}