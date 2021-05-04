<?php

class logController extends dbh {
  public function loginStore($data, $table){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if ($this->queryprepare("select * from users where username=:uname")) {
        $this->bind(":uname", $data['signusername']);
        $this->executable();
        if($this->tableCounting()){
          if($row = $this->getuserdata()){
          $uid = $row['id'];
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          $istype = $row['istype'];
            if($this->decrypt($data['signpassword'], $row['password'])){
              if($istype == "0"){
                session_start();
                $this->access_session($uid, $fname, $lname, $istype);
                echo $this->response();
              }
            }
            else {
              echo $this->invalid_response();
            }
          }
        }
        else {
          echo $this->notFound_response();
        }
      }
    }
  }
}
