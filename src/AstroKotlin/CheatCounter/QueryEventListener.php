<?php

declare(strict_types=1);

namespace AstroKotlin\CheatCounter;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent; 

class QueryEventListener implements Listener {
    
    public function queryRegenerate(QueryRegenerateEvent $event): void {
        $event->getQueryInfo()->setPlayerCount(CheatCounter::getInstance()->getCount());
    }
}
