<?php
session_start();
?>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			LOGIN
		</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="auto_bg.js" ></script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
		<style>
			
			
			/* 用户及密码输入框的样式  */
			.inputtext{
				font:"alexa-std";
				font-size: 30px;
				width: 200px;
				height: 40px;
			}
			
			
			/*form表单的样式*/
			#bg_form{
				background: url(./img/white.jpg) ;
				background-size: 550px 350px;
				opacity: 0.9;
				font-size: 30px;
				width: 550px;
				height: 350px;
				position: absolute;
				left: 550px;
				top: 150px;
				display: none;
			}
			
			/*submit按键的样式*/
			#sub1,#sub2{
				width: 130px ;
				height: 40px; 
				font-size: 20px;
			}
			
			#buttom_style{
				background: url(./img/eye.jpg);
				background-size: 40px 30px;
				width: 40px;
				height: 30px;
				margin-right: 100px;
			}
			
			.log_style{
				left: 80px;
				position: relative;
			}
			
			#user,#invis_pswd,#vis_pswd{
				width: 300px;
				height: 40px;
				font-size: 25px;
			}
			
			.auto_img,#auto_div{
				width: 100%;
				height: auto;
			}
			
			body {
					width:100%;
					height:100%;
					font-family: "alex-brush";
					background: #060e1b;
					overflow: hidden;
				}
		
		</style>
		<script>
			//当输入错误时让已经输入的信息复原回去，否则提交完后输入的信息就没了
			function fill_input(content,id)
			{
				document.getElementById(id).value=content;
			}
			
		    //隐藏text block，显示password block
			function showPsw(invisible,visible){
				var val=invisible.value;
			 	invisible.style.display = "none";   //将不现实密码的模块隐藏
			 	visible.value = val;      //赋值
			 	invisible.value='';		 
			 	visible.style.display = "";   //显示可见密码的模块
			}
		    //隐藏password，显示text  
		    function hidePsw(invisible,visible){ 
		    	var val=visible.value;
			    visible.style.display = "none";  
			    invisible.value = val; 
			    visible.value='';
				invisible.style.display = "";
			}
			
			function show_and_hide(){
				var invisible=document.getElementById('invis_pswd');//password block
				var visible=document.getElementById('vis_pswd');//text block
				if (invisible.value!=''){   //如果目前密码不可看的话,点击隐藏
					showPsw(invisible,visible);
				}
				else{
					hidePsw(invisible,visible);
				}
			}
			
			function show_login()
			{
				$("#bg_form").fadeIn(1000);
			}
			
		</script>
	</head>
	<body>
		<div class="htmleaf-container">
			<header class="htmleaf-header" style="padding-top: 0">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
								 	<span class="sr-only">Toggle navigation</span>
								 	<span class="icon-bar"></span>
								 	<span class="icon-bar"></span>
								 	<span class="icon-bar"></span></button>
								 	<a class="navbar-brand" href='#' onclick="show_login()">Login</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li >
										 <a href="inf_register.php">注册</a>
									</li>
									<li>
										 <a href="inf_retrieve_psw.php">忘记密码</a>
									</li>
								</ul>
							</div>
						</nav>
						
						<div class="carousel-fade carousel slide" id="carousel-497242" style="width: 100%; height: auto;">
							<ol class="carousel-indicators">
								<li data-slide-to="0" data-target="#carousel-497242">
								</li>
								<li data-slide-to="1" data-target="#carousel-497242">
								</li>
								<li data-slide-to="2" data-target="#carousel-497242" class="active">
								</li>
							</ol>
							<div class="carousel-inner" id="auto_div">
								<div class="item">
									<img alt="" src="automation_img/timg5.jpg" class="img-circle" style="width: 100%;height: auto;"/>  
								</div>
								<div class="item">
									<img alt="" src="automation_img/timg2.jpg" class="img-circle" style="width: 100%;height: auto; border-color: white;img-th"/>
								</div>
								<div class="item active">
									<img alt="" src="automation_img/timg3.jpg" class="img-circle" style="width: 100%;height: auto;"/>
								</div>
							</div> 
							    <a class="left carousel-control" href="#carousel-497242" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-497242" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div> 
		
		
			<div class="img-rounded" id='bg_form'  >
				<h2 align="left" style="color: black; font-size: 40px;"><strong>User Login</strong></h2>
				<form method="post" class="log_style" >
					<div class="input-group">
						<span class="input-group-addon" ><strong>username</strong></span>
						<input type="text" class="form-control" type="text" name="user" id='user' placeholder="user" >
					</div>
					<br />
					<div class="input-group"  >
						<span class="input-group-addon" ><strong>password</strong></span>
						<input class="form-control" type="password" name="pswd1" id='invis_pswd' placeholder="pswd" /> 
						<input class="form-control" type="text" name="pswd2" id='vis_pswd' style="display: none;"/>
						<input type="button" class="img-circle" id='buttom_style'  onclick="show_and_hide()"></input>
					</div>
					
						
					<br />
						<input type="submit" value="Login" class="btn btn-default" name="return" id='sub1'/>&nbsp;&nbsp;
						<input type="submit" value="Register" class="btn btn-default" name="return" id='sub2'/>&nbsp;&nbsp;
						
				</form>
				
	
			</div>
			</head>
		</div>
		<canvas id="canvas"></canvas>
		<script >bg_auto();</script>
	</body>
</html>

<?php
include 'param.php';  //将数据库用户参数初始化进来
function get_pswd(){
	if ($_POST['pswd1']){
		return $_POST['pswd1'];
	}
	if($_POST['pswd2']){
		return $_POST['pswd2'];
	}
}

if($_POST['return']=='Register'){
	echo "<script>window.location.href='inf_register.php';</script>";
}
else if($_POST['return']=='Login'){
	
	$pswd=get_pswd();  //按钮点击眼睛显示密码时获取最终输入的密码值。
	$user=$_POST['user'];			
			
	if(empty($user)||empty($pswd)){
		echo "<script>alert('Login Fail！！！');</script>";
		echo "<script>fill_input('$user','user')</script>";
	}
	else{
		$conn=new mysqli($servername,$user_name,$password,$dbname);
		
		$sql  = "SELECT * FROM user_login WHERE user='$user'";
		if ($data=$conn->query($sql)->fetch_assoc()) { #如果能找到说明用户已经存在就不再继续
			if($data['pswd']==$pswd){
				$_SESSION['expiretime'] = time() + 600;  //设置60秒
				$_SESSION['username']=$user;
				echo "<script>window.location.href='inf_mgt.php';</script>";
				#header("Location:inf_mgt.php");
			}
			else{
				echo "<script>alert('密码错误 ！！！');</script>";
				echo "<script>fill_input('$user','user')</script>";
			}
		}
		else{
			echo "<script>alert('用户不存在 ！！！');</script>";
			echo "<script>fill_input('$user','user')</script>";
		}
		$conn->close();
	}
	echo "<script>show_login();</script>";
}
?>