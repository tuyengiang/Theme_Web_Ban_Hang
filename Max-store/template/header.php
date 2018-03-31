<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if($_POST["dang-nhap"]=="dang-nhap"){
			$username=$_POST["username"];
			$password=$_POST["password"];
			if($username=="" || $password==""){
				$mess1="Mời bạn nhập tên đăng nhập";
				$mess2="Mời bạn nhập mật khẩu";
			}else{
				if($username=="admin" && $password=="123456"){
					header('location:admin/admin.php');
				}else{
					$mess3="Tài khoản hoặc mật khẩu không đúng !!!";
				}
			}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(isset($title)){ echo $title; }else{echo "Trang Chủ |  Trang bán hàng online việt nam";}?>

	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/bxslider-4-master/dist/jquery.bxslider.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/bxslider-4-master/dist/jquery.bxslider.min.js"></script>
	 <script src="js/main.js"></script>
</head>
<body>