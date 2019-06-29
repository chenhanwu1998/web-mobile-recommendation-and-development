<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
		<script src="auto_bg.js"></script>
		
	<style type="text/css">
		body {
			background: #060e1b;
			background-size: cover;
			overflow-x: hidden;
		}
		/*  输入框的样式  */
		.inputtext{
			font: "微软雅黑";
			font-size: 15px;
			width: 250px;
			height: 40px;
			margin-left: -100px;
			position: relative;
		}
				
		.kb{
			width: 200px;
			height: 40px;
			float:left;
			padding: 10px 10px 10px 100px;
			margin-right:50px;
		}
		
		/*form表单的样式*/
		.bg_form{
			background: url(./img/log2.jpg) ;
			background-size: 600px 600px;
			opacity: 0.7;
			font-size: 15px;
			width: 600px;
			height: 600px;
			position: relative;
			left: 250;
			
		}
		
		/*submit按键的样式*/
		.sub{
			width: 130px ;
			height: 40px; 
			font-size: 15px;
			margin-left:25px; 
		}
		
		/* php中输出的提示的样式 */
		.out{
			width: 400px;
			height: 100px;
			color:red;
			position: relative;
			top: 50px;
			left: 880px;
		}
		
	</style>
		
	<script>
		function return_to_login()
		{
			window.location.href='inf_login.php';
		}
	
	</script>
	</head>
	<body>
		<div class="htmleaf-container">
			<header class="htmleaf-header" style="padding-top: 0">
			<div align="center"  class="bg_form" >
				<br>
				<strong><h2 align="left" style="padding-left: 20px">User Register</h2></strong>
				<form method="post" >
				<div class="kb"><strong>username&nbsp;</strong></div>
				<input class="inputtext" type="text" name="user" />
				<br /><br />
				<div class="kb"><strong>e-mial&nbsp;</strong></div>
				<input class="inputtext" type="text" name="e_mail" />
				<br /><br />
				<div class="kb"><strong>your-ID&nbsp;</strong></div>
				<input class="inputtext" type="text" name="stu_id" />
				<br /><br />
				<div class="kb"><strong>password&nbsp;</strong></div>
				<input class="inputtext" type="password" name="pswd" />
				<br /><br />
				<div class="kb"><strong>ensure again&nbsp;</strong></div>
				<input class="inputtext" type="password" name="ensure_pswd" />
				<br /><br />
				<div class="kb"><strong>question&nbsp;</strong></div>
				<input class="inputtext" type="text" name="question" />
				<strong><p style="color: darkred; font-size: 15px;">***In order to retrieve password&nbsp;</p></strong>
				<div class="kb" ><strong>answers&nbsp;</strong></div>
				<input class="inputtext" type="text" name="answer" />
				<br /><br />
				
				<input type="submit" class="sub"name="return"  value="Register"/>
				</form>
			</div>
			</header>
		</div>
		<canvas id="canvas"></canvas>
		<script >bg_auto();</script>

	</body>
</html>
<?php
include 'param.php';

if($_POST['return']=='Register')
{
	$user=$_POST['user'];
	$e_mail=$_POST['e_mail'];
	$stu_id=$_POST['stu_id'];
	$pswd=$_POST['pswd'];
	$en_pswd=$_POST['ensure_pswd'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
		
	if (empty($user) || empty($e_mail) || empty($stu_id)|| empty($pswd) || empty($en_pswd) || empty($question) || empty($answer)){
		echo "<script>alert('信息不全，请补充！！');</script>";
	}
	
	else{
		if ($pswd!=$en_pswd){
			echo "<script>alert('两次输入密码不一样！！');</script>";
		}
		
		else{
				date_default_timezone_set("Asia/Shanghai");
				$dates=date('Y-m-d H:i:s');
		
				$conn=new mysqli($servername,$user_name,$password,$dbname);
				
				$sql  = "SELECT user FROM user_login WHERE user='$user'";
				if ($conn->query($sql)->fetch_assoc()) { #如果能找到说明用户已经存在就不再继续
					echo "<script>alert('用户已存在！！');</script>";
			}
			else{
				$sql="INSERT INTO user_login VALUES('$user','$pswd','$e_mail','$stu_id','$question','$answer','$dates')";
				$conn->query($sql);
				echo "<script>alert('注册成功！！确认后自动跳转到登录界面');return_to_login();</script>";
			}
			$conn->close();
		}
	}
}

?>