<?php
  include('config.php');
  $action = isset($_GET['action']) ? $_GET['action'] : isset($_POST['action']) ? $_POST['action'] : null;
  $response = array('data' => array());

  //  action=add
  if($action == 'add'){
    $kama

  }
  //  action=show
  elseif($action == 'show'){

  }
  //  action=update
  elseif($action == 'update'){

  }
  //  action=delete
  elseif($action == 'delete'){

  }
  else{
    $response['data'] = 'API Working.'
  }

  echo json_encode($response);
?>