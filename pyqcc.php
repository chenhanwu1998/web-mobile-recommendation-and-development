<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];

include 'param.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$conn1 = new mysqli($servername, $user_name, $password, $dbname);
	if ($conn1->connect_error) {
    	die("连接失败: " . $conn1->connect_error);
	}
	//	朋友圈内容不空
	if(!empty($_POST["share"])&&!empty($_FILES["picture"])){
		$share = $_POST["share"];
		//上传文件	将文件放入目录下
		$picture = $_FILES["picture"];
		$filename1 = "user_img/".$picture["name"];
		$file_name = iconv("UTF-8", "gb2312", $picture["name"]);
		if (!$_FILES["picture"]["error"]>0){
			if(!file_exists("user_img/".$file_name)){
				move_uploaded_file($_FILES["picture"]["tmp_name"], 'user_img/'.$file_name);
			}
		}
		
		//	将数据保存进数据库 数据库名字 mobile_inf
		$username;
		date_default_timezone_set('PRC'); //设置中国时区 
		$_date = date("Y-m-d h:i");
		
		$sql1 = "INSERT INTO article (user, article_content, article_picture, article_time) VALUES ('$username', '$share', '$filename1','$_date')";
	 
		if (mysqli_query($conn1, $sql1)) {
			header('Location: pyq.php');
			exit;
		} 
		else {
	    	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn1);
		}
	}
		
	//评论内容不空
	if (!empty($_POST["text_comment"])){
		//	获取评论内容 评论人以及评论的朋友圈id
		$text_comment = $_POST["text_comment"];
		$user_commment = $username;
		$art_id = $_POST["hid"];
		$conn1 = new mysqli($servername, $user_name, $password, $dbname);
		if ($conn1->connect_error) {
	    	die("连接失败: " . $conn1->connect_error);
		}
	
		$sql1 = "INSERT INTO comment (comment_content, user, article_id) VALUES ('$text_comment', '$user_commment', '$art_id')";
		if (mysqli_query($conn1, $sql1)) {
			header('Location: pyq.php');
			exit;	
		} 
		else {
		    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn1);
		}
	}
		$conn1->close();
}
?>