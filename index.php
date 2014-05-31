<?php
  include('config.php');
?>
<!DOCTYPE html>
<html ng-app="bps">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="It's a good product">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Commentator Comment : GoldFlower :)</title>

    <?='<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>'?>
  </head>
  <body style="background-position:center center; background:fixed url(2014-Fifa-World-Cup-Brazil.jpg)">
    <div id="wrap">

      <div class="content11" style="margin-bottom:20px;">
        <div class="container">

          <div class="row">
            <div class="col-lg-9 col-md-9 main-content" style="width:1040px; margin:auto">
              <h3 class="mt20 page-header-div"><i class="icon-list-alt"></i> Commentator Comment : GoldFlower :)</h3>
              <!--<p>The list of commentators in THailand</p> -->


                <div ng-show="showRoster">
                  <p translate="HOME.ROSTER.DETAIL"></p>

                  <div>
                        <?php
                          $query = 'SELECT * FROM tb_profile';
                          $result = mysql_query($query) or die(mysql_error());
                          while($objResult = mysql_fetch_array($result)){
                           // echo '<tr>';
                           // echo  '<td><a href="detail.php?pid='.$objResult['id'].'">'.$objResult['fullname'].'</a></td>';
                            // echo  '<td>'.$objResult['detail'].'</td>';
                            //echo  '<td></td>';
                            //echo  '<td><img width="64" src="'.$objResult['image'].'"></td>';
                            //echo '</tr>';
							?>
							<div class="pList" style="background-image:url(<?=$objResult['image']?>)">
							
                            <div class="pName"><a href="detail.php?pid=<?=$objResult['id']?>" style="display:block"><?=$objResult['fullname']?></a></div>
                            </div>
							
							<?
                          }
                        ?>
                  </div>
                  <style>
.pList{
	border:2px solid #49dd0b; float:left; width:300px; height:350px; margin:18px;
	/* -webkit-box-shadow: 0 0 6px 1px #8be800;
	box-shadow: 0 0 6px 1px #8be800; */
	box-shadow:none;
	
	/* -webkit-border-radius: 4px;
	-moz-border-radius: 4px; */
	border-radius: 8px;
	background-repeat:no-repeat;
	background-position: center center;
	background-size: cover;
	 transition: all 0.3s ease;
}
.pList:hover{
	border:2px solid #308f07;
-webkit-box-shadow: 0 0 25px 1px #FAFF61;
box-shadow: 0 0 25px 1px #FAFF61;
	/* -webkit-border-radius: 4px;
	-moz-border-radius: 4px; */
	border-radius: 8px;
	background-repeat:no-repeat;
	background-position: center center;
	background-size: cover;
}


.pName{
	padding:10px;
	background:#CCC;
	color:#006;
	 font-size:20px; font-family:Tahoma, Geneva, sans-serif;
	 text-align:center;opacity:0.8; margin:2px;
	 margin-top:296px; 
	 -webkit-border-bottom-right-radius: 4px;
-webkit-border-bottom-left-radius: 4px;
-moz-border-radius-bottomright: 4px;
-moz-border-radius-bottomleft: 4px;
border-bottom-right-radius: 4px;
border-bottom-left-radius: 4px;
	
}


.pName a{
	color:#00F; text-decoration:none;
	
}
.pName a:hover{
	color:#06F;
	
}
.page-header-div{
	font-size:36px; color:#FFC; font-weight:bold;
	
}
				  </style>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
