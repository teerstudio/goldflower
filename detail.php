<?php
  include('config.php');
?>
<!DOCTYPE html>
<html>
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
  <?php
    if(isset($_POST['message'])){
      $postname = isset($_POST['postname']) ? $_POST['postname'] : 'guest';
      $insert_sql = 'INSERT INTO tb_comment (message, postname, date) VALUES ("'.$_POST['message'].'", "'.$postname.'", "'.date( 'Y-m-d H:i:s', time()).'")';
      mysql_query($insert_sql) or die(mysql_error());
    }
  ?>
    <div id="wrap">
      <?php
        $sql = 'SELECT * FROM tb_profile WHERE id = '.$_GET['pid'];
        $query = mysql_query($sql) or die(mysql_error());
        $result = mysql_fetch_array($query);
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

          <div class="row">
            <div class="col-lg-3 col-md-3">Comment</div>
            <div class="col-lg-9 col-md-9">
            <form action="detail.php" method="post">
              <textarea name="message" cols="100" rows="10"></textarea>
              <input type="submit" value="Add Comment" />
            </form>
            </div>
          </div>

          <div class="row">
            <?php
              $sql = 'SELECT * FROM tb_comment WHERE profile_id = '.$_GET['pid'];
              $query = mysql_query($sql) or die(mysql_error());
              while ($result = mysql_fetch_array($query)) {
                echo '<div class="col-lg-12 col-md-12">';
                echo '<p>'.$result['postname'] . ' ' . $result['date'] . '</p>';
                echo $result['message'];
                echo '</div>';
              }
            ?>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
