<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn" lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">	
	<title>Popular Supernova Program - Powered by 星明天文台</title>

	<!-- jquery -->
	<script src="/psp/Public/js/jquery-1.11.2.min.js"></script>
	<!-- bootstrap -->
	<script src="/psp/Public/js/bootstrap.min.js"></script>	
	<!-- jquery.fullPage.min.js -->
	<script src="/psp/Public/js/jquery.fullPage.min.js"></script>
	<!-- jquery.slimscroll.min.js-->
	<script src="/psp/Public/js/jquery.slimscroll.min.js"></script>
	<!-- jquery.easing.min.js-->
	<script src="/psp/Public/js/jquery.easing.min.js"></script>
	<!-- flat-ui.min.js -->
	<script src="/psp/Public/js/flat-ui.min.js"></script>
	
	<script src="/psp/Public/js/application.js"></script>
	<script src="/psp/Public/js/index.js?v=7"></script>
	
	
	<!-- public css -->
	<link rel="stylesheet" type="text/css" href="/psp/Public/css/jquery.fullPage.css"/>
	<link rel="stylesheet" type="text/css" href="/psp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/psp/Public/css/csshake.min.css">
	<link rel="stylesheet" type="text/css" href="/psp/Public/css/flat-ui.css?v=107">
	
<!-- 	<link rel="stylesheet" type="text/css" href="/psp/Public/css/bootstrap-theme.min.css"> -->
	
	<link rel="shortcut icon" href="/psp/Public/favicon.ico">
	
	<!-- css -->
	<style>
	@font-face {
		font-family: 'SentyTEA';  /*给自定义字体命名*/
		src: url('/psp/Public/fonts/SentyTEA-Basic.ttf');
	}

	@font-face {
		font-family: 'SentyBrush';  /*给自定义字体命名*/
		src: url('/psp/Public/fonts/SentyBrush-lowercase.otf');
	}
	
	.background-pink{
	/* #DDFBF8 #FACEFC #C1C5FB*/
    background: -webkit-linear-gradient(left top, #000 , #FACEFC); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(bottom right, #000 , #FACEFC); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(bottom right, #000 , #FACEFC); /* Firefox 3.6 - 15 */
    background: linear-gradient(to bottom right, #000 , #FACEFC); /* 标准的语法（必须放在最后） */
	}

	.background-green{
	/* #DDFBF8 #FACEFC #C1C5FB*/
    background: -webkit-linear-gradient(left top, #000 , #DDFBF8); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(bottom right, #000 , #DDFBF8); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(bottom right, #000 , #DDFBF8); /* Firefox 3.6 - 15 */
    background: linear-gradient(to bottom right, #000 , #DDFBF8); /* 标准的语法（必须放在最后） */
	}
	
	#menu { 
		font-family: 'SentyTEA';
		margin: 0 auto; 
		padding: 0; 
		position: fixed; 
		left:10%; 
		top: 0px; 
		list-style-type: none; 
		z-index: 70;
	}
	#menu li { 
		float: left; 
		margin:  0 10px 0 0; 
		font-size: 25px;
	}
	#menu a { 
		float: left; 
		padding: 10px 20px; 
		background-color: rgba(34,34,34,0); 
		color: #FAEBCC; 
		text-decoration: none; 
		border: 3px solid transparent;
	}
	#menu .active a {
		color: #FFFFFF;
		background-color: rgba(34,34,34,0);
		border-bottom: 3px solid transparent;
	}

	.section { color: #FAEBCC; font-family: 'SentyTEA';}
	
	.title { margin: 0; padding: 0; position: fixed; left: 10%; bottem: 1em; color:#FAEBCC; text-align:center;}
	
	.center {text-align:center;}
	
	.arrow-down {
		width: 0;
		height: 0;
		border-left: 20px solid transparent;
		border-right: 20px solid transparent;  
		border-top: 20px solid ;
		font-size: 0;
		line-height: 0;  
    }
	
	/* clock */
	.clock{ margin:auto; color: #222222; font-family:"Lato", sans-serif;}
	.clock div{
		background:#fce8d3; 
		border-radius:0px;
		width:30%;
		height:100%;
		line-height: 100%;
		text-align:center;
		font-size:45px;
		margin: -5px 0px -5px 0;
	}
	
	footer {
		width: 100%;
		height: 20px;
		clear: both;
	}
	</style>
	
	<!-- js -->

</head>
	
<body>

<form id="frm_loginSession" action="<?php echo U('Home/Common/loginSession');?>"></form>



<div id="psp_main">
<div class="section background-pink">
	
	<div class="container col-xs-12">

	<div class="col-xs-12 col-sm-push-12 col-md-12 col-md-push-0" >
		<div class="col-sm-6" >
			<ul id="menu">
				<li data-menuanchor="main" class="active shake shake-little"><a href="#main">首页</a></li>
				<li data-menuanchor="guide" class="shake shake-little"><a href="#guide">新手指导</a></li>
				<li data-menuanchor="qa" class="shake shake-little"><a href="#qa">使用帮助</a></li>
				<li data-menuanchor="about" class="shake shake-little"><a href="#about">关于我们</a></li>
			</ul>
		</div>
	</div>


	
		
	<div class="col-sm-4"><!--left-->

<!-- 	
		<div class="col-sm-6">
			<div class="panel panel-warning" class="hideshow"> 
				<div class="panel-heading">
					<h2 class="panel-title">欢迎来到星明天文台PSP - 设备状态：正常</h2>
				</div>
				<div class="panel-body">
					<ul>
						<li><a href="#">4月20日系统临时维护</a></li>
						<li><a href="#">3月20日系统维护通告</a></li>
						<li><a href="#">1月20日系统维护通告</a></li>
					</ul>
					<div class="col-sm-9 center"><a href="#">查看历史公告</a></div>
			   </div>	
			</div>
		</div>		
	 -->

	
		<div class="col-lg-8 col-lg-push-4"> <!--The Title and Logo-->
			<div class="panel panel-warning" style="text-align:right; border-color: rgba(0,0,0,0);"> 
				<div class="panel-body">
					<div class="shake shake-slow" id="btn_psp" style="line-height:180%; color:#FCF6EB; font-family: 'SentyBrush';">
						<div><span style="font-size:70px;">P</span><span style="font-size:40px;">opular</span></div>
						<div><span style="font-size:70px;">S</span><span style="font-size: 48px;">upernova</span></div>
						<div><span style="font-size:40px;">P</span><span style="font-size:40px;">rogram</span></div>
						<div style="line-height:180%; color:#FCF6EB; font-size: 35px; font-weight:bold; font-family: 'SentyTEA';">星明天文台</div>
					</div>
				</div>
			</div>
		</div>
		
	
		<div class="clearfix"></div> <!--清除浮动-->
		
<!--
		<div class="col-sm-6 col-sm-push-6 shake shake-slow">
			<div class="panel panel-warning" class="hideshow">
				<div class="panel-heading">
					<div class="panel-title">最近确认目标</div>
				</div>
				<div class="panel-body">
				<ol>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ol>
				<div class="col-xs-6 center"><a href="#">查看所有</a></div>
				<div class="col-xs-6 center"><a href="#">排行榜</a></div>
				</div>
			</div>
		</div>		
-->		
	</div><!-- end of left-->

	<div class="col-lg-8"> <!--right-->
	
		<!-- The Timer
		<div class="col-sm-12"> 
			<div class="panel panel-warning">
				<div class="panel-body center">
					<div class='clock'>
					  <div class='h shake shake-slow'></div>
					  <div class='m shake shake-slow'></div>
					  <div class='s shake shake-slow'></div>
					</div>
				</div>
			</div>
		</div>
		-->		
		
		<div class="col-lg-4 col-lg-push-1">
			<div class="panel panel-warning" id="panel_login" style="border-color: rgba(0,0,0,0);">

				<div class="panel-body">
				
				<form id="frm_login" class="form-horizontal" role="form" action="<?php echo U('Home/User/login');?>">
				
					<div class="form-group has-warning">
						<div class="col-sm-12">
							<input id="login_email" class="form-control" type="email" placeholder="请输入email"  style="font-family: 'SentyTEA';"/>
						</div>
					</div>
					
					<div class="form-group has-warning">
						<div class="col-sm-12">
							<input id="login_pwd" class="form-control" type="password" placeholder="请输入密码" style="font-family: 'SentyTEA';" />
						</div>
					</div>				
					
					<div class="form-group">
						<div class="col-sm-12">
							<input class="btn btn-warning btn-sm col-md-5" type="button" value="登陆" id="btn_login"/>
							<input class="btn btn-warning btn-sm col-md-5 col-md-offset-2" type="button" value="注册" id="btn_reg"/>
						</div>
					</div>
					<div class="col-md-12"><a href="#">忘记密码请点我</a></div>
				</form>
			   </div><!--end of panel-body -->
			</div>
		</div><!--end of login div-->
		
	
	</div><!-- end of right-->

	
	</div><!--end of container-->
	
	<div style="margin: 0 50%; position: fixed; bottom: 10px; text-align:center; width: 50px;">
		<a href="#guide"><span class="arrow-down shake shake-vertical"></span></a>
	</div>
	<div class="footer"></div>
</div><!--end of section-->


<div class="section center background-green">
	
		<div class="slide">
			<h2>Step 1/3</h2>
			<h1>开始搜索超新星的旅程——</h1>
		</div>
		
		<div class="slide">
			<h2>Step 2/3</h2>
			<h1>开始搜索超新星的旅程——</h1>		
		</div>
		
</div>
	
<div class="section center">
	<div class="container col-xs-12">
		<div class="col-xs-12 col-xs-push-12 col-md-12 col-md-push-12 col-lg-push-0 header">
		
			<div class="col-sm-7 shake shake-little center">
				<h4>星明 - Popular Supernova Program</h4>
			</div>
			
		</div>
			<h1>Questions and Answers</h1>
	</div>
</div>
	
<div class="section center">
	<div class="container col-xs-12">
		<div class="col-xs-12 col-xs-push-12 col-md-12 col-md-push-12 col-lg-push-0 header">
		
			<div class="col-md-7 shake shake-little center">
				<h4>星明 - Popular Supernova Program</h4>
			</div>
			
		</div>
			<h1>关于我们</h1>
	</div>
</div>

</div>
</body>
</html>