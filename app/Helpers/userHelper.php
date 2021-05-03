<?php
spl_autoload_register('route_models');
if(isset($_POST['regTrigger']) == 1){
  $callback = new UserModels();
  $callback->userDB($_POST['table']);
}

function route_models(){
  include('../Route/webapi.php');
  include_once $user_route['models'];
}
