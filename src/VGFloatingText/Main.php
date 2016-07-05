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
        //text1
        $text[0] = "§l§eKeys";
        $text[1] = "§l§6Ender Chest";
        $text[2] = "§l§bSKY§cWars§r §r\n§eand§r §r\n§l§bS§cW§aTeam§r";
        $text[3] = "§l§bU§6H§cC§r §r\n§eand§r §r\n§l§bU§6H§cC§aT§r";
        $text[4] = "§l§fH§aG§r §r\n§eand§r §r\n§l§fH§aG§cTeam§r";
        $text[5] = "§l§eColor§9Match§r";
        $text[6] = "§2[§f+§2] §aVIP §f- §e70§crub§r §r\n§2[§f+§2] §2VIP+ §f- §e120§crub§r §r\n§2[§f+§2] §3Premium §f- §e250§crub§r §r\n§2[§f+§2] §bModerator §f- §e500§crub§r §r\n§2[§f+§2] §6Admin §f- §e850§crub§r §r\n§2[§f+§2] §cOP §f- §e1200§crub§r §r\n§2[§f+§2] §dKING §f- §e2000§crub§r";
        $text[7] = "§2[§f+§2] §eVK §f- §3vk.com/vigladios§r §r\n§2[§f+§2] §aCreators §f- §cLowNoise §aand  §9MrDoni98§r §r\n§2[§f+§2] §cLowNoise §f- §dvk.com/bogdanmakarchuk§r §r\n§2[§f+§2] §bMrDoni98 §f- §dvk.com/mrdoni98§r §r\n§2[§f+§2] §aAuto Donat §f- §dvigladios.trademc.org§r §r\n§2[§f+§2] §6Site §f- §dvigladios.ru§r";
        $particle[0] = new FloatingTextParticle(new Vector3(-560.5, 6, -118.5), "", $text[0]);
        $particle[1] = new FloatingTextParticle(new Vector3(-559.5, 6, -128.5), "", $text[1]);
        $particle[2] = new FloatingTextParticle(new Vector3(-548.5, 5, -100.5), "", $text[2]);
        $particle[3] = new FloatingTextParticle(new Vector3(-555.5, 5, -107.5), "", $text[3]);
        $particle[4] = new FloatingTextParticle(new Vector3(-541.5, 5, -107.5), "", $text[4]);
        $particle[5] = new FloatingTextParticle(new Vector3(-548.5, 5, -114.5), "", $text[5]);
        $particle[6] = new FloatingTextParticle(new Vector3(-538.5, 6, -117.5), "", $text[6]);
        $particle[7] = new FloatingTextParticle(new Vector3(-538.5, 6, -98.5), "", $text[7]);
        $level->addParticle($particle[0], [$player]);
	$level->addParticle($particle[1], [$player]);
        $level->addParticle($particle[2], [$player]);
	$level->addParticle($particle[3], [$player]);
	$level->addParticle($particle[4], [$player]);
	$level->addParticle($particle[5], [$player]);
	$level->addParticle($particle[6], [$player]);
	$level->addParticle($particle[7], [$player]);
    }
}
