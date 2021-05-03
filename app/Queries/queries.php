<?php

$checker = [
  'sequel' => 'show tables like :mytable'
];

function register_table_information(){
  $sql = "create table if not exists `tbregister`(id int auto_increment primary key,
  firstname varchar(100),
  lastname varchar(100),
  nickname varchar(100),
  createdAt datetime default current_timestamp)";
  return $sql;
}

function insertion(){
  $sequel = "insert into `tbregister` values(default, :fname, :lname, :nname, current_timestamp)";
  return $sequel;
}

function userQuery($table){
  $sql = "create table if not exists " . $table . "(id int auto_increment primary key,
  firstname varchar(100),
  lastname varchar(100),
  username varchar(100),
  email varchar(100),
  password varchar(255),
  istype char(1),
  isactive char(1),
  createdAt datetime default current_timestamp)";
  return $sql;
}

function userController_Admin_Query(){
  $sequel = "insert into users values(default, :fname, :lname, :uname, :email, :pass, 1, 1, current_timestamp)";
  return $sequel;
}
function userController_users_Query(){
  $sequel = "insert into users values(default, :fname, :lname, :uname, :email, :pass, 0, 0, current_timestamp)";
  return $sequel;
}
function checkisType(){
  $sequel = "select istype from users where istype=1";
  return $sequel;
}
