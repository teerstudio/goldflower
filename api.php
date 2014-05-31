<?php
  include('config.php');
  $action = null;
  if(isset($_GET['action'])){
    $action = $_GET['action'];
  }
  elseif(isset($_POST['action'])){
    $action = $_POST['action'];
  }

  $get = null;
  if(isset($_GET['get'])){
    $get = $_GET['get'];
  }
  elseif(isset($_POST['get'])){
    $get = $_POST['get'];
  }

  $response = array('data' => array());
  //  action=add
  if($action == 'add'){

  }
  //  action=show
  elseif($action == 'show'){
    if($get == 'list'){
      $query = 'SELECT * FROM tb_profile';
      $result = mysql_query($query) or die(mysql_error());
      $count = 0;
      while($objResult = mysql_fetch_array($result)){
        $response['data'][$count] = array(
          'id'       => $objResult['id'],
          'fullname' => $objResult['fullname'],
          'image'    => $objResult['image'],
          'detail'   => $objResult['detail']
        );
        $count++;
      }
    }
  }
  //  action=update
  elseif($action == 'update'){

  }
  //  action=delete
  elseif($action == 'delete'){

  }
  else{
    $response['data'] = 'API Working.';
  }

  header('Content-Type: application/json');
  echo"<meta http-equiv='Content-Type' content='text/html; charset=windows-874' />";
  echo json_encode($response);
?>