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
  public function executable(){
    return $this->stmt->execute();
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
}
