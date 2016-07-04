<?php

namespace VGFloatingText;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent
use pocketmine\Server;
use pocketmine\utils\TextFormat as F;
use pocketmine\math\Vector3;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

 public function onEnable(){
         $this->getLogger()->info(F::GREEN. "Я включился");
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
         $text[2] = "'§l§bSKY§cWars§r' .$br. '§eand§r' .$br. '§l§bS§cW§aTeam§r'";
         $text[3] = "'§l§bU§6H§cC§r' .$br. '§eand§r' .$br. '§l§bU§6H§cC§aT§r'";
         $text[4] = "'§l§fH§aG§r' .$br. '§eand§r' .$br. '§l§fH§aG§cTeam§r'";
         $text[5] = "§l§eColor§9Match§r";
         $text[6] = "'§2[§f+§2] §aVIP §f- §e70§crub§r' .$br. '§2[§f+§2] §2VIP+ §f- §e120§crub§r' .$br. '§2[§f+§2] §3Premium §f- §e250§crub§r' .$br. '§2[§f+§2] §bModerator §f- §e500§crub§r' .$br. '§2[§f+§2] §6Admin §f- §e850§crub§r' .$br. '§2[§f+§2] §cOP §f- §e1200§crub§r' .$br. '§2[§f+§2] §dKING §f- §e2000§crub§r'";
         $text[7] = "'§2[§f+§2] §eVK §f- §3vk.com/vigladios§r' .$br. '§2[§f+§2] §aCreators §f- §cLowNoise §aand  §9MrDoni98§r' .$br. '§2[§f+§2] §cLowNoise §f- §dvk.com/bogdanmakarchuk§r' .$br. '§2[§f+§2] §bMrDoni98 §f- §dvk.com/mrdoni98§r' .$br. '§2[§f+§2] §aAuto Donat §f- §dvigladios.trademc.org§r' .$br. '§2[§f+§2] §6Site §f- §dvigladios.ru§r'";
         $particle[0] = new FloatingTextParticle(new Vector3(-561.5, 6. -119.5), "", $text[0]);
         $particle[1] = new FloatingTextParticle(new Vector3(-560.5, 6, -129.5), "", $text[1]);
         $particle[2] = new FloatingTextParticle(new Vector3(-549.5, 6, -100.5), "", $text[2]);
         $particle[3] = new FloatingTextParticle(new Vector3(-557.5, 6. -108.5), "", $text[3]);
         $particle[4] = new FloatingTextParticle(new Vector3(-541.5, 6. -108.5), "", $text[4]);
         $particle[5] = new FloatingTextParticle(new Vector3(-549.5, 6. -116.5), "", $text[5]);
         $particle[6] = new FloatingTextParticle(new Vector3(-539.5, 7. -118.5), "", $text[6]);
         $particle[7] = new FloatingTextParticle(new Vector3(-539.5, 7. -98.5), "", $text[7]);
         $level->addParticle($particle, [$player]);
  }
}
 
 
 
