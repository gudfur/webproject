<?php

$db=new mysqli('localhost','observer','password','mysql'); //db host, db id, db pw, db name;

if($db->connect_error){
    die('db connection error\n');
}

$db->set_charset('utf8');
?>