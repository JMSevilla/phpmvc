<?php

interface WebRoute
{
  // Isang beses lang pwedeng gamitin si public function pag inside ni interface :)
  // You can create multiple public functions dito sa interface WebRoute
  //Once na registered na si public functions hindi na siya pwedeng ma transfer sa ibang call out
  public function apiroute_signup($root_config, $root_ctrl, $root_models);
}

//New backend routing code : Your welcome :D
class route implements WebRoute{
  public function apiroute_signup($root_config, $root_ctrl, $root_models){
    include_once "../config/" . $root_config;
    include_once "../Controllers/" . $root_ctrl;
    include_once "../Models/" . $root_models;
  }
}

//Check the userHelper.php -> Dito lang ako nag declare ng routing the rest connected files like User.php and userController Hindi na ko nag includes isang tawagan nalang :) 
//
