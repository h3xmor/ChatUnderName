<?php

declare(strict_types=1);

namespace Hexmor\ChatUnderName;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

	public function onEnable() : void{
		 $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("Chat Under Name Active ! By Hexmor !");
        $this->getLogger()->info("Discord : hexmor#3032");
	}

	public function onChat(PlayerChatEvent $ev) {
	$p = $ev->getPlayer();
	$msg = $ev->getMessage();
        $nameTag = $this->getServer()->getPluginManager()->getPlugin("PureChat");
	if(!is_null($nameTag)){
        $nameTag->getNametag($p);
		$p->setNameTag($nameTag . "\n " . mb_strimwidth($msg, 0, 30, "...") . "\n");
	}else{
	$current = $p->getNameTag();
        $p->setNameTag($p->getName() . "\n " . mb_strimwidth($msg, 0, 30, "...") . "\n");
	}
}
	public function onDisable() : void{
		$this->getLogger()->info("Goodbye .");
	}
}
