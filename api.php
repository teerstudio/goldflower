<?php
  $action = isset($_GET['action']) ? $_GET['action'] : isset($_POST['action']) ? $_POST['action'];
  $response = array();
  if($action == 'add'){

  }
  elseif($action == 'show'){

  }
  elseif($action == 'update'){

  }
  elseif($action == 'delete'){

  }

  echo json_decode($response);
?>