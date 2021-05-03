<?php
// spl_autoload_register('route_database');
class RegisterModels extends dbh {
  public function RegisterMode($table)
  {
    echo json_encode(array("test" => $table));
    //   include("../Queries/queries.php");
    // if($this->checkingModels($checker['sequel'])){
    //   $this->bind(":mytable", $table);
    //   $this->executable();
    //   if($this->tableCounting()){
    //     //exists table
    //     $data = [
    //       'fname' => $_POST['fname'],
    //       'lname' => $_POST['lname'],
    //       'nname' => $_POST['nname']
    //     ];
    //     $callback = new registerController();
    //     $callback->store($data);
    //   }
    //   else{
    //     //not exist.
    //     $callout = register_table_information();
    //     $this->created_table($callout);
    //     $data = [
    //       'fname' => $_POST['fname'],
    //       'lname' => $_POST['lname'],
    //       'nname' => $_POST['nname']
    //     ];
    //     $callback = new registerController();
    //     $callback->store($data);
    //   }
    // }
  }
}

// function route_database() {
//   include('../Route/webapi.php');
//   include('../Globals/global.php');
//   user_reg_route(roots(2), '/config.php');
//   user_reg_route(roots(3), '/userController.php');
// }
