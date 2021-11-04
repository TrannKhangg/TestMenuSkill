<?php
namespace MenuSkillVIP;

use pocketmine\Server;

use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
  public function onEnable(){
        $this->getLogger()->info("Menu Chức Năng Đặc Biệt VIP1 đã bật !");
  }

  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
    switch($cmd->getName()){
      case "smenui":
      if($sender instanceof Player){
        $this->menuskillvip($sender);
           } else {
                 $sender->sendMessage("Yêu cầu : Hãy nhập lệnh này trong Game!");
      }
    }
    return true;
  }
            public function menuskillvip($player){
              $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $player, int $data = null){
                if($data === null){
                  return true;
                } 
                 switch($data){
                  case 0:
                     $this->getServer()->dispatchCommand($player, "cmd1");
                     break;
                                                                           
                     case 1:
                     $this->getServer()->dispatchCommand($player, "cmd2");
                     break;
                                                                                                             
                     $this->getServer()->dispatchCommand($player, "cmd3");
                     break;

                     case 3:
                     $this->getServer()->dispatchCommand($player, "cmd4");
                     break;
                                                                                                                                                                         
                     case 4:
                     $this->getServer()->dispatchCommand($player, "cmd5");
                     break;
                                                                                                                                                                                                           
                     case 5:
                     $this->getServer()->dispatchCommand($player, "cmd6");
                     break;
                       }
                    });
                        $form->setTitle("§l§dTest UI");
                        $form->addToggle("§cTest1");
                        $form->addToggle("§cTest2");
                        $form->addToggle("§cTest3");
                        $form->addToggle("§cTest4");
                        $form->addToggle("§cTest5");
                        $form->addToggle("§cTest6");   
                        $form->sendToPlayer($player);
                        return $form;
            }
}
