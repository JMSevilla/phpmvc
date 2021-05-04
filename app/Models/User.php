<?php

class UserModels extends dbh{
  public function userDB($table){
    include('../Queries/queries.php');
    if($this->checkingModels(modelcheck())){
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
