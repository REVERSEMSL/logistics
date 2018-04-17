<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<script src="Public/jquery-3.3.1.js"></script>
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="nav"></div>
		<div class="sildeshow"></div>
	</body>
	<script type="text/javascript">
		$(".sildeshow").load("Apps/Home/View/slideshow.html");
		$(".nav").load("Apps/Home/View/nav.html");
	</script>
</html>