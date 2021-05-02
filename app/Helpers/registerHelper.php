<?php
spl_autoload_register('route_models');
if(isset($_POST['rTrigger']) == 1){
  $table = $_POST['table'];
 $callback = new RegisterModels();
 $callback->RegisterMode($table);
}

function route_models(){
  include("../Route/webapi.php");
  include_once $route['models'];
}
