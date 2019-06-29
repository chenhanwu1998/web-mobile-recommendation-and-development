<?php
include 'param.php';

$conn1 = new mysqli($servername, $user_name, $password, $dbname);
	if ($conn1->connect_error) {
    die("连接失败: " . $conn1->connect_error);
}

$action=$_GET["action"];
	
if($action=="delart"){
	$art_id = $_GET["id"];
	$art_sql = "delete from article where article_id='$art_id'";
	if (mysqli_query($conn1, $art_sql)) {
		header('Location: pyq.php');
		exit;
	}
}
else {
	$com_id = $_GET["id"];
	$com_sql = "delete from comment where comment_id = '$com_id'";
	if (mysqli_query($conn1, $com_sql)) {
	header('Location: pyq.php');
	exit;
	}
}

$conn1->close();
?>