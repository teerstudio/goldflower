<?php
  ini_set('error_reporting', E_ALL);
  $host     = "localhost";
  $username = "goldflower";
  $password = "goldflower";
  $connect  = mysql_connect($host, $username, $password);
  mysql_query("SET NAMES UTF8");
  $db       = mysql_select_db("goldflower");