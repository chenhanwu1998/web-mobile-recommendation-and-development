<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];
?>

<html>

	<head>
		<title>luntan</title>
		<meta charset="utf-8">
		
		<!--boostrap的三大组件-->
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="luntan.js"></script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
		<script type="text/javascript" src="auto_bg.js" ></script>
		<!--这个网页的样式-->
		<style type="text/css">
	        body { font-size: 15px; line-height: 120%; text-align: center; color:#333; padding: 0; margin: 0;overflow-y: hidden;overflow-x: hidden; background: #060e1b;}
	        a { color: #333; text-decoration: none;}
	        a:hover {transition: all .7s ease;}
	        * { margin: 0; padding: 0; border: none;}
	        .clearfix:after { content:"."; display:block; height:0; clear:both; visibility:hidden}
	        .clearfix { *height:1%;align-content: center;}
	        #liebiao {overflow-y: scroll;text-align: left;width: 540px;height:660px;background-color: white;border-radius: 10px;}
	        .box {  position: relative;  width: 520px; padding: 20px 0}
	        .box:hover .close { display: block;transition: all .2s ease;}
	        .close { display: none; top:0px; right: 0px; width: 28px; height: 28px; border: 1px solid #eee; position: absolute; background: #f2f4f7; line-height: 27px; text-align: center;}
	        .close:hover { background: #c8d2e2; text-decoration: none;transition: all .7s ease;}
	        .head { float: left; width: 60px; height: 60px; margin-right: 10px;}
	        .content { float: left; width: 440px;margin: 50px;}
	        .main { margin-bottom: 10px;}
	        .txt { margin-bottom: 10px;}
	        .user { color: #369; }
	        .pic { margin-right: 5px; width: 200px; border: 1px solid #eee;}
	        .info { height: 20px; line-height: 19px; font-size: 12px; margin: 0 0 10px 0;}
	        .info .time { color: #ccc; float: left; height: 20px; padding-left: 20px; background: url("img/time.png") no-repeat left top;}
	        .info .praise { color: #369; float: right; height: 20px; padding-left: 18px; background: url("img/praise1.png") no-repeat left top;}
	        .info .praise:hover { 
	        	background: url("img/praise2.png") no-repeat left top;transition: all .7s ease;
			}
	        .praises-total { 
	        	margin: 0 0 10px 0; height: 20px; border-radius: 5px; background: url("img/praise1.png") no-repeat 10px 7px #F4F4F4; padding: 5px 0 25px 32px; line-height: 19px;
	        }
	        .comment-box { 
	        	padding: 10px 10px 10px 10px; border-top: 1px solid #eee; resize: none;
	        }
	        .comment-box:hover { 
	        	background: rgb(247, 247, 247);transition: all .7s ease;
			}
	        .comment-box .myhead { float: left; width: 30px; height: 30px; margin-right: 10px;}
	        .comment-box .comment-content { float: left; width: 400px; }
	        .comment-box .comment-content .comment-time { color: #ccc; margin-top: 3px; line-height: 16px; position: relative;}
	        .comment-box .comment-content .comment-praise { display: none; color: #369; padding-left: 17px; height: 20px; background: url("img/praise1.png") no-repeat;  position: absolute; bottom: 0px; right: 44px;}
	        .comment-box .comment-content .comment-operate { display: none; color: #369; height: 20px;  position: absolute; bottom: 0px; right: 5px;margin-left: 20px;}
	        .comment-box .comment-content:hover .comment-praise { display: inline-block;transition: all .7s ease;text-decoration: none;}
	        .comment-box .comment-content:hover .comment-operate { display: inline-block;transition: all .7s ease;text-decoration: none;}
	        .text-box .comment { border: 1px solid #eee; display: block; height: 15px; width: 100%; padding: 5px 10px 20px 10px; resize: none; color: #ccc}
	        .text-box .btn { font-size: 12px; font-weight:normal; display: none; float: right; width: 65px; height: 25px; border: 1px solid #0C528D; color: #fff; background: #4679AC; margin-top: 10px;}
	        .text-box .btn-off { border: 1px solid #ccc; color: #ccc; background: #F7F7F7;}
	        .text-box .word{ display: none; float: right; margin: 0px 10px 0 0; color: #666;}
	        .text-box-on .comment{ height: 50px; color: #333;}
	        .text-box-on .btn{ display: inline;}
	        .text-box-on .word{ display: inline;  margin-top: 16px;}
			
			#liebiao::-webkit-scrollbar{
				display: none;
			}
			
			textarea::-webkit-scrollbar {
				display: none;//去滚动条	
			}
		</style>
	
	</head>
	
	<body>
		<div class="htmleaf-container">
			<header class="htmleaf-header" style="padding-top: 0">
				<!--	发表按钮 连接模态框2-->
			 	<a id="modal-2" href="#modal-container-2" style="margin-left:90%;float: left; padding: 4 4 4 4 " role="button" class="btn" data-toggle="modal" >
			  		<button  type="button"  class="btn btn-default">发表</button>
				</a>
			
				<!--   朋友圈主题内容-->
			    <div style="margin: 23px auto 23px auto; width:540px; height:  700px; background-color: white; border-radius:10px;">
				    <div id="liebiao">
				    
						<!--   多个朋友圈块 连接数据库获取朋友圈需要的数据-->
						<?php 
						include 'param.php';
						
						$conn = new mysqli($servername, $user_name, $password, $dbname);
						
						if ($conn->connect_error){
							die('conn error'.$conn->connect_error);
						}
						
						$content_sql = 'select article_id, article_content, article_picture, article_time, user as au from article';
						$result = $conn->query($content_sql);
						
						if($result->num_rows > 0){
							$len = $result->num_rows;
							$i = 0;
							$all_cont = '';
							while($row = $result->fetch_assoc()) {
								$article_user = $row['au'];
								$article_id = $row['article_id'];
								$article_content = $row['article_content'];
								$article_picture = $row['article_picture'];
								$article_time = $row['article_time'];
								$comment_sql = "select comment_id, comment_content, user as cu from comment where article_id='$article_id'";
								$c_result = $conn->query($comment_sql);
								$div_ = '</div>';
								
						//		获取评论
								$comment_whole = '';
								while($c_row = $c_result->fetch_assoc()){
									$comment_content = $c_row['comment_content'];
									$comment_user = $c_row['cu'];
									$comment_id = $c_row['comment_id'];
									$len_comment = $c_result->num_rows;
									
									$comment_list = '<div class="comment-list">';
									$comment_box ='<div class="comment-box clearfix" user="self">';
									$comment_content1 =  '<div class="comment-content">';
									$comment_text = '<p class="comment-text"><span 	class="user">'.$comment_user.'：</span>'.$comment_content.'</p>';
									$a_co =  '<p class="comment-time"><a href="delete_inf.php?action=delcom&id='.$comment_id.'" class="comment-operate">删除</a></p>';
									$comment_whole = $comment_whole.$comment_list.$comment_box.$comment_content1.$comment_text.$a_co.$div_.$div_.$div_;
								}
								
						
								$box_clearfix =  '<div class="box clearfix">';
								$a_close =  '<a class="close" href="delete_inf.php?action=delart&id='.$article_id.'">×</a>';
								$content= '<div class="content">';
								$d_main = '<div class="main">';
								$p_txt= '<p class="txt">';
								$s_user =  '<span class="user">'.$article_user.':</span><br>
								'.$article_content.'</p>';
								$a_modal= '<a id="modal-'.$i.'" href="#modal-container-1" role="button" class="btn" data-toggle="modal">';
								$i_image = '<img width="100%" height="auto" id="image'.$i.'" src='.$article_picture.' onClick="getsrc(this.id)"/>';
								$a_ = '</a>';
								$info_clearfix =  '<div class="info clearfix">';
								$s_time =  '<span class="time">'.$article_time.'</span>';
						
						//		这里有个评论表单
								$form_head = '<form action="pyqcc.php" role="form" method="post">';	
								$div_tb = '<div class="text-box" name="article-s-comment" >';
								$t_comment =  '<textarea name="text_comment" class="comment" autocomplete="off">评论…</textarea>';
								$token = '<input type="hidden" name="code" value="">';
								$hid_id = '<input type="hidden" name="hid" value='.$article_id.'>';
								$bbo =  '<button type="submit" onclick="getcode()" class="btn btn-off">回 复</button>';
								$form_tail = '</form>';
						//		没有图片的pyq
								if ($article_picture=="user_img/"){
									$all_cont = $box_clearfix.$a_close.$content.$d_main.$p_txt.$s_user.$div_.$info_clearfix.$s_time.$div_.$comment_whole.$form_head.$div_tb.$t_comment.$token.$hid_id.$bbo.$form_tail.$s_word.$div_.$div_.$div_.$all_cont;
								}
								
								
						//		有图片的朋友圈
								else{
									$all_cont =$box_clearfix.$a_close.$content.$d_main.$p_txt.$s_user.$a_modal.$i_image.$a_.$div_.$info_clearfix.$s_time.$div_.$comment_whole.$form_head.$div_tb.$t_comment.$token.$hid_id.$bbo.$form_tail.$s_word.$div_.$div_.$div_.$all_cont;
								}
									$i +=1;
							}
							echo $all_cont;
						}
						else {
						    echo "0 结果";
						}
						
						$conn->close();
						
						?>
				
						<script type="text/javascript">
								function getcode(){
									var token_place = document.getElementsByTagName("code");
									token_place.value = Math.random()*100000;
								}
							
						</script>
						
						<!--模态框获取图片路径的script函数-->
						<script type="text/javascript">
						function getsrc(k){
								var imgObj = document.getElementById(k);
								var modal_imgObj = document.getElementById("modal-image");
								modal_imgObj.src=imgObj.src;
							};
						</script>
					</div>
				</div>
			</header>
		</div>
		<!--
        	作者：1206682774@qq.com
        	时间：2019-06-29
        	描述：星空画布
        <canvas id="canvas"></canvas>
        <script >bg_auto();</script>
       -->
		
		<!--  下面两个是模态框 直接放在body里面才行-->
		<div class="modal fade bs--modal-lg text-center" id="modal-container-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" style="display: inline-block;width: auto;">
						<div class="modal-content">
							<div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body" id="modal-body">
							<img width = "auto" height="100%" style="background-size:cover" id="modal-image" />
							</div>
							
						</div>	
					</div>	
		</div>
						
		<!--这个模态框是发布朋友圈的表单-->
		<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel" style="float: left">
							分享一下
						</h4>
					</div>
					<div class="modal-body">
						<form role="form"  class="form-inline" action="pyqcc.php"  method="post" enctype="multipart/form-data">
							<div class="form-group">
					 			<div class="text-box">
						 			<textarea type="text" name="share" class="comment" rows="10" autocomplete="off" id="share" style="height: 150px; width: 400px; color: #000000"></textarea>
						 			<input type="hidden" name="<?=$code ?>" value="">
								</div>
							</div>
							<p></p>
							<div class="form-group">
					 			<p>上传图片</p>
						 		<input type="file" id="inputFile" name="picture"/>
							</div>
							<input type="submit" onclick="getcode()" value="发送" class="btn btn-default" >
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>		
			</div>	
		</div>
	</body>
</html>