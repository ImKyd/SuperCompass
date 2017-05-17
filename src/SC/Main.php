ů<?php

namespace SC;

class Main extends PluginBase implements Listener{
  /** var Compass $compass**/
  public $compass;
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function getCompass(){
  }
  
  public function onMove(PlayerMoveEvent $e){ // Direction is changed only if move.
    $p = $e->getPlayer();
    $b = $e->getBlock();
    $direction = $p->getDirection();
    $x = $p->x;
    $y = $p->y;
    $z = $p->y
    if($b->getId() == 345){
      $p->sendTip("§eDirection §f$direction §7| §ePosition §f$x $y $z §7| §eSide:" );
    }
    
    public function getSide(Player $p){
      switch($p->getDirection()){
          case 0;
          return "Down";
      }
    }
}
