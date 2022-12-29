<?php
include_once('db.inc.php');
include_once('common.php');

if (isset($_GET['id'])) {
	$data = p(2,1,1);
	$id = string::delHtml($data['id']);
	$id = urldecode($id);

	$conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}
	$sql = "SELECT id, name, email FROM users where id = '$id' limit 1";

	$result = $conn->query($sql);
	if ($result) {
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"] . "<br>Name: " . $row["name"] . "<br>" . $row["email"] . "<br>";
			}
		} else {
			echo "0 结果";
		}
	} else {
		echo ($conn->error);
	}

	$conn->close();
} else {
	highlight_file(__FILE__);
}
