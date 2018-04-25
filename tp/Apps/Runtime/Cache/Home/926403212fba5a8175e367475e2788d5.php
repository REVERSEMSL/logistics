<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
		<title></title>
		<script src="Public/jquery-3.3.1.js"></script>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/main.css">
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<div class="nav"></div>
		<div class="sildeshow"></div>

		<div class="sec aboutpg container">
			<div class="pg-nav col-sm-3">
				<div class="tit-ab">
					<p>在线下单</p>
				</div>
				<ul>
					<li><a href="online.html">在线下单</a></li>
				</ul>
				<div class="tit-ol">
					<p>在线下单</p>
				</div>
				<ul>
					<li><a href="online.html">立即下单</a></li>
					<li><a href="problem.html">常见问题</a></li>
				</ul>
				<div class="tit-co">
					<p>联系我们</p>
				</div>
				<ul>
					<li><a href="contact.html">在线留言</a></li>
				</ul>
			</div>
			<div class="col-sm-9 introduce">
				<section class="title">
					<h1>
						在线下单
						<span>ORDER ONLINE</span>
					</h1>
				</section>
				<div class="onlinepg con-pad">
					<form action="" method="post">
						
					
					<div>
						<p>发货人信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>发货人：</p>
								<input type="text" name="u_name" id="u_name" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>手机</p>
								<input type="text" name="u_tel" id="u_del" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>邮箱地址</p>
								<input type="text" name="u_mail" id="u_mail" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>发货地址</p>
								<input type="text" name="u_address" id="u_address" />
							</li>
						</ul>
					</div>
					<div>
						<p>收货人信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>收货人：</p>
								<input type="text" name="g_name" id="g_name" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>手机</p>
								<input type="text" name="g_tel" id="g_tel" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>邮箱地址</p>
								<input type="text" name="g_mail" id="g_mail" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>收货地址</p>
								<input type="text" name="g_address" id="g_address" />
							</li>
						</ul>
					</div>
					<div>
						<p>货物信息</p>
						<ul class="row">
							<li class="col-sm-6 col-xs-12">
								<p><i>*</i>货物名称：</p>
								<input type="text" name="goods" id="goods" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>报价申明（>100元）：</p>
								<input type="text" name="price" id="price" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>货物重量：</p>
								<input type="text" name="weight" id="weight" />
							</li>
							<li class="col-sm-6 col-xs-12">
								<p>货物体积：</p>
								<input type="text" name="size"  id="size" />
							</li>
							<li class="sm">
								<p>注：我们的工作人员会在接货时重新称重，此估算仅供参考。</p>
							</li>
						</ul>
					</div>
					
					<div> 
						<p>备注信息</p>
						<textarea name="textn" id="textn"></textarea>
					</div>
					</form>
					<p class="mes">注：我们的工作人员在收到发货请求会主动联系，请注意接听电话。</p>
					<input type="button" class="online_btn" value="立即发送" />
				</div>
			</div>
		</div>

		
	</body>
	<script type="text/javascript">
		$(".nav").load("Apps/Home/View/nav.html");
		$(".sildeshow").load("Apps/Home/View/slideshow.html");
		$(".online_btn").on('click', function() {
			var form1 = new FormData($('form')[0]);
			// form1.append('textn',$("#textn").val());
			console.log(form1);
			$.ajax({
				url: "<?php echo U("Home/Online/addolder");?>",
				type: 'post',
				dataType: 'json',
				data: form1,
				contentType:false, //禁止jq修改数据类型
				processData:false,
				async:true,
				success:function (data) {
					alert(data);
				}
			});
		});
	</script>
</html>