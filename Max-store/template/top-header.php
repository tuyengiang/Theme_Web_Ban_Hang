<div class="dang-nhap">

			<div class="login">
				<div class="exit"><i class="fa fa-times"></i></div>
				<h1>Đăng nhập vào hệ thống</h1>
				<form method="post" class="form-login">
					<label>
						<h4>Tên đăng nhập</h4>
						<?php if(!empty($mess1)) echo $mess1; ?>
						<input type="text" name="username" placeholder="Tên đăng nhập">
					</label>
					<label>
						<h4>Mật khẩu</h4>
						<?php if(!empty($mess2)) echo $mess2;?>
						<input type="password" name="password" placeholder="Mật khẩu">
					</label>
					<center>
						<input type="hidden" name="dang-nhap" value="dang-nhap">
						<button type="submit" class="btn-dang-nhap">Đăng nhập</button>
					</center>
				</form>
				<ul>
					<li><a href="dang-ky.php">Đăng ký tài khoản</a></li>
				</ul>
			</div><!--login-->
	
	</div><!--dang-nhap-->
<div class="top">
		<div class="top-center">
			<div class="top-center-login">
				<ul>
					<li><a  class="click-login">Đăng nhập</a></li>
					<li><a href="dang-ky.php">Đăng ký</a></li>
				</ul>
			</div><!--top-center-login-->
		</div><!--top-center-->

</div><!--top-->