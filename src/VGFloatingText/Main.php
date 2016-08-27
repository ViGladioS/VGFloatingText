<?php

namespace VGFloatingText;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\utils\TextFormat as F;
use pocketmine\math\Vector3;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getLogger()->info(F::GREEN. "Я включился");
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
 
    public function Particle(PlayerJoinEvent $e){
        $this->spawnParticle($e->getPlayer());
    }
 
    public function spawnParticle($player){
        $level = $this->getServer()->getDefaultLevel();
        $br = F::RESET. "\n";
        //text
        $text[0] = "§2[§f+§2] §aVIP §f- §e70§crub§r §r\n§2[§f+§2] §2VIP+ §f- §e120§crub§r §r\n§2[§f+§2] §3Premium §f- §e250§crub§r §r\n§2[§f+§2] §bModerator §f- §e500§crub§r §r\n§2[§f+§2] §6Admin §f- §e850§crub§r §r\n§2[§f+§2] §cOP §f- §e1200§crub§r §r\n§2[§f+§2] §dKING §f- §e2000§crub§r";
        $text[1] = "§2[§f+§2] §eVK §f- §3vk.com/vigladios§r §r\n§2[§f+§2] §aCreators §f- §cLowNoise §aand  §9MrDoni98§r §r\n§2[§f+§2] §cLowNoise §f- §dvk.com/bogdanmakarchuk§r §r\n§2[§f+§2] §bMrDoni98 §f- §dvk.com/mrdoni98§r §r\n§2[§f+§2] §aAuto Donat §f- §dvigladios.trademc.org§r §r\n§2[§f+§2] §6Site §f- §dvigladios.ru§r";
        $particle[0] = new FloatingTextParticle(new Vector3(116.5, 43, -121.5), "", $text[0]);
        $particle[1] = new FloatingTextParticle(new Vector3(-559.5, 6, -128.5), "", $text[1]);
        $level->addParticle($particle[0], [$player]);
	$level->addParticle($particle[1], [$player]);
    }
}
