<?php

namespace FoxinCore;

use FoxinCore\listeners\XPBlockBreakListener;
use FoxinCore\player\newPlayer;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("FoxinCore Enabled");
        $this->getServer()->getPluginManager()->registerEvents(new XPBlockBreakListener($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new newPlayer($this), $this);
    }

    public function onDisable(): void {
        $this->getLogger()->info("FoxinCore Disabled");
    }
}