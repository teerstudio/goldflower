<?php
  include('config.php');
  $action = isset($_GET['action']) ? $_GET['action'] : isset($_POST['action']) ? $_POST['action'] : null;
  $response = array('data' => array());
  if($action == 'add'){

  }
  elseif($action == 'show'){

  }
  elseif($action == 'update'){

  }
  elseif($action == 'delete'){

  }

  echo json_encode($response);
?>