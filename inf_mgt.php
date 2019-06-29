<?php
session_start();
?> 
 
<html> 
	<head> 
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>information management</title>
		
		<link rel="stylesheet" href="inf_mgt.css">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script type="text/javascript" src="inf_mgt.js" ></script>
		<script type="text/javascript" src="auto_bg.js" ></script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
		
		
		<script> //此处有些奇怪，放在外置的js会有点问题
			function fill_div(id,content){
				document.getElementById(id).innerHTML=content;
			}
			function turn_to_luntan(){
				window.location.href='pyq.php';
			}
		</script>
		 
		<style type="text/css">
			body {
			  background: #060e1b;
			  overflow: scroll;
				font-family: 
			}
			canvas {
				   z-index: -1;
				   position : fixed;
				   display: block;
				   margin: 0 auto;
				  top: 0;
				  left: 0;
				 }
				#bipin_result1::-webkit-scrollbar{
					display: none;
				}
				#bipin_result2::-webkit-scrollbar{
					display: none;
				}
				#search_result::-webkit-scrollbar{
					display: none;
				}
				#tuijian_result::-webkit-scrollbar{
					display: none;
				}
				#luntan::-webkit-scrollbar{
					display: none;
				}
		</style>
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-2 column">
					<div class="div_left1"  >
						<form method="post" >
							<input  type="submit" name="return" value="注销" class="btn btn-default"  style="font-size: 15px;width: 60px;height: 40px;margin-left: 20px;margin-top: 10px;margin-right: 10px;background-color: #448AFF;color:#FFFFFF; "/>
							<input  type="submit" name="return" value="注册" class="btn btn-default" style="font-size: 15px;width: 60px;height: 40px;margin-left: 20px;margin-top: 10px;margin-right: 10px;background-color: #448AFF;color:#FFFFFF; "  />
							
						</form>
						<br />
						<strong>&nbsp;&nbsp;您的信息：</strong><br />
						<strong>&nbsp;&nbsp;用户:&nbsp;&nbsp;</strong><input class="input_user_inf"  id="user" ></input><br />
						<strong>&nbsp;&nbsp;ID:&nbsp;&nbsp;</strong><input class="input_user_inf"  id="stu_id"></input><br />
						<strong>&nbsp;&nbsp;邮箱:&nbsp;&nbsp;</strong><input class="input_user_inf" id="e_mail" ></input>
						<br/><br/>	
						<br>
						<br>
						<br>	  
					</div>  
				<!--
	            	作者：1206682774@qq.com
	            	时间：2019-05-27
	            	描述：论坛发表的信息
	            -->
					<div class="div_report">
						<table rules="none"  class="table" style="color: white; border-spacing:50px;" width="70%">
						<caption align="center" style="font:Microsoft YaHei;font-size: 22px">论坛消息</caption>
					   	<thead>
					      <tr>
					         <th style="color: #03A9F4;font:Microsoft YaHei;font-size: 20px">作者</th>
					         <th style="color: #03A9F4;font:Microsoft YaHei;font-size: 20px">信息</th>
					      </tr>
					   	</thead>
					   <tbody>
					      <tr>
					         <td>James</td>
					         <td><a style="text-decoration:none;color:#B3E5FC; " href="#" onclick="display_i()" >发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Jordan</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Kobe</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>chw</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Love</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Rose</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Irving</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
					      <tr>
					         <td>Tll</td>
					         <td><a style="text-decoration:none ;color:#B3E5FC; " href="#" onclick="display_i()">发表了一条消息</a></td>
					      </tr>
				   	</tbody>
					</table>
					</div>
				</div>
			
				<div class="col-md-8 column">
				
					<!-- <div class="mobile_inf_buttom">
						<h2 align="center">品牌排行榜Top15</h2>
					</div>
					-->
					<div class="div_top_float"  style="color: white; z-index: 10;margin-left: 253px;">
						<strong style="font-family: 'bookman old style';">Mobile&nbsp;&nbsp; &nbsp;&nbsp;Management</strong>
					</div> 
					<br>
					<!--
		            	作者：1206682774@qq.com
		            	时间：2019-05-27
		            	描述：顶部功能按钮 
	           		-->
					<ul class="nav nav-pills"  id='div_fun_buttom_daohang' style="float: left; margin-left:163px" >
					<li class="active" style="background-color: #0288D1; border-radius: 10px"><a href="#" onclick="dis_div('div1','choice_fun')">Home</a></li>
					<li><a href="#" onclick="dis_div('div2','choice_fun')">mobile现状</a></li>
					<li><a href="#" onclick="dis_div('div3','choice_fun')">mobile比拼</a></li>
					<li><a href="#" onclick="dis_div('div4','choice_fun')">mobile论坛</a></li>
					<li><a href="#" onclick="dis_div('div5','choice_fun')">mobile搜索</a></li>
					<li><a href="#" onclick="dis_div('div6','choice_fun')">mobile推荐</a></li>
					<li><a href="#" onclick="dis_div('div7','choice_fun')">修改密码</a></li>
					</ul>
				
					<!--
			        	作者：1206682774@qq.com
			        	时间：2019-06-01
			        	描述：首页内容
	       				 -->
					<div class='div_fun' id='div1' align="center" style="display: block;">
						<h1>你的首页</h1>
							
						<div id='iframe_div' >
							<button onclick="hide_iframe()" style="height: 30px;width: 40px; left: 800px; font-size: 20px;" class="btn btn-default">×</button>
							<iframe srcdoc="<p style='color:white;'>hello,老哥，我觉得华为超级好......</p>" id="iframe1" style="color: white; width: 600px; height: 400px ; color:white;" ></iframe>
						</div>
					</div>
				
					<!-- 
		            	作者：1206682774@qq.com
		            	时间：2019-05-27
		            	描述：此处是手机行情 （已完成）
		            -->
					<div class="div_fun" id='div2' align="center">
						<h2 >mobile market</h2>
						<table border="0px" cellspacing="5px" cellpadding="5px" style="color: black;" >
							<tr>
								<th></th>
								<th><input type="submit" onclick="dis_div('m_div1','mobile_market')" name="div1" value="com_cpu" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div2','mobile_market')" name="div2" value="price" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div3','mobile_market')" name="div3" value="price_b" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div4','mobile_market')" name="div4" value="score" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div5','mobile_market')" name="div5" value="score_b" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div6','mobile_market')" name="div6" value="外观top" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div7','mobile_market')" name="div7" value="性价比top" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div8','mobile_market')" name="div6" value="性能top" class="choice_buttom1" /></th>
								<th><input type="submit" onclick="dis_div('m_div9','mobile_market')" name="div7" value="续航top" class="choice_buttom1" /></th>
							
							</tr>
						</table>
					
						<div id='m_div1' class="div_mobile_market" style="display: block;">
							<img src="./mobile_img/company_云.BMP" class="img_mobile_market" id='img1' />
							<br />
							<img src='./mobile_img/mobile_cpu_云.BMP' class="img_mobile_market" />
						</div>
						<div id='m_div2' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/mobile_price.png" class="img_mobile_market1"/>
						</div> 
						<div id='m_div3' class="div_mobile_market" style="display: none;">
							<img src='./mobile_img/mobile_price_b.png' class="img_mobile_market1" />
						</div>
						<div id='m_div4' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/mobile_score.png" class="img_mobile_market1"/>
						</div>
						<div id='m_div5' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/mobile_score_b.png" class="img_mobile_market1"/>
						</div>
						<div id='m_div6' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/外观.png" class="img_mobile_market1"/>
						</div> 
						<div id='m_div7' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/性价比.png" class="img_mobile_market1"/>
						</div>
						<div id='m_div8' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/性能.png" class="img_mobile_market1"/>
						</div>
						<div id='m_div9' class="div_mobile_market" style="display: none;">
							<img src="./mobile_img/续航.png" class="img_mobile_market1"/>
						</div>
					</div>
				
				
					<!-- 
	            	作者：1206682774@qq.com
	            	时间：2019-05-27
	            	描述：手机比拼 (已完成)
	            	-->
					<div class="div_fun" id='div3' align="center">
						<h1>mobile比拼</h1>
						<div class="div_mobile_market" style="height: 750px;">
							<form  method="post">
								<div class="input-group" style="width: 600px; height: 50px;">
									<input type="text" class="form-control"  placeholder="mobile1" id='mobile_bipin_input1' name="mobile_bipin_input_content1">			
									<input type="text" class="form-control"  placeholder="mobile2" id='mobile_bipin_input2' name="mobile_bipin_input_content2">
									<input type="submit" class="btn btn-default" style="width: 60px; height: 50px;"  name="return" value="比拼"/>
				
								</div> 
						
							</form>
							<div style="width: 440px;height: 800px;  overflow-y:scroll; float: left;" id='bipin_result1' >
									
							</div>
							<div style="width: 440px;height: 800px;  overflow-y:scroll; float: right;" id='bipin_result2'>
									
							</div>
						</div>
					
					</div>
				
					<!--
	            	作者：1206682774@qq.com
	            	时间：2019-05-27
	            	描述：手机论坛
	            	-->
					<div class="div_fun" id='div4' align="center" >
				
						<form method="post">
							<input type="text" class="form-control"  placeholder="luntan_content" id='mobile_luntan_search' name="mobile_luntan_search"  style="width: 240px;">
							<input type="submit" class="btn btn-default" style="width: 80px; height: 50px; float: top;"  name="return" value="搜索论坛"/>
							<input type="submit" class="btn btn-default" style="width: 80px; height: 50px; float: top;"  name="return" value="我的论坛"/>
						
						</form>
					
						<a href="pyq.php" target="_blank"><input type="button" name="tuijian" value="点击进入论坛之家" class="btn btn-default" style="width: 160px; height: 50px; float: right;margin-right:50px;"/></a>
						<div style="width: 880px; height:850px;  overflow-y: scroll;" id='luntan'>
					
						</div>	
					</div>
				
					<!-- 
	            	作者：1206682774@qq.com
	            	时间：2019-05-27
	            	描述：此处是搜索板块 (已完成)
	            	-->
					<div class="div_fun" id='div5' align="center">
						<div id='search_title'>
							<img src="./img/search.jpg" class="img-circle" style="width: 800px; height: 200px;"/>
						</div>
						<div class="div_mobile_market" style="height: 750px;">
							<form  method="post">
								<br />
								<div class="input-group" style="width: 600px; height: 50px;">
									<span class="input-group-addon">search</span>
									<input type="text" class="form-control"  placeholder="content" id='mobile_search_input' name="mobile_search_input_content">
									<input type="submit" class="btn btn-default" style="width: 80px; height: 50px;"  name="return" value="搜索"/>
								</div>	 
							</form>
							<div align="left">
								<div id='search_result' style="width: 900px; height: 670px;  font-size: 20px; font: '微软雅黑';overflow-y:scroll;" >	
								
								</div>
							</div>
						   
						</div>
						
					</div>
				
					<!--
	            	作者：1206682774@qq.com
	            	时间：2019-06-01
	            	描述：此处是推荐功能板块 (完成)
	            	-->
					<div class="div_fun" id='div6' align="center">
						<h1>mobile推荐</h1>
						<div class="div_mobile_market" style="height: 880px ; ">
								
							<div style="width: 880px; height:350px ;border:solid;">
								<form  method="post">
									<input type="submit" name="tuijian" value="性价推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<input type="submit" name="tuijian" value="性能推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<input type="submit" name="tuijian" value="外貌推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<input type="submit" name="tuijian" value="拍照推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<input type="submit" name="tuijian" value="续航推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<input type="submit" name="tuijian" value="综分推荐"  class="btn btn-default" style="width: 80px; height: 50px; float: right;"/>
									<h3>自定义推荐</h3>
									<br />
									<div class="input-group" style="width: 600px; height: 50px;">
									<span class="input-group-addon">手机品牌</span>
									<input type="text" class="form-control"  placeholder="品牌" id='mobile_tuijian_brand' name="mobile_tuijian_brand">
									</div> 	 
									 
									<div class="input-group" style="width: 600px; height: 50px;"> 
									<span class="input-group-addon">cpu类型&nbsp;</span>
									<input type="text" class="form-control"  placeholder="CPU" id='mobile_tuijian_cpu' name="mobile_tuijian_cpu">
									</div>	
									  
									
									<div class="input-group" style="width: 600px; height: 50px;">
									<span class="input-group-addon">电池容量</span>
									<input type="text" class="form-control"  placeholder=">电量（mAh）" id='mobile_tuijian_bat' name="mobile_tuijian_bat">
									</div>
									
									<div class="input-group" style="width: 600px; height: 50px;">
									<span class="input-group-addon">屏幕尺寸</span>
									<input type="text" class="form-control"  placeholder=">尺寸（英寸）" id='mobile_tuijian_size' name="mobile_tuijian_size">
									</div>		
									
									<div class="input-group" style="width: 600px; height: 50px;">
									<span class="input-group-addon">手机价位</span>
									<input type="text" class="form-control"  placeholder="low price（￥）" id='mobile_tuijian_low_price' name="mobile_tuijian_low_price">
									
									<input type="text" class="form-control"  placeholder="high price（￥）" id='mobile_tuijian_high_price' name="mobile_tuijian_high_price">
									<input type="submit" class="btn btn-default" style="width: 80px; height: 50px;"  name="return" value="推荐"/>
									</div>	
								</form>
							</div>
								
							<div style="width: 880px; height:530px ;  font: '微软雅黑';overflow-y:scroll;" id='tuijian_result' >
							<!--
		                    	作者：1206682774@qq.com
		                    	时间：2019-06-01
		                    	描述：此位置用来返回推荐的内容的额
		                    -->
							</div>
								
						</div> 
						
					</div>
					
					<!--
		            	作者：1206682774@qq.com
		            	时间：2019-05-27
		            	描述：此处是修改密码功能板块（已完成）
		            -->
					<div class="div_fun" id='div7' align="center">
						<h1>修改密码</h1>
						<form  method="post" >
							输入原密码:&nbsp;&nbsp;
							<input type="text" class="input_modify" name="old_pswd" id='o_pswd'>
							<br /><br />
							问题：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" class="input_modify" name="question" id='que'/>
							<br /><br />
							输入答案:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text"  class="input_modify" name="answer" id='ans'/>
							<br /><br />
							输入新密码:&nbsp;&nbsp;
							<input type="password"  class="input_modify" name="new_pswd" id='n_pswd'/>
							<br /><br />
							确认新密码:&nbsp;&nbsp;
							<input type="password"  class="input_modify" name="ag_new_pswd" id='an_pswd'/>
							<br /><br />
							<input type="submit"  name='return' value="确认"  style="width: 80px; height:40px ;"/>
						</form>
						
					</div>
				</div>
			
				<div class="col-md-2 column">
				<!--
	            	作者：1206682774@qq.com
	            	时间：2019-05-25
	            	描述：动态广告图片自由切换
	            -->
				
		        	<div class="carousel slide" id="carousel-497242" style="width: 400px; left: -60px;">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-497242">
							</li>
							<li data-slide-to="1" data-target="#carousel-497242">
							</li>
							<li data-slide-to="2" data-target="#carousel-497242">
							</li>
							<li data-slide-to="3" data-target="#carousel-497242">
							</li>
							<li data-slide-to="4" data-target="#carousel-497242" class="active">
							</li>
						</ol>
						<div class="carousel-inner" id="auto_div">
							<div class="item">
								<img alt="" src="./automation_img/timg1.jpg" class="img-rounded" style="width: 400px;height: 300px;"/>
							</div>
							<div class="item">
								<img alt="" src="./automation_img/timg2.jpg" class="img-rounded" style="width:400px;height: 300px;"/>
							</div>
							<div class="item active">
								<img alt="" src="./automation_img/timg3.jpg" class="img-rounded" style="width: 400px;height: 300px;"/>
							</div>
							<div class="item">
								<img alt="" src="./automation_img/timg4.jpg" class="img-rounded" style="width:400px;height: 300px;"/>
							</div>
							<div class="item active">
								<img alt="" src="./automation_img/timg5.jpg" class="img-rounded" style="width: 400px;height: 300px;"/>
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
		
		<!--
        	作者：1206682774@qq.com
        	时间：2019-06-29
        	描述：星空动态画布
        <canvas id="canvas"></canvas>
		<script >bg_auto();</script>
        -->
		
	</body>
</html>
<?php
include 'param.php';
?> 

<?php 
$user=$_SESSION['username'];
if($_POST['return']=='注销')
{
	session_unset($user);   #退出登录则吧session给清除掉
	#session_destroy(); 
	echo "<script>delay_url('inf_login.php',0);</script>"; 
}
if($_POST['return']=='注册')
{
	echo "<script>turn_to_register();</script>"; 
}

?>

<?php
//$_SESSION['username']='chenhanwu';  //测试完后记得把此去掉***********************

$user=$_SESSION['username'];
$pswd='';
$e_mail='';
$stu_id='';
$question='';
$answer='';
 
//用户信息输出
if($user)
{
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	
	$sql  = "SELECT * FROM user_login WHERE user='$user'";
	$data=$conn->query($sql)->fetch_assoc();   #查询后得到data字典
	$e_mail=$data['e_mail'];
	$stu_id=$data['stu_id'];
	$pswd=$data['pswd'];
	$question=$data['question'];
	$answer=$data['answer'];
	$dates=$data['dates'];
	
	echo "<script>fill_inf('$user','$stu_id','$e_mail') </script>";  #将相关信息写入到信息展示面板
	$conn->close();
}
else
{
	echo "<script>alert('您尚未登录!!!将在1秒后自动返回登录');</script>";
	echo "<script>delay_url('inf_login.php',1)</script>";   #延迟2秒跳转
}



#将用户信息存到session中去
$_SESSION['question']=$question;
$_SESSION['pswd']=$pswd;
$_SESSION['e_mail']=$e_mail;
$_SESSION['answer']=$answer;
$_SESSION['stu_id']=$stu_id;


$q=$_SESSION['question'];
echo "<script>fill_input('$question','que')</script>";  #输入修改密码时候的问题,每次页面刷新的时候都会自动填充,就是每次怎么提交都会自动填充进去




//将手机前15的输出
$sql1  = "SELECT * FROM mobile_company";
$conn=new mysqli($servername,$user_name,$password,$dbname);
$data=$conn->query($sql1);
$i=0;
$f_tab='<div style="width: 300px;height: 580px; color:white; position: absolute; top: 370;left: 1280px;">';
$f_tab=$f_tab.'<table class="table" style="color:white;" ><thead><tr><th>品牌</th><th>价位</th><th>评分</th></tr></thead><tbody>';
$r_tab='</tbody></table></div>';

while($row=$data->fetch_assoc())
{
	
	if($i>=15)
	{
		break;
	}
	$brand=$row['brand'];
	$brand_score=$row['brand_score'];
	$low_price=$row['low_price'];
	$high_price=$row['high_price'];
	$url=$row['url'];
	$brand_urls='<a href="'.$url.'" style="text-decoration:none ; " target="_blank">'.$brand.'</a>';
	
	$f_tab=$f_tab.'<tr><td>'.$brand_urls.'</td><td>'.$low_price.'-'.$high_price.'</td><td>'.$brand_score.'</td></tr>';
	$i+=1;
}
echo $f_tab.$r_tab;



//搜索

if($_POST['return']=='搜索')
{
	$search_content=$_POST['mobile_search_input_content'];

	$sql1  = "SELECT * FROM new_all_mobile WHERE new_all_mobile.type LIKE '%$search_content%'";
	$sql2  = "SELECT * FROM new_all_mobile WHERE new_all_mobile.CPU LIKE '%$search_content%'";
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$data1=$conn->query($sql1);
	$data2=$conn->query($sql2);
	$result='';
	
	if($data1->num_rows>0)
	{
		while($row=$data1->fetch_assoc())
		{
			$m_id=$row['id'];
			$types=$row['type'];
			$reference=$row['reference_price'];
			$cpus=$row['CPU'];
			$market_date=$row['market_date'];
			$resolution=$row['resolution'];
			$screen_size=$row['screen_size'];
			$param_url=$row['param_url'];
			//$param_url='<a href='.$param_url.'>详细参数请点击</a>';
			$internal_storage=$row['internal_storage'];
			$font_camera=$row['font_camera'];
			$rear_camera=$row['rear_camera'];
			$kernel_count=$row['kernel_count'];
			$battery_capacity=$row['battery_capacity'];
			$battery_type=$row['battery_type']; 
			
			 
			$cost_p=(floatval($row['cost_performance']))*10;
			$cost_performance='<span>'.strval($cost_p/10).'</span><div  style="width: 300px; height: 20px;left:50px; float:right;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance=$cost_performance.strval($cost_p).'%;"><span>'.strval($cost_p).'%</span></div></div></div>';
			
			
			$perf=(floatval($row['performance']))*10;
			$performance='<span>'.strval($perf/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance=$performance.strval($perf).'%;"><span>'.strval($perf).'%</span></div></div></div>';
			
			
			$conti=(floatval($row['continuation']))*10;
			$continuation='<span>'.strval($conti/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation=$continuation.strval($conti).'%;"><span>'.strval($conti).'%</span></div></div></div>';
			
			
			$appe=(floatval($row['appearance']))*10;
			$appearance='<span>'.strval($appe/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance=$appearance.strval($appe).'%;"><span>'.strval($appe).'%</span></div></div></div>';
			
			$photo=(floatval($row['photograph']))*10;
			$photograph='<span>'.strval($photo/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph=$photograph.strval($photo).'%;"><span>'.strval($photo).'%</span></div></div></div>';
			
			
			$sco=(floatval($row['photograph']))*10;
			$score='<span>'.strval($sco/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score=$score.strval($sco).'%;"><span>'.strval($sco).'%</span></div></div></div>';
			
			
			
			$imgsrc='./search_mobile_img2/'.$m_id.'.jpg';
			#echo "<script>alert('$imgsrc');</script>";
			$img_div='<div style="width:400px; height:600px ;float:right; "><a href="'.$param_url.'" target="_blank"><img src="'.$imgsrc.'"style="width:500px; height:400px;"></a></div>';
			$inf='手机型号:'.$types.'<br/>'.'参考价格:'.$reference.'<br/>'.'CPU型号:'.$cpus.'<br/>'.'上市日期:'.$market_date.'<br/>'.'手机分辨率:'.$resolution.'<br/>'.'屏幕尺寸:'.$screen_size.'<br/>内存:'.$internal_storage.'<br/>';
			$inf=$inf.'前置摄像头:'.$font_camera.'<br/>'.'后置摄像头:'.$rear_camera.'<br/>'.'核数:'.$kernel_count.'<br/>'.'电池容量'.$battery_capacity.'<br/>'.'电池类型:'.$battery_type.'<br/>';
			$inf=$inf.'性价比:'.$cost_performance.'<br/>'.'性能:'.$performance.'<br/>'.'续航:'.$continuation.'<br/>'.'外貌:'.$appearance.'<br/>'.'拍照:'.$photograph.'<br/>'.'综合打分:'.$score.'<br/><br/>';
			$inf='<div style="float:left; width:480;height:600px ;border: black;">'.$inf.'</div>';
			$inf=$inf.$img_div;
			$result=$inf.$result;
		}
	} 
	   
	 
	else if($data2->num_rows>0)
	{
		
		while($row=$data2->fetch_assoc())
		{
			$m_id=$row['id'];
			$types=$row['type'];
			$reference=$row['reference_price'];
			$cpus=$row['CPU'];
			$market_date=$row['market_date'];
			$resolution=$row['resolution'];
			$screen_size=$row['screen_size'];
			$param_url=$row['param_url'];
			//$param_url='<a href='.$param_url.'>详细参数请点击</a>';
			$internal_storage=$row['internal_storage'];
			$font_camera=$row['font_camera'];
			$rear_camera=$row['rear_camera'];
			$kernel_count=$row['kernel_count'];
			$battery_capacity=$row['battery_capacity'];
			$battery_type=$row['battery_type'];
			 
			
			$cost_p=(floatval($row['cost_performance']))*10;
			$cost_performance='<span>'.strval($cost_p/10).'</span><div  style="width: 300px; height: 20px;left:50px; float:right;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance=$cost_performance.strval($cost_p).'%;"><span>'.strval($cost_p).'%</span></div></div></div>';
			
			
			$perf=(floatval($row['performance']))*10;
			$performance='<span>'.strval($perf/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance=$performance.strval($perf).'%;"><span>'.strval($perf).'%</span></div></div></div>';
			
			
			$conti=(floatval($row['continuation']))*10;
			$continuation='<span>'.strval($conti/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation=$continuation.strval($conti).'%;"><span>'.strval($conti).'%</span></div></div></div>';
			
			
			$appe=(floatval($row['appearance']))*10;
			$appearance='<span>'.strval($appe/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance=$appearance.strval($appe).'%;"><span>'.strval($appe).'%</span></div></div></div>';
			
			$photo=(floatval($row['photograph']))*10;
			$photograph='<span>'.strval($photo/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph=$photograph.strval($photo).'%;"><span>'.strval($photo).'%</span></div></div></div>';
			
			
			$sco=(floatval($row['photograph']))*10;
			$score='<span>'.strval($sco/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score=$score.strval($sco).'%;"><span>'.strval($sco).'%</span></div></div></div>';
			
			
			
			$imgsrc='./search_mobile_img2/'.$m_id.'.jpg';
			#echo "<script>alert('$imgsrc');</script>";
			$img_div='<div style="width:400px; height:600px ;float:right; "><a href="'.$param_url.'" target="_blank"><img src="'.$imgsrc.'"style="width:500px; height:400px;"></a></div>';
			$inf='手机型号:'.$types.'<br/>'.'参考价格:'.$reference.'<br/>'.'CPU型号:'.$cpus.'<br/>'.'上市日期:'.$market_date.'<br/>'.'手机分辨率:'.$resolution.'<br/>'.'屏幕尺寸:'.$screen_size.'<br/>内存:'.$internal_storage.'<br/>';
			$inf=$inf.'前置摄像头:'.$font_camera.'<br/>'.'后置摄像头:'.$rear_camera.'<br/>'.'核数:'.$kernel_count.'<br/>'.'电池容量'.$battery_capacity.'<br/>'.'电池类型:'.$battery_type.'<br/>';
			$inf=$inf.'性价比:'.$cost_performance.'<br/>'.'性能:'.$performance.'<br/>'.'续航:'.$continuation.'<br/>'.'外貌:'.$appearance.'<br/>'.'拍照:'.$photograph.'<br/>'.'综合打分:'.$score.'<br/><br/>';
			$inf='<div style="float:left; width:480;height:600px ;border: black;">'.$inf.'</div>';
			$inf=$inf.$img_div;
			$result=$inf.$result;
		}
	}
	else{
		$result='Sorry!找不到您想要的';
	} 
	$result='<div>'.$result.'</div>';
	
	
	//echo "<script>show_div('search_img1');show_div('search_img2');</script>";
	//echo "<script>fill_input('$result','search_result');</script>";
	echo "<script>fill_div('search_result','$result');</script>";
	$conn->close();
	echo "<script>dis_div('div5','choice_fun');</script>";
	echo "<script>fill_input('$search_content','mobile_search_input');</script>";
}

 

//手机比拼

if($_POST['return']=='比拼')
{
	$bipin_content1=$_POST['mobile_bipin_input_content1'];
	$bipin_content2=$_POST['mobile_bipin_input_content2'];
	
	$sql1  = "SELECT * FROM new_all_mobile WHERE new_all_mobile.type LIKE '%$bipin_content1%'";
	$sql2  = "SELECT * FROM new_all_mobile WHERE new_all_mobile.type LIKE '%$bipin_content2%'";
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$data1=$conn->query($sql1);
	$data2=$conn->query($sql2);
	$result1='';
	$result2='';
	if($data1->num_rows>0 && $data2->num_rows>0)
	{
		
		while(($row1=$data1->fetch_assoc())&& ($row2=$data2->fetch_assoc()) )  /*&& ($row2=$data2->fetch_assoc())*/
		{ 
			$m_id1=$row1['id'];
			$types1=$row1['type'];
			$reference1=$row1['reference_price'];
			$cpus1=$row1['CPU'];
			$market_date1=$row1['market_date'];
			$resolution1=$row1['resolution'];
			$screen_siz1e1=$row1['screen_size'];
			$param_url1=$row1['param_url'];
			$internal_storage1=$row1['internal_storage'];
			$font_camera1=$row1['font_camera'];
			$rear_camera1=$row1['rear_camera'];
			$kernel_count1=$row1['kernel_count'];
			$battery_capacity1=$row1['battery_capacity'];
			$battery_type1=$row1['battery_type'];
			$four_five_star1=$row1['four_five_star'];
			$three_four_star1=$row1['three_four_star'];
			$two_three_star1=$row1['two_three_star'];
			$one_two_star1=$row1['one_two_star'];
			$evaluate_url1=$row1['evaluate_url'];
			$types1='<a style="text-decoration:none ; " target="_blank" href="'.$evaluate_url1.'"><h4>'.$types1.'</h4></a><p style="font-size:20px">￥'.$reference1.'</p>';
			$manufacturer_descript1=$row1['detail_descript'];
			$people_descript1=$row1['descript'];
			
			
			$m_id2=$row2['id'];
			$types2=$row2['type'];
			$reference2=$row2['reference_price'];
			$cpus2=$row2['CPU'];
			$market_date2=$row2['market_date'];
			$resolution2=$row2['resolution'];
			$screen_size2=$row2['screen_size'];
			$param_url2=$row2['param_url'];
			$internal_storage2=$row2['internal_storage'];
			$font_camera2=$row2['font_camera'];
			$rear_camera2=$row2['rear_camera'];
			$kernel_count2=$row2['kernel_count'];
			$battery_capacity2=$row2['battery_capacity'];
			$battery_type2=$row2['battery_type'];
			$four_five_star2=$row2['four_five_star'];
			$three_four_star2=$row2['three_four_star'];
			$two_three_star2=$row2['two_three_star'];
			$one_two_star2=$row2['one_two_star'];
			$evaluate_url2=$row2['evaluate_url'];
			$types2='<a style="text-decoration:none ; " target="_blank" href="'.$evaluate_url2.'"><h4>'.$types2.'</h4></a><p style="font-size:20px">￥'.$reference2.'</p>';
			$manufacturer_descript2=$row2['detail_descript'];
			$people_descript2=$row2['descript'];
			
			 
			$cost_p1=(floatval($row1['cost_performance']))*10;
			$cost_performance1='<span>'.strval($cost_p1/10).'</span><div  style="width: 250px; height: 20px; float:right;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance1=$cost_performance1.strval($cost_p1).'%;"><span>'.strval($cost_p1).'%</span></div></div></div><br/>';
			
			$cost_p2=(floatval($row2['cost_performance']))*10;
			$cost_performance2='<span>'.strval($cost_p2/10).'</span><div  style="width: 250px; height: 20px; float:left;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance2=$cost_performance2.strval($cost_p2).'%;"><span>'.strval($cost_p2).'%</span></div></div></div><br/>';
			
			
			$perf1=(floatval($row1['performance']))*10;
			$performance1='<span>'.strval($perf1/10).'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance1=$performance1.strval($perf1).'%;"><span>'.strval($perf1).'%</span></div></div></div><br/>';
			
			$perf2=(floatval($row2['performance']))*10;
			$performance2='<span>'.strval($perf1/10).'</span><div  style="width: 250px; height: 20px;float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance2=$performance2.strval($perf1).'%;"><span>'.strval($perf1).'%</span></div></div></div><br/>';
		
			
			$conti1=(floatval($row1['continuation']))*10;
			$continuation1='<span>'.strval($conti1/10).'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation1=$continuation1.strval($conti1).'%;"><span>'.strval($conti1).'%</span></div></div></div><br/>';
			
			$conti2=(floatval($row2['continuation']))*10;
			$continuation2='<span>'.strval($conti2/10).'</span><div  style="width: 250px; height: 20px; float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation2=$continuation2.strval($conti2).'%;"><span>'.strval($conti2).'%</span></div></div></div><br/>';
			
			
			$appe1=(floatval($row1['appearance']))*10;
			$appearance1='<span>'.strval($appe1/10).'</span><div  style="width: 250px; height: 20px;float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance1=$appearance1.strval($appe1).'%;"><span>'.strval($appe1).'%</span></div></div></div><br/>';
			
			$appe2=(floatval($row2['appearance']))*10;
			$appearance2='<span>'.strval($appe2/10).'</span><div  style="width: 250px; height: 20px;float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance2=$appearance2.strval($appe2).'%;"><span>'.strval($appe2).'%</span></div></div></div><br/>';
			
			$photo1=(floatval($row1['photograph']))*10;
			$photograph1='<span>'.strval($photo1/10).'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph1=$photograph1.strval($photo1).'%;"><span>'.strval($photo1).'%</span></div></div></div><br/>';
			
			$photo2=(floatval($row2['photograph']))*10;
			$photograph2='<span>'.strval($photo2/10).'</span><div  style="width: 250px; height: 20px; float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph2=$photograph2.strval($photo2).'%;"><span>'.strval($photo2).'%</span></div></div></div><br/>';
			
			$sco1=(floatval($row1['photograph']))*10;
			$score1='<span>'.strval($sco1/10).'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score1=$score1.strval($sco1).'%;"><span>'.strval($sco1).'%</span></div></div></div><br/>';
			
			$sco2=(floatval($row2['photograph']))*10;
			$score2='<span>'.strval($sco2/10).'</span><div  style="width: 250px; height: 20px; float:left"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score2=$score2.strval($sco2).'%;"><span>'.strval($sco2).'%</span></div></div></div><br/>';
			
			
			$four_five1='<span>'.$four_five_star1.'</span><div style="width: 250px; height: 20px;float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$four_five_star1=$four_five1.floatval($four_five_star1).'%;"><span>'.$four_five_star1.'</span></div></div></div><br/>';
			
			$four_five2='<span>'.$four_five_star2.'</span><div  style="width: 250px; height: 20px; float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$four_five_star2=$four_five2.floatval($four_five_star2).'%;"><span>'.$four_five_star2.'</span></div></div></div><br/>';
			
			$three_four1='<span>'.$three_four_star1.'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$three_four_star1=$three_four1.floatval($three_four_star1).'%;"><span>'.$three_four_star1.'</span></div></div></div><br/>';
			
			$three_four2='<span>'.$three_four_star2.'</span><div  style="width: 250px; height: 20px; float:left"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$three_four_star2=$three_four2.floatval($three_four_star2).'%;"><span>'.$three_four_star2.'</span></div></div></div><br/>';
			
			
			$two_three1='<span>'.$two_three_star1.'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$two_three_star1=$two_three1.floatval($two_three_star1).'%;"><span>'.$two_three_star1.'</span></div></div></div><br/>';
			
			$two_three2='<span>'.$two_three_star2.'</span><div  style="width: 250px; height: 20px; float:left;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$two_three_star2=$two_three2.floatval($two_three_star2).'%;"><span>'.$two_three_star2.'</span></div></div></div><br/>';
			
			$one_two1='<span>'.$one_two_star1.'</span><div  style="width: 250px; height: 20px; float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$one_two_star1=$one_two1.floatval($one_two_star1).'%;"><span>'.$one_two_star1.'</span></div></div></div><br/>';
			
			$one_two2='<span>'.$one_two_star2.'</span><div  style="width: 250px; height: 20px; float:left;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$one_two_star2=$one_two2.floatval($one_two_star2).'%;"><span>'.$one_two_star2.'</span></div></div></div><br/>';
			
			
			
			$inf1=$types1.'<br/>'.'性价比:'.$cost_performance1.'<br/>'.'性能:'.$performance1.'<br/>'.'续航:'.$continuation1.'<br/>'.'外貌:'.$appearance1.'<br/>'.'拍照:'.$photograph1.'<br/>'.'综合打分:'.$score1.'<br/>'; 
			$inf1=$inf1.'4-5星:'.$four_five_star1.'<br/>'.'3-4星:'.$three_four_star1.'<br/>'.'2-3星:'.$two_three_star1.'<br/>'.'1-2星:'.$one_two_star1.'<br/>';
			$inf1='<div style=" width:350;height:750px;">'.$inf1.'<strong>商家描述:</strong>'.$manufacturer_descript1.'<br/><strong>客户都说:</strong>'.$people_descript1.'</div>';
			
			$inf2=$types2.'<br/>'.'性价比:'.$cost_performance2.'<br/>'.'性能:'.$performance2.'<br/>'.'续航:'.$continuation2.'<br/>'.'外貌:'.$appearance2.'<br/>'.'拍照:'.$photograph2.'<br/>'.'综合打分:'.$score2.'<br/>';                          
			$inf2=$inf2.'4-5星:'.$four_five_star2.'<br/>'.'3-4星:'.$three_four_star2.'<br/>'.'2-3星:'.$two_three_star2.'<br/>'.'1-2星:'.$one_two_star2.'<br/>';
			$inf2='<div style=" width:350;height:750px;">'.$inf2.'<strong>商家描述:</strong>'.$manufacturer_descript2.'<br/><strong>客户都说:</strong>'.$people_descript2.'</div>';
			
			$result1=$result1.$inf1;
			$result2=$result2.$inf2;
		} 
	}
	echo "<script>fill_div('bipin_result1','$result1');fill_div('bipin_result2','$result2');</script>";
	$conn->close();
	echo "<script>dis_div('div3','choice_fun');</script>";
	echo "<script>fill_input('$bipin_content1','mobile_bipin_input1');fill_input('$bipin_content2','mobile_bipin_input2');</script>";
	
	
}


//手机推荐
if($_POST['return']=='推荐')
{
	$m_brand=$_POST['mobile_tuijian_brand'];
	$m_low_price=$_POST['mobile_tuijian_low_price'];
	$m_high_price=$_POST['mobile_tuijian_high_price'];
	$m_size=$_POST['mobile_tuijian_size'];
	$m_cpu=$_POST['mobile_tuijian_cpu'];
	$m_bat=$_POST['mobile_tuijian_bat'];
	
	$sql  = "SELECT * FROM all_mobile WHERE all_mobile.type LIKE '%$m_brand%' AND all_mobile.reference_price>$m_low_price AND all_mobile.reference_price <$m_high_price AND all_mobile.battery_capacity>$m_bat AND all_mobile.CPU LIKE '%$m_cpu%' AND all_mobile.screen_size>$m_size";
	//echo "<script>alert('$sql');</script>";
	$servername='localhost';
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$data=$conn->query($sql);
	$result='';
	
	if($data->num_rows>0)
	{
		while($row=$data->fetch_assoc())
		{
			$m_id=$row['id'];
			$types=$row['type'];
			$reference=$row['reference_price'];
			$cpus=$row['CPU'];
			$market_date=$row['market_date'];
			$resolution=$row['resolution'];
			$screen_size=$row['screen_size'];
			$param_url=$row['param_url'];
			$internal_storage=$row['internal_storage'];
			$font_camera=$row['font_camera'];
			$rear_camera=$row['rear_camera'];
			$kernel_count=$row['kernel_count'];
			$battery_capacity=$row['battery_capacity'];
			$battery_type=$row['battery_type'];
			$four_five_star=$row['four_five_star'];
			$three_four_star=$row['three_four_star'];
			$two_three_star=$row['two_three_star'];
			$one_two_star=$row['one_two_star'];
			$evaluate_url=$row['evaluate_url'];
			$types='<a style="text-decoration:none ; " target="_blank" href="'.$evaluate_url.'"><h4>'.$types.'</h4></a><p style="font-size:20px">￥'.$reference.'</p>';
			$manufacturer_descript=$row['detail_descript'];
			$people_descript=$row['descript'];
			
			$cost_p=(floatval($row['cost_performance']))*10;
			$cost_performance='<span>'.strval($cost_p/10).'</span><div  style="width: 300px; height: 20px;left:50px; float:right;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance=$cost_performance.strval($cost_p).'%;"><span>'.strval($cost_p).'%</span></div></div></div>';
			
			
			$perf=(floatval($row['performance']))*10;
			$performance='<span>'.strval($perf/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance=$performance.strval($perf).'%;"><span>'.strval($perf).'%</span></div></div></div>';
			
			
			$conti=(floatval($row['continuation']))*10;
			$continuation='<span>'.strval($conti/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation=$continuation.strval($conti).'%;"><span>'.strval($conti).'%</span></div></div></div>';
			
			
			$appe=(floatval($row['appearance']))*10;
			$appearance='<span>'.strval($appe/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance=$appearance.strval($appe).'%;"><span>'.strval($appe).'%</span></div></div></div>';
			
			$photo=(floatval($row['photograph']))*10;
			$photograph='<span>'.strval($photo/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph=$photograph.strval($photo).'%;"><span>'.strval($photo).'%</span></div></div></div>';
			
			
			$sco=(floatval($row['photograph']))*10;
			$score='<span>'.strval($sco/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score=$score.strval($sco).'%;"><span>'.strval($sco).'%</span></div></div></div>';
		
			
			$imgsrc='./search_mobile_img2/'.$m_id.'.jpg';
			$img_div='<div style="width:400px; height:600px ;float:right; "><a href="'.$param_url.'" target="_blank"><img src="'.$imgsrc.'"style="width:500px; height:400px;"></a></div>';
			
			$inf=$types.'CPU型号:'.$cpus.'<br/>'.'上市日期:'.$market_date.'<br/>'.'手机分辨率:'.$resolution.'<br/>'.'屏幕尺寸:'.$screen_size.'英寸<br/>内存:'.$internal_storage.'<br/>';
			$inf=$inf.'前置摄像头:'.$font_camera.'<br/>'.'后置摄像头:'.$rear_camera.'<br/>'.'核数:'.$kernel_count.'<br/>'.'电池容量:'.$battery_capacity.'mAh<br/>'.'电池类型:'.$battery_type.'<br/>';
			$inf=$inf.'性价比:'.$cost_performance.'<br/>'.'性能:'.$performance.'<br/>'.'续航:'.$continuation.'<br/>'.'外貌:'.$appearance.'<br/>'.'拍照:'.$photograph.'<br/>'.'综合打分:'.$score.'<br/><br/>';
			$inf='<div style="float:left; width:440;height:600px ;">'.$inf.'</div>';
			$inf=$inf.$img_div;
			$result=$inf.$result;
		
		}
	}
	echo "<script>fill_div('tuijian_result','$result');</script>";
	$conn->close();
	echo "<script>dis_div('div6','choice_fun');</script>";
	echo "<script>fill_input('$m_brand','mobile_tuijian_brand');fill_input('$m_bat','mobile_tuijian_bat');fill_input('$m_brand','mobile_tuijian_brand');</script>";
	echo "<script>fill_input('$m_low_price','mobile_tuijian_low_price');fill_input('$m_high_price','mobile_tuijian_high_price');fill_input('$m_size','mobile_tuijian_size');fill_input('$m_cpu','mobile_tuijian_cpu');</script>";
	
}


$tuijian_array=array("性价推荐"=>"cost_performance","性能推荐"=>"performance","外貌推荐"=>"appearance","拍照推荐"=>"photograph","续航推荐"=>"continuation","综分推荐"=>"score");

if($_POST['tuijian'])
{
	$choice=$tuijian_array[$_POST['tuijian']];
	
	//echo "<script>alert('$choice');</script>";
	$sql  = "SELECT * FROM all_mobile ORDER BY all_mobile.".$choice." DESC";
	$servername='localhost';
	$conn=new mysqli($servername,$user_name,$password,$dbname);
	$data=$conn->query($sql);
	$result='';
	$count=0;
	if($data->num_rows>0)
	{
		while($row=$data->fetch_assoc())
		{
			$count+=1;
			if($count>20)
			{
				break;
			}
			
			$m_id=$row['id'];
			$types=$row['type'];
			$reference=$row['reference_price'];
			$cpus=$row['CPU'];
			$market_date=$row['market_date'];
			$resolution=$row['resolution'];
			$screen_size=$row['screen_size'];
			$param_url=$row['param_url'];
			$internal_storage=$row['internal_storage'];
			$font_camera=$row['font_camera'];
			$rear_camera=$row['rear_camera'];
			$kernel_count=$row['kernel_count'];
			$battery_capacity=$row['battery_capacity'];
			$battery_type=$row['battery_type'];
			$four_five_star=$row['four_five_star'];
			$three_four_star=$row['three_four_star'];
			$two_three_star=$row['two_three_star'];
			$one_two_star=$row['one_two_star'];
			$evaluate_url=$row['evaluate_url'];
			$types='<a style="text-decoration:none ; " target="_blank" href="'.$evaluate_url.'"><h4>'.$types.'</h4></a><p style="font-size:20px">￥'.$reference.'</p>';
			$manufacturer_descript=$row['detail_descript'];
			$people_descript=$row['descript'];
			
			$cost_p=(floatval($row['cost_performance']))*10;
			$cost_performance='<span>'.strval($cost_p/10).'</span><div  style="width: 300px; height: 20px;left:50px; float:right;" ><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$cost_performance=$cost_performance.strval($cost_p).'%;"><span>'.strval($cost_p).'%</span></div></div></div>';
			
			
			$perf=(floatval($row['performance']))*10;
			$performance='<span>'.strval($perf/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$performance=$performance.strval($perf).'%;"><span>'.strval($perf).'%</span></div></div></div>';
			
			
			$conti=(floatval($row['continuation']))*10;
			$continuation='<span>'.strval($conti/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$continuation=$continuation.strval($conti).'%;"><span>'.strval($conti).'%</span></div></div></div>';
			
			
			$appe=(floatval($row['appearance']))*10;
			$appearance='<span>'.strval($appe/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$appearance=$appearance.strval($appe).'%;"><span>'.strval($appe).'%</span></div></div></div>';
			
			$photo=(floatval($row['photograph']))*10;
			$photograph='<span>'.strval($photo/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$photograph=$photograph.strval($photo).'%;"><span>'.strval($photo).'%</span></div></div></div>';
			
			
			$sco=(floatval($row['photograph']))*10;
			$score='<span>'.strval($sco/10).'</span><div  style="width: 300px; height: 20px;left:50px;  float:right;"><div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"aria-valuemin="0" aria-valuemax="100" style="width: ';
			$score=$score.strval($sco).'%;"><span>'.strval($sco).'%</span></div></div></div>';
		
			
			$imgsrc='./search_mobile_img2/'.$m_id.'.jpg';
			$img_div='<div style="width:400px; height:600px ;float:right; "><a href="'.$param_url.'" target="_blank"><img src="'.$imgsrc.'"style="width:500px; height:400px;"></a></div>';
			
			$inf=$types.'CPU型号:'.$cpus.'<br/>'.'上市日期:'.$market_date.'<br/>'.'手机分辨率:'.$resolution.'<br/>'.'屏幕尺寸:'.$screen_size.'英寸<br/>内存:'.$internal_storage.'<br/>';
			$inf=$inf.'前置摄像头:'.$font_camera.'<br/>'.'后置摄像头:'.$rear_camera.'<br/>'.'核数:'.$kernel_count.'<br/>'.'电池容量:'.$battery_capacity.'mAh<br/>'.'电池类型:'.$battery_type.'<br/>';
			$inf=$inf.'性价比:'.$cost_performance.'<br/>'.'性能:'.$performance.'<br/>'.'续航:'.$continuation.'<br/>'.'外貌:'.$appearance.'<br/>'.'拍照:'.$photograph.'<br/>'.'综合打分:'.$score.'<br/><br/>';
			$inf='<div style="float:left; width:440;height:600px ;">'.$inf.'</div>';
			$inf=$inf.$img_div;
			$result=$inf.$result;
		
		}
	}
	echo "<script>fill_div('tuijian_result','$result');</script>";
	$conn->close();
	echo "<script>dis_div('div6','choice_fun');</script>";
}
 




//修改密码
$old_pswd=$_POST['old_pswd'];
$new_pswd=$_POST['new_pswd'];
$ag_new_pswd=$_POST['ag_new_pswd'];
$my_answer=$_POST['answer'];
if($_POST['return']=='确认' && ($_SESSION['tip1']==$tip1)){
		
		$servername='localhost';
		$conn=new mysqli($servername,$user_name,$password,$dbname);
		//$data=$conn->fetch_assoc();
		
		$fill_tip=1;  #如果修改成功了即为0
		if($old_pswd==$pswd)	{	
			if($my_answer==$_SESSION['answer']){
				if (empty($new_pswd)){
					echo "<script>alert('密码不能为空');</script>";
				}
				else if($ag_new_pswd==$new_pswd ){
					$sql  = "UPDATE user_login SET pswd='$new_pswd' WHERE user='$user'";
					$conn->query($sql);
					echo "<script>alert('修改成功');</script>";
					$fill_tip=0;
				}
				else{
					echo "<script>alert('两次输入密码不相同 ！！！');</script>";
				}
			}
			else{
				echo "<script>alert('问题答案错误 ！！！');</script>";
			}
		}
		else{
			echo "<script>alert('密码错误 ！！！');</script>";
		}
		
		$conn->close();
		
		if($fill_tip==1){
			echo "<script>fill_input('$old_pswd','o_pswd');</script>";
			echo "<script>fill_input('$my_answer','ans');</script>";
			echo "<script>fill_input('$new_pswd','n_pswd');</script>";
			echo "<script>fill_input('$ag_new_pswd','an_pswd');</script>";
		}
	echo "<script>dis_div('div7','choice_fun');</script>";
}
 
 
?>

<?php 
if ($_POST['return']=='我的论坛'){
	$username=$_SESSION['username'];

	$conn = new mysqli($servername, $user_name, $password, $dbname);
	
	if ($conn->connect_error){
		die('conn error'.$conn->connect_error);
	}
	
	$content_sql = "select * from article where article.user='$username'";
	$result = $conn->query($content_sql);
	
	if($result->num_rows > 0){
		$len = $result->num_rows;
		$i = 0;
		$all_article_content='';
		while($row = $result->fetch_assoc()) {
			$article_content='';
			
			$article_user = $row['user'];
			$article_id = $row['article_id'];
			$article_content = $row['article_content']; 
			$article_content = str_replace('\n','',$article_content);
			$article_picture = $row['article_picture'];
			$article_time = $row['article_time'];
	
			$comment_sql = "select * from comment where article_id='$article_id'";
			$c_result = $conn->query($comment_sql);
			
			$a_con='<div align="center" style="width:600px;height:auto;"><p align="left">'.$article_user.':&nbsp;&nbsp;'.$article_content."</p>";
	
			$img='<img style="width:500px;height:400px; " src="'.$article_picture.'"/>';
			$time='<div align="left">'.$article_time.'</div></div>';
			
			$article_content=$a_con.$img.$time;
			//获得评论
			$comment_whole = '';
			
			while($c_row = $c_result->fetch_assoc()){
				$comment_content = $c_row['comment_content'];
				$comment_user = $c_row['user'];
				$c_content= '<p align="left">'.$comment_user.'&nbsp;&nbsp;:'.$comment_content.'</p>';
				$comment_whole=$comment_whole.$c_content;
			}
			$comment_whole='<div align="center" style="width:600px; height:auto ;">'.$comment_whole.'</div>';
			$all_article_content='<br/><br/>'.$article_content.$comment_whole.$all_article_content;
		} 
		echo "<script>fill_div('luntan','$all_article_content');</script>";
		echo "<script>dis_div('div4','choice_fun');</script>";
	}
}

?>

<?php
if($_POST['return']=='搜索论坛'){
	$luntan_content=$_POST['mobile_luntan_search'];
	$conn = new mysqli($servername, $user_name, $password, $dbname);
	
	if ($conn->connect_error){
		die('conn error'.$conn->connect_error);
	}
	
	$content_sql = "select * from article where article.article_content like '%$luntan_content%'";
	$result = $conn->query($content_sql);
	
	if($result->num_rows > 0){
		
		$len = $result->num_rows;
		$i = 0;
		$all_article_content='';
		while($row = $result->fetch_assoc()) {
			$article_content='';
			//echo "<script>alert('$i')</script>";
			$i+=1;
			$article_user = $row['user'];
			$article_id = $row['article_id'];
			$article_content = $row['article_content']; 
			$article_content = str_replace('\n','',$article_content);
			$article_picture = $row['article_picture'];
			$article_time = $row['article_time'];
	
			$comment_sql = "select * from comment where article_id='$article_id'";
			$c_result = $conn->query($comment_sql);
			
			$a_con='<div align="center" style="width:600px;height:auto;"><p align="left">'.$article_user.':&nbsp;&nbsp;'.$article_content."</p>";
	
			$img='<img style="width:500px;height:400px; " src="'.$article_picture.'"/>';
			$time='<div align="left">'.$article_time.'</div></div>';
			
			$article_content=$a_con.$img.$time;
			//获得评论
			$comment_whole = '';
			
			while($c_row = $c_result->fetch_assoc()){
				
				$comment_content = $c_row['comment_content'];
				$comment_user = $c_row['user'];
				$c_content= '<p align="left">'.$comment_user.'&nbsp;&nbsp;:'.$comment_content.'</p>';
				$comment_whole=$comment_whole.$c_content;
			}
			$comment_whole='<div align="center" style="width:600px; height:auto ;">'.$comment_whole.'</div>';
			$all_article_content='<br/><br/>'.$article_content.$comment_whole.$all_article_content;
		
		} 
		
		echo "<script>fill_input('$luntan_content','mobile_luntan_search')</script>";
		echo "<script>fill_div('luntan','$all_article_content');</script>";
		echo "<script>dis_div('div4','choice_fun');</script>";	
	}
}

?>