<?php
  include('config.php');
  $action = isset($_GET['action']) ? $_GET['action'] : isset($_POST['action']) ? $_POST['action'] : null;
  $get = isset($_GET['get']) ? $_GET['get'] : isset($_POST['get']) ? $_POST['get'] : null;
  $response = array('data' => array());

  //  action=add
  if($action == 'add'){

  }
  //  action=show
  elseif($action == 'show'){
    if($get == 'list'){
      $query = 'SELECT * FROM tb_profile';
      $result = mysql_query($query) or die('Connection Fail!!!');
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

  echo json_encode($response);
?>