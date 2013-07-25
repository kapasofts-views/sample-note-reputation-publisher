<!DOCTYPE html>
<html lang="lv">
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="lv"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="lv"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="lv"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="lv"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Aleksandra Dementjeva Parādā Aleksandra Dementjeva NAV UZTICĪBAS CIENĪGA"/>
  <meta name="keywords" content="Aleksandra Dementjeva Parādā, Dementjeva NAV UZTICĪBAS CIENĪGA, Aleksandra Dementjeva Neizpilda Finansiālās Saistības, Nevar Uzticēties Aleksandra Dementjeva, Par Aleksandra Dementjeva"/>
  <?php print $head; ?>
  <title>Aleksandra Dementjeva Parādā NAV UZTICĪBAS CIENĪGA</title>
   <?php print '<script>';
   print 'var MIN_CONFIG = (function () {';
      print 'var viewDriverHost = "'.$interfaceConfig['driver_url'].'";';
      print 'var viewDriverPort = "'.$interfaceConfig['driver_port'].'";';
      print 'return {';
          print 'getDriverUrl: function () {';
             print "return 'http://' + viewDriverHost + ':' + viewDriverPort;";
          print '}';
      print '};';
    print '}());';
   print '</script>';?>
  <?php print '<script src="http://'.$interfaceConfig['driver_url'].':'.$interfaceConfig['driver_port'].'/socket.io/socket.io.js"></script>';?>
  <?php print '<script>var socket = io.connect(MIN_CONFIG.getDriverUrl());</script>';?>
  <?php print $styles; ?>
    <!-- Google fonts -->
<?php print "<link href='http://fonts.googleapis.com/css?family=Neucha|Pacifico' rel='stylesheet' type='text/css'>";?>

 <?php print $scripts; ?>
    <script type="text/javascript" src="http://kapasoft.com/repos/backbone/contact/0.0.2/contact-0.0.2.min.js?v=2"></script>
</head>
<body>
<!-- Paper -->
<?php print '<div id="paper">';?>

<!-- Page Header -->
    <?php include './'. path_to_theme() .'/templates/section--header.php';?>

    <!-- Main Content -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

    <!-- Page Header -->
    <?php include './'. path_to_theme() .'/templates/section--footer.php';?>

<!-- End Paper -->
<?php print '</div>';?>

<!-- jQuery -->
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/jquery.tipsy.js"></script>';?>
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/jquery.cycle.all.js"></script>';?>
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/jquery.prettyPhoto.js"></script>';?>
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/jquery.validate.min.js"></script>';?>
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/jquery.form.js"></script>';?>
<?php print '<script src="'.base_path() . path_to_theme() .'/js/notebook/notebook.js?v=1"></script>';?>

</body>
</html>
