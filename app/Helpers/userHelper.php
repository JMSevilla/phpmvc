<?php
spl_autoload_register('route_models');
if(isset($_POST['regTrigger']) == 1){
  $callback = new UserModels();
  $callback->userDB($_POST['table']);
}

//Eto yung bagong update for php routing. One call damay na si models, controllers.
function route_models(){
  include('../Route/webapi.php');
  $callback = new route();
  $callback->apiroute_signup("config.php", "userController.php", "User.php");
}
