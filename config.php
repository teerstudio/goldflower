<?php
  ini_set('error_reporting', E_ALL);
  $host     = "128.199.230.16";
  $username = "goldflower";
  $password = "goldflower";
  $connect  = mysql_connect($host,$username,$password);
  $db       = mysql_select_db("goldflower");