<?php $title="Đăng ký thành viên |  Shop bán hành online"; ?>
<?php require_once("template/header.php");?>
<?php require_once("template/top-header.php"); ?>
<div class="header">
		<div class="header-center">
			<div class="header-center-logo">
				<a href="index.php"><img src="images/logo/max-store.png"></a>
			</div><!--header-center-logo-->
			<div class="header-center-search">
				<form method="GET" id="form-search">
					<input type="search" name="search" placeholder="Nhập sản phẩm bạn cần tìm">
					<button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
				</form>
			</div><!--header-center-search-->
			<div class="header-center-cart">
				<i class="fa fa-shopping-cart"></i> Giỏ hàng
			</div><!--header-center-cart-->
		</div><!--header-center-->
	</div><!--header-->
	<div style="clear:left;"></div>
	<div class="menu">
		<div class="menu-center">
			<div class="menu-category">
				<i class="fa fa-bars"></i> DANH MỤC <i style="float:right;line-height:70px;" class="fa fa-caret-down"></i>
			</div><!--menu-category-->
			<div class="menu-info">
				<ul>
					<li><a href="index.php">TRANG CHỦ</a></li>
					<li><a href="#">GIÓI THIÊỤ</a></li>
					<li><a href="#">SẢN PHÂM</a></li>
					<li><a href="#">TIN TƯC</a></li>
					<li><a href="#">LIÊN HẸ</a></li>
				</ul>
			</div><!--menu-info-->
			
		</div><!--menu-center-->
	</div><!--menu-->
	<div style="clear:left;"></div>
	<div class="chuyen-muc">
		<ul>
			<li><a href="#">Giang</a>
				<ul class="sub-menu">
					<li><a href="#"><i class="fa fa-bars"></i> Giang</a></li>
					<li><a href="#"> <i class="fa fa-user-o"></i> Giang</a></li>
					<li><a href="#"> <i class="fa fa-user"></i> Giang</a></li>
					<li><a href="#"> <i class="fa fa-user"></i> Giang</a></li>
				</ul>
			</li>
			<li><a href="#">Giang</a></li>
			<li><a href="#">Giang</a></li>
			<li><a href="#">Giang</a></li>

		</ul>
	</div>
	<div class="top-title">
		<div class="top-title-center">
			<ul>
				<li><a href="/">TRANG CHỦ</a></li>
				<li style="width:3%;"><i class="fa fa-angle-right"></i></li>
				<li><a href="dnag-ky.php">ĐĂNG KÝ</a></li>
			</ul>
		</div><!--top-center-->
	</div><!--top-title-->
	<div class="main">
		<form method="post" style="width:50%;margin:auto;">
		<h1  style="width:100%;height:50px;line-height:50px;color:#333;font-size:25px;">Đăng ký tài khoản</h1>
		<label>
			<h4>Tên tài khoản</h4>
			<input type="text" name="username" placeholder="Tên đăng ký *">
		
		</label>
		<label>
			<h4>Mật khẩu</h4>
			<input type="password" name="password" placeholder="Mật khẩu*">
		</label>
		<label>
			<h4>Nhập lại mật khẩu</h4>
			<input type="password" name="pasword1" placeholder="Mật khẩu*">
		</label>
		<label>
			<h4>Email</h4>
			<input type="text" name="email" placeholder="explace@gmail.com *">
		</label>
		<label>
			<h4>Giới tính </h4>
			<input type="radio" name="sex" value="1">Nam
			<input type="radio" name="sex" value="0">Nữ
		</label>
		<label>
			<h4>Ngày sinh</h4>
			<select name="ngay">
				<option>-- Ngày --</option>
				<?php 
					for($i=1;$i<=31;$i++):
				 ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php 
					endfor;
				 ?>
			</select>
			<select name="thang">
				<option>-- Tháng --</option>
				<?php 
					for($i=1;$i<=10;$i++):
				 ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php 
					endfor;
				 ?>
			</select>
			<select name="nam">
				<option>-- Năm--</option>
				<?php 
					for($i=1960;$i<=DATE('Y');$i++):
				 ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php 
					endfor;
				 ?>
			</select>
		</label><br><br>
		<center><button type="submit" class="btn-dang-nhap" style="width:30%;">Đăng ký</button></center>
	</form>
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>