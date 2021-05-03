<?php
spl_autoload_register('route_database');
class UserModels extends dbh{
  public function userDB($table){
    include('../Queries/queries.php');
    if($this->checkingModels($checker['sequel'])){
      $this->bind(":mytable", $table);
      $this->executable();
      if($this->tableCounting()){
        //exists
        $data = [
          'regfname' => $_POST['regfname'],
          'reglname' => $_POST['reglname'],
          'regemail' => $_POST['regemail'],
          'regusername' => $_POST['regusername'],
          'regpassword' => $_POST['regpassword'],
        ];
        $callback = new userController();
        $callback->userstore($data);
      }
      else{
        //not exists
        $sql = userQuery($table);
        $this->created_table($sql);
        $data = [
          'regfname' => $_POST['regfname'],
          'reglname' => $_POST['reglname'],
          'regemail' => $_POST['regemail'],
          'regusername' => $_POST['regusername'],
          'regpassword' => $_POST['regpassword'],
        ];
        $callback = new userController();
        $callback->userstore($data);
      }
    }
  }
}

function route_database(){
  include('../Route/webapi.php');
  include_once $route['database'];
  include_once $user_route['controller'];
}