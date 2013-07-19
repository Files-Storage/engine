<?php
class router{
     
     public function __construct($act,$options){
          
          $route = self::route($act,$options['type']);
          
          if(is_bool($route)){
               if($route == false && $act != '')
                    echo('VARIABLE route RETURN false');     
          }
          else 
               print 'CLASS ROUTER->CONSTRUCTOR->IF RETURN NONE bool';     
     }
     
     private function route($act,$type){
          if($type == TYPE_MOD){
               
               $file = DIR_MODULES.'/'. $act .'.php';
               
               if(is_file($file)){
                    
                    include($file);
                    
                    return true;    
                    
               }else return false;
               
               
          }else{
               return false;
          }       
     }
}
?>