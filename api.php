<?php
  include('config.php');
  header('Content-Type: application/json');
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $get = isset($_GET['get']) ? $_GET['get'] : null;
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
          'fullname' => iconv("UTF-8", "TIS-620", $objResult['fullname']),
          'image'    => $objResult['image'],
          'detail'   => iconv("UTF-8", "TIS-620", $objResult['detail'])
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

  echo json_encode($response);
?>