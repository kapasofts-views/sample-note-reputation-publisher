<!DOCTYPE html>
<html lang="en">
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
   <?php print '<script>';
   print 'var MIN_CONFIG = (function () {';
      print 'var viewDriverHost = "'.$interfaceConfig['driver_url'].'";';
      print 'var viewDriverPort = "'.$interfaceConfig['driver_port'].'";';
//implement the public part
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
    <!-- Google Fonts -->
<?php print "<link href='http://fonts.googleapis.com/css?family=Signika:bold' rel='stylesheet' type='text/css'/>";?>
<?php print "<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'/>"; ?>
<?php print "<link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'/>"; ?>

  <?php print $scripts; ?>
  <!-- HTML5 element support for IE6-8 -->
</head>
<body>
    <!-- Page Header -->
    <?php include './'. path_to_theme() .'/templates/section--header.php';?>

    <!-- Main Content -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

    <!-- Page Header -->
    <?php include './'. path_to_theme() .'/templates/section--footer.php';?>
</body>
</html>
