<?php
spl_autoload_register('route_dbh');
class registerController extends dbh{
  public function store($data){
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if($this->queryprepare(insertion())){
        $this->bind(":fname", $data['fname']);
        $this->bind(":lname", $data['lname']);
        $this->bind(":nname", $data['nname']);
        if($this->executable())
        {
          echo json_encode(array("statusCode" => 200));
        }
      }
    }
  }
}

function route_dbh(){
  include("../Route/webapi.php");
  include_once $route['database'];
  include_once $route['Queries'];
}
