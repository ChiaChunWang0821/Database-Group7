<?php
//連到查詢、新增刪除修改
include_once "db_conn.php";

if($_POST['name']!=''){
 $name = $_POST['name'];
 $location = $_POST['location'];
 $cuisine = $_POST['cuisine'];
 $price_level = $_POST['price_level'];
 
 $res = "insert into restaurant values( '$name' , '$location' , '$cuisine' , '$price_level' )";

 
 $stmt_r = $db->prepare($res);
 $stmt_r -> execute();
 $result_r = $stmt_r->fetchALL();

 
}
else{
  $res = "select * from restaurant";
  $stmt_r = $db->prepare($res);
  $stmt_r -> execute();
  $result_r = $stmt_r -> fetchALL();
  
}

?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<center> 
	<body>
	
		
		<form id="forml" name="forml" method="post" action="">
			<p>
			
			<br>
			<br>
			店家名稱:<input type="text" name="name" value="" />
			地點:<input type="text" name="location" value="" />
			菜系:<input type="text" name="cuisine" value="" />
			價位等級:<input type="text" name="price_level" value="" />

			<br><br><input type="submit" name="submit" id="submit" value="確定新增美食" />
			</p>
		</form>
		<p></p>
		
		
		
		</body>
	</center>
	
</html>
<form action="index.html" method="get">
			</form>