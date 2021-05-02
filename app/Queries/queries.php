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
