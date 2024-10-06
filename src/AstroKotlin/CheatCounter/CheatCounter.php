<?php

declare(strict_types=1);

namespace AstroKotlin\CheatCounter;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class CheatCounter extends PluginBase {
    
    use SingletonTrait;
    
    protected function onEnable(): void {
        $this::setInstance($this);
        
        $this->getServer()->getPluginManager()->registerEvents(new QueryEventListener(), $this);
        
        $info = "[CheatCounter] Enabled.";
        $this->getServer()->getLogger()->info($info);
    }
    
    public function getCount(): int {
        return $this->getConfig()->get("player-count") + count($this->getServer()->getOnlinePlayers());
    }
}
