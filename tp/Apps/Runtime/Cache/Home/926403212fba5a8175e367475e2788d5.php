<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
		<title></title>
		<script src="Public/jquery-3.3.1.js"></script>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/list.css">
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="nav"></div>
		<div class="main">
			<div class="container">
				<div class="about_m_l col-sm-3">
					<div class="tit-ab">
					<p>在线下单</p>
					<ul>
						<li><a href="">在线下单</a></li>
					</ul>
					</div>
					<div class="tit-ol">
					<p>在线下单</p>
					<ul>
						<li><a href="">立即下单</a></li>
						<li><a href="">常见问题</a></li>
					</ul>
					</div>
					<div class="tit-co">
					<p>联系我们</p>
					<ul>
						<li><a href="">在线留言</a></li>
					</ul>
					</div>
				</div>

				<div class="about_m_r col-sm-9">
					<section class="title">
						<h1>在线下单<span>ORDER ONLINE</span></h1>
					</section>
					<hr>
					<div class="onlinepg con-pad">
					<div>
						<p>发货人信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>发货人：</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>手机</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>固定电话</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>发货地址</p>
								<input type="text">
							</li>
						</ul>
					</div>
					<div>
						<p>收货人信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>收货人：</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>手机</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>固定电话</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>发货地址</p>
								<input type="text">
							</li>
						</ul>
					</div>
					<div>
						<p>货物信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>货物名称：</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>报价申明（&gt;100元）：</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>货物重量：</p>
								<input type="text">
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>货物体积：</p>
								<input type="text">
							</li>
							<li class="sm">
								<p>注：我们的工作人员会在接货时重新称重，此估算仅供参考。</p>
							</li>
						</ul>
					</div>
					<div> 
						<p>备注信息</p>
						<textarea></textarea>
					</div>
					<p class="mes">注：我们的工作人员在收到发货请求会主动联系，请注意接听电话。</p>
					<input type="button" value="立即发送">
				</div>
				</div>
			</div>
		</div>
		
	</body>
	<script type="text/javascript">
		$(".nav").load("Apps/Home/View/nav.html");
	</script>
</html>