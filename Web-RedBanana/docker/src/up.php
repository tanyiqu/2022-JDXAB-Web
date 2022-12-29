
<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
	if (isset($_GET['key'])){
		if($_GET['key'] === '51d0a99c-752e-11ed-b5a7-44af28a75237')
		highlight_file(__FILE__);
	}
	
	include('functions.php');
	if (isset($_POST['submit'])){
		$file_name = trim($_FILES['upload_file']['name']);
		$file_ext = strrchr($file_name, '.');
		$file_ext = strtolower($file_ext);

		if (!in_array($file_ext, $black_list)){
			$temp_file = $_FILES['upload_file']['tmp_name'];
			$img_path = 'upload'.'/'.date("His").rand(100,999).$file_ext;

			if (move_uploaded_file($temp_file, $img_path)) {
	                $is_upload = true;
	        } else {
	            $msg = '上传出错！';
	        }
		}else {
	        $msg = 'This file type cannot be uploaded';
	    }
	}

    if($msg != null){
        echo "提示：".$msg;
    }
	if($is_upload){
        echo 'ok';
    }

?>

<!--?key-->