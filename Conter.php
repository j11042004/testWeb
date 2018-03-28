<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>計數器</title>
	</head>
	<body>
		
	</body>
	</html>	


	<?php 
		error_reporting(0);
		session_start();

		$oldCount=file_get_contents("count.txt");
		// 紀錄是否為同一人，清除 cookie 就會刪除 session data
		if (!$_SESSION["lock"]) {
			$oldCount+=1;
			file_put_contents("count.txt", $oldCount);
			$_SESSION["lock"]=true;
		}
		
		echo "目前訪客有：".$oldCount."人";
	 ?>