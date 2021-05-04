<?php
class LoginModels extends dbh{
  public function logs($table){
    include('../Queries/queries.php');
    if($this->checkingModels(modelcheck())){
      $this->bind(":mytable", $table);
      $this->executable();
      if($this->tableCounting()){
        $data = [
          "signusername" => $_POST['signusername'],
          "signpassword" => $_POST['signpassword']
        ];
        $callback = new logController();
        $callback->loginStore($data, $table);
      }
      else{
        $sql = users_log_table($table);
        $this->created_table($sql);
        $data = [
          "signusername" => $_POST['signusername'],
          "signpassword" => $_POST['signpassword']
        ];
        $callback = new logController();
        $callback->loginStore($data, $table);
      }
    }
  }
}
