<?php
  include('config.php');
?>
<!DOCTYPE html>
<html ng-app="bps">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="It's a good product">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
    Suggestmob Application - Manage your suggestion cards and view the data with the report tools.
    </title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <?php
        $query = 'SELECT * FROM tb_profile WHERE id = '.$_GET['id'];
        $result = mysql_query($query) or die(mysql_error());
      ?>
      <div class="content11" style="margin-bottom:20px;">
        <div class="container">

          <div class="row">
            <div class="col-lg-9 col-md-9">
              <?php echo '<img src="'.$result['image'].'">'; ?>
            </div>
            <div class="col-lg-3 col-md-3">
              RATING...
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-3">Detail</div>
            <div class="col-lg-9 col-md-9"><?php echo $result['detail']; ?></div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
