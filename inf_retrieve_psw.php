<html>
	<head>
		<title>retrieve password</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="auto_bg.js"></script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
		<style>
			body {
			  background: #060e1b;
			  overflow: hidden;
			}
			
			/* 输入框的样式  */
			.inputtext{
				font: "alex-brush";
				font-size: 15px;
				width: 300px;
				height: 40px;
			}
			/*form表单的样式*/
			.bg_form{
				background: url(./img/log2.jpg) ;
				background-size: 600px 350px;
				opacity: 0.6;
				font-size: 15px;
				width: 600px;
				height: 350px;
				position: relative;
				left: 300px;
				top: 150px;	
			}
			
			/*submit按键的样式*/
			#sub1,#sub2{
				width: 140px ;
				height: 50px; 
				font-size: 15px;
			}
			
		</style>
		<script>
			function fill_input(content,id)
			{
				document.getElementById(id).value=content;
			}
			function delay_url(url,s)  
			{
				setTimeout("top.location.href='"+url +"'",s*1000);
			}

		</script>
	</head>
	<body>
		<div class="htmleaf-container">
			<header class="htmleaf-header" style="padding-top: 0">
			<div align="center"  class="bg_form" >
				<br>
				<strong><h2 align="left" style="color: white;padding-left: 20px;">Retrieve password</h2></strong>
				<br>
				<form method="post"  style="color: white;">
					<strong>username</strong>
					<input class="inputtext" type="text" name="user" id='user' style="color:black;"/>
					<p style="font-size: 15px;color: darkred;">***输入用户名后获取问题</p>
		
					<strong>Question&nbsp;&nbsp;</strong>
					<input class="inputtext" type="text" name="question" id='ques' style="color:black;"/>
					<br /><br />
					<strong>answer &nbsp;&nbsp;&nbsp;&nbsp;</strong>
					<input class="inputtext" type="text" name="answer" id='ans' style="color:black;"/>
					<br /><br />
					<input type="submit" value="确定" class="btn btn-default" id='sub1' name="return"/>&nbsp;&nbsp;
					<input type="submit" value="获取问题" class="btn btn-default" id="sub2" name="return"/>&nbsp;&nbsp;
				
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
$user=$_POST['user'];
$answer=$_POST['answer'];

if ($_POST['return']=="获取问题")
{
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$sql="SELECT * FROM user_login where user='$user'";
	$data=$conn->query($sql)->fetch_assoc();
	if($data)
	{
		$question=$data['question'];
		echo "<script>fill_input('$question','ques');</script>";
		echo "<script>fill_input('$user','user');</script>";
	}
	else
	{
		//echo "<div class='out'> <strong> 用户不存在 ！！！</strong> </div>";
		echo"<script>alert('用户不存在 ！！！');</script>";
	}
	$conn->close();
}
else if($_POST['return']=='确定')
{
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$sql="SELECT * FROM user_login where user='$user'";
	$data=$conn->query($sql)->fetch_assoc();
	
	$question=$data['question'];
	$pswd=$data['pswd'];

	if($answer==$data['answer'])
	{
		echo"<script>alert('你的密码是：$pswd,请确认自动后跳转到登录界面');</script>";
		echo"<script>delay_url('inf_login.php',0.5);</script> ";
	}
	else
	{
		echo "<script>alert('答案错误!!!');</script>";
		echo "<script>fill_input('$question','ques');</script>";
		echo "<script>fill_input('$user','user');</script>";
	}
	$conn->close();
}

?>