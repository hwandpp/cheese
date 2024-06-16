<?php
	if(isset($_FILES['userfile'])){
        // 定义不允许的文件扩展名
        $deny_ext = array("php","php4","php3","php2","html","htm","phtml","jsp","jspa","jspx","jsw","jsv","jspf","jtml","asp","aspx","asa","asax","ascx","ashx","asmx","cer","swf","htaccess");

		// 获取上传的文件名和文件类型
		$file_name = trim($_FILES['userfile']['name']);
		$file_type = $_FILES['userfile']['type'];
        
		// 检查文件类型是否为GIF图像
		if($file_type != "image/gif"){
			echo "Sorry, we only allow uploading GIF images";
			exit;
		}

		// 获取文件扩展名并转换为小写
		$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

		// 检查文件扩展名是否在黑名单中
		if (in_array($file_ext, $deny_ext)) {
			echo "<div class='message'>抱歉，不允许上传此类型的文件</div>";
			exit;
		}

		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($file_name);

		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
			echo "<div class='message'>文件有效，并成功上传。<br>" . $uploadfile . "</div>";
		} else {
			echo "<div class='message'>文件上传失败。</div>";
		}
	}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>简单的文件上传</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background: linear-gradient(135deg, #f3ec78, #af4261);
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}
		.container {
			background: rgba(255, 255, 255, 0.8);
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			text-align: center;
		}
		h1 {
			margin-bottom: 20px;
			color: #333;
		}
		input[type="file"] {
			margin-bottom: 10px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		.message {
			margin-top: 20px;
			padding: 10px;
			background-color: #f8d7da;
			color: #721c24;
			border: 1px solid #f5c6cb;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>简单的文件上传</h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="userfile" value="" />
			<input type="submit" name="submit" value="上传" />
		</form>
	</div>
</body>
</html>
