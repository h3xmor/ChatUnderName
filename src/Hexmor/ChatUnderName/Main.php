<?php

declare(strict_types=1);

namespace Hexmor\ChatUnderName;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

	public function onEnable() : void{
		 $this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onChat(PlayerChatEvent $event) {
		$player = $event->getPlayer();
		$message = $ev->getMessage();
       		 $purechat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
		if(!is_null($purechat)){
		
			$p->setNameTag($nameTag->getNametag($player) . "\n " . mb_strimwidth($msg, 0, 30, "..."));
		}else{
			
   		       $p->setNameTag($player->getName() . "\n " . mb_strimwidth($msg, 0, 30, "..."));
		}
	}
}
