<?php

class dbh {
  private $host = "localhost";
  private $username = "root";
  private $pwd = "";
  private $mydbname = "dbmvc";
  private $stmt;
  private $mapper;

  public function connect() {
    try {
      $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->mydbname;
      $this->mapper = new PDO($dsn, $this->username, $this->pwd);
      $this->mapper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $this->mapper;
    }
    catch (PDOException $e) {
      die("Could not connect" . $e->getMessage());
    }

  }
  public function queryable($sql){
    return $this->stmt = $this->connect()->query($sql);
  }
  public function checkingModels($sql) {
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function queryprepare($sql){
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function created_table($result){
    return $this->connect()->exec($result);
  }
  public function tableCounting(){
    return $this->stmt->rowCount() > 0;
  }
  public function getuserdata(){
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function executable(){
    return $this->stmt->execute();
  }

  public function encrypt($norm){
    return password_hash($norm, PASSWORD_DEFAULT);
  }
  public function bind($val, $param, $type = null){
    if(is_null($type)){
      switch(true){
        case $type == 1:
          $type = PDO::PARAM_INT;
        break;
        case $type == 2:
          $type = PDO::PARAM_BOOL;
        break;
        default:
        $type = PDO::PARAM_STR;
      }
    }
    return $this->stmt->bindParam($val, $param, $type);
  }
  //dynamic responses
  public function response(){
    return json_encode(array("statusCode" => 200));
  }
  //response for invalid password
  public function invalid_response(){
    return json_encode(array("statusCode" => 201));
  }
  //response for no user found
  public notFound_response(){
    return json_encode(array("statusCode" => 202));
  }
  //access session
  public access_session($uid, $fname, $lname, $istype){
     $_SESSION['access'] = true;
     $_SESSION['fname'] = $fname;
     $_SESSION['lname'] = $lname;
     $_SESSION['istype'] = $istype;
     $_SESSION['uid'] = $uid;
  }

  //decrypt password
  public function decrypt($norm, $hash){
    return password_verify($norm, $hash);
  }
  //for unit testing responses
  public function unitCodeTest(){
    return json_encode(array("TestCode1" => "OK"));
  }
  public function unitCodeTest1(){
    return json_encode(array("TestCode1" => "OK1"));
  }
}
