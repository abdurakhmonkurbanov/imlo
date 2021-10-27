<?php
include('block/db.php');
include('block/fnc.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Imloviy tekshirish</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="cssjs/all.css">
  <!-- Bootstrap core CSS -->
  <link href="cssjs/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="cssjs/mdb.css" rel="stylesheet">
  <style>
  /* Required for full background image */

  html,
  body,
  header,
  .view {
    height: 100%;
  }
	  .yuk{
		  text-decoration: underline;
		  color: #ED0D10;

	  }
	  .bitta{
		  color: #000000;
	  }
	  .tugri{
			color: #000000;
	  }
	  .kup{
		  color: #0DE40B;
		  cursor: pointer;
	  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 1000px;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 650px;
    }
  }

  .top-nav-collapse {
    background-color: #3f51b5 !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
  }

  @media (max-width: 991px) {
    .navbar:not(.top-nav-collapse) {
      background: #3f51b5 !important;
    }
  }

  .rgba-gradient {
    background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%));
    background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
  }

  .card {
    background-color: rgba(126, 123, 215, 0.2);
  }

  .md-form label {
    color: #ffffff;
  }

  h6 {
    line-height: 1.7;
  }
  </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<body aria-busy="true">
  <!-- Main navigation -->
	<header>
  <?php
	include('block/top.php');
	?>
		<?php
	include('block/body.php');
	?>
	</header>		
  <!-- Main navigation -->
  <!--Main Layout-->

 <?php
	if (isset($_POST['txt'])){
	include('block/main.php');	
	}
	
	?>
	
	
  <!--Main Layout-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="cssjs/jquery-3.js"></script>
  <!-- Tooltips -->
  <script type="text/javascript" src="cssjs/popper.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="cssjs/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="cssjs/mdb.js"></script>
	<div class="hiddendiv common"></div>
  <script>
  new WOW().init();
  </script>


</body></html>