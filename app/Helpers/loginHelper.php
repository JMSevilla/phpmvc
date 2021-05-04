<?php
spl_autoload_register('router_models');
if(isset($_POST['LogTrigger']) == 1){
  $callback = new LoginModels();
  $callback->logs($_POST['table']);
}

function router_models(){
  include('../Route/webapi.php');
  $callback = new route();
  $callback->apiroute_login("config.php", "loginController.php", "Login.php");
}
