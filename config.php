<?php
  ini_set('error_reporting', E_ALL);
  $host     = "localhost";
  $username = "goldflower";
  $password = "goldflower";
  $connect  = mysql_connect($host, $username, $password);
  $db       = mysql_select_db("goldflower");
  mysql_query("SET NAMES TIS620");
  // mysql_set_charset('utf8', $connect);