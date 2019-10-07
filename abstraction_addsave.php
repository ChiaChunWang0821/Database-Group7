<?php
//連到查詢、新增刪除修改
include_once "db_conn.php";

if($_POST['spot_name']!=''){
 $spot_name = $_POST['spot_name'];
 $location = $_POST['location'];
 $spot_type = $_POST['spot_type'];
 $near_accommodation = $_POST['near_accommodation'];
 $perNight_price = $_POST['perNight_price'];
 
 
 $data="insert into abstractions values( '$spot_name' , '$location' , '$spot_type' , '$near_accommodation' )";
 $accommodation = "insert into accommodation values( '$location' , '$near_accommodation' , '$perNight_price' )";

 
 $stmt_ = $db->prepare($data);
 $stmt_ ->execute();
 $result_ = $stmt_->fetchALL();
 
 $stmt_a = $db->prepare($accommodation);
 $stmt_a -> execute();
 $result_a = $stmt_a->fetchALL();

 
}
else{
  $data="select * from abstractions";
  $stmt_ = $db->prepare($data);
  $stmt_ ->execute();
  $result_ = $stmt_->fetchALL();
  
  $accommodation="select * from accommodation";
  $stmt_a = $db->prepare($accommodation);
  $stmt_a -> execute();
  $result_a = $stmt_a -> fetchALL();
  

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
			景點名稱:<input type="text" name="spot_name" value="" />
			地點:<input type="text" name="location" value="" />
			類型:<input type="text" name="spot_type" value="" />
			距離最近的民宿:<input type="text" name="near_accommodation" value="" />
			<br>
			<br>
			民宿每晚平均價格:<input type="text" name="perNight_price" value="" />
			<br><br><input type="submit" name="submit" id="submit" value="確定新增" />
			</p>
		</form>
		<p></p>
		
		
		</body>
	</center>
	
</html>
<form action="index.html" method="get">
			</form>