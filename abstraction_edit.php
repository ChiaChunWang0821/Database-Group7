<?php
//新增刪除修改的頁面
include_once "db_conn.php";
 
$query="select * from abstractions";// 從info資料庫中選擇所有的資料表
$stmt = $db->prepare($query);
$stmt ->execute();
$result = $stmt->fetchALL();

?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<center> 
	<body>
	
			
		<form id="forml" name="forml" method="post" action="abstraction_addsave.php">
			<p>
				<input type="submit" name="submit" id="submit" value="新增景點資料">
			</p>
		</form>
		
		
		<p></p>
		<form id="formal" name="formal" method="post" action="abstraction_delsave.php">
			<p>
				<input type="submit" name="submit" id="submit" value="刪除景點資料">
			</p>
			
		</form>
		<p></p>
		
		
		<form id="forml_" name="forml_" method="post" action="restaurant_addsave.php">
			
			<p>
				<input type="submit" name="submit" id="submit" value="新增美食資料">
			</p>
		</form>

		
		
		
		
	</body>
	</center>
<form action="index.html" method="get">
			</form>