<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(isset($title)){ echo $title; }else{echo "Trang quản trị  | Shop bán hàng online";}?>

	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/bxslider-4-master/dist/jquery.bxslider.css"/>
	<script src="js/jquery.js"></script>
	<script src="../js/tinymce1/tinymce/js/tinymce/tinymce.min.js"></script>
	<script src="js/bxslider-4-master/dist/jquery.bxslider.min.js"></script>
	 <script src="js/main.js"></script>
	 <script>
		tinymce.init({
		  selector: 'textarea',
		  elements : "textarea_full",
		  height: 300,
		  theme: 'modern',
		  plugins: 'image code',
		  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | image | code',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
	 	});
	</script>
</head>
<body>
	<div class="header-top">
		<div class="logo">
			<div class="logo-center">
				<a href="../"><img src="../images/logo/logo.png"></a>
			</div>
		</div><!--logo-->
	</div><!--header-top-->
	<div class="main">