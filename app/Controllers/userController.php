<?php
spl_autoload_register('route_db');
class userController extends dbh {
  public function userstore($data){
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if($this->queryable(checkisType())){
        if($this->tableCounting()){
          //exists
          if($this->queryprepare(userController_users_Query())){
            $this->bind(":fname", $data['regfname']);
            $this->bind(":lname", $data['reglname']);
            $this->bind(":uname", $data['regusername']);
            $this->bind(":email", $data['regemail']);
            $this->bind(":pass", $this->encrypt($data['regpassword']));
            if($this->executable()){
              $this->response();
            }
          }
        }
        else{
          //not exist
          if($this->queryprepare(userController_Admin_Query())){
            $this->bind(":fname", $data['regfname']);
            $this->bind(":lname", $data['reglname']);
            $this->bind(":uname", $data['regusername']);
            $this->bind(":email", $data['regemail']);
            $this->bind(":pass", $this->encrypt($data['regpassword']));
            if($this->executable()){
              echo $this->response();
            }
          }
        }
      }
    }
  }
}
function route_db(){
  include('../Route/webapi.php');
  include_once $route['database'];
}
