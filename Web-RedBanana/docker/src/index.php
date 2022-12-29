<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="jquery.js"></script>
	<title>Red Banana</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		html {
			width: 100%;
			height: 100%;
		}

		body {
			width: 100%;
			height: 100%;
			background: #78899b;
			/* position: relative; */
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#main {
			width: 390px;
			height: 440px;

			display: flex;
			flex-direction: column;
		}

		#up {
			width: 100%;
			display: flex;
			flex: 1;
			flex-direction: column;
			background: #4cb6ac;
			border-top-left-radius: 8px;
			border-top-right-radius: 8px;
			justify-content: center;
			align-items: center;
		}

		#down {
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex: 2;
			background: #fff;
			border-bottom-left-radius: 8px;
			border-bottom-right-radius: 8px;
			position: relative;
		}

		#form {
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}


		#btn_upload {
			width: 150px;
			height: 50px;
			color: #fff;
			background: #25a6b9;
			border: 0;
			border-radius: 5px;
			cursor: pointer;
		}

		#btn_upload:hover{
			background: #007d9a;
		}


		@font-face {
			font-family: Num;
			src: url("logo.ttf")
		}

		.txt {
			font-family: Num, sans-serif;
			color: #fff;
			font-size: 40px;
		}

		#tips {
			position: fixed;
			bottom: 10px;
		}


		.upload {
			padding: 4px 10px;
			height: 20px;
			line-height: 20px;
			position: relative;
			text-decoration: none;
			color: #4d90d3;
			cursor: pointer;
		}

		.replyFileid {
			width: 100%;
			position: absolute;
			overflow: hidden;
			right: 0;
			top: 0;
			filter: alpha(opacity=0);
			-moz-opacity: 0;
			-khtml-opacity: 0;
			opacity: 0;
			cursor: pointer;
		}

		.upload span {
			color: #999;
			cursor: pointer;
		}


		.head-img {
			text-align: center;
		}

		#img-upload {
			display: none;
		}
	</style>
</head>

<body>
	<div id="main">
		<div id="up">
			<h1 class="txt">Red Banana</h1>
			<b>请上传你的头像 </b>
		</div>

		<div id="down">
			<script>
				//选择文件获取文件名称
				function getfilename(el) {
					var _el = el.files;
					var _name = "";
					for (var i = 0; i < _el.length; i++) {
						if (i == _el.length - 1) {
							_name += _el[i].name
						} else {
							_name += _el[i].name + '、'
						}
						$('.upload span').html(_name);
					}
				}
			</script>
			<form id="form" enctype="multipart/form-data" method="post" action="up.php">
				<a href="javascript:void(0);" class="upload">选择文件 > <span>未选择任何文件</span>
					<input class="replyFileid" type="file" name="upload_file" multiple="multiple" onchange="getfilename(this);" />
				</a>
				<button  id="btn_upload" type="submit" name="submit">上传</button>
			</form>
		</div>
	</div>


	<p id="tips">Tan师傅不太会做页面，请见谅！另：我把服务器部署在了英国</p>



</body>

</html>