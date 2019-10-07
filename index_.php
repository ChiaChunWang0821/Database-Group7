<?php
//連到查詢、新增刪除修改
include_once "db_conn.php";
 
$query="select * from abstractions";// 從info資料庫中選擇所有的資料表
$stmt = $db->prepare($query);
$stmt ->execute();
$result = $stmt->fetchALL();



if($_POST['keyWord']!=''){
 $keyWord=$_POST['keyWord'];
 $data="select * from abstractions where spot_name like '%$keyWord%' or location like '%$keyWord%' or spot_type like '%$keyWord%' or near_accommodation like '%$keyWord%'";
 $stmt_ = $db->prepare($data);
 $stmt_ ->execute();
 $result_ = $stmt_->fetchALL();
}else{
  $data="select * from abstractions";
  $stmt_ = $db->prepare($data);
  $stmt_ ->execute();
  $result_ = $stmt_->fetchALL();
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
			關鍵字:<input type="text" name="keyWord" value="" />
				<input type="submit" name="submit" id="submit" value="搜尋">
			</p>
		</form>
		<p></p>
		
		<table width="700" border="1">
		<tr>
			<td >景點名稱</td>
			<td >地點</td>
			<td >類型</td>
			<td >距離最近的民宿</td>
		</tr>
		<?php
			for($j=0;$j<count($result_);$j++){
		?>
			<tr>
			<?php
				echo "<tr>";
				echo "<td>".$result_[$j]['spot_name']."</td>";
				echo "<td>".$result_[$j]['location']."</td>";
				echo "<td>".$result_[$j]['spot_type']."</td>";
				echo "<td>".$result_[$j]['near_accommodation']."</td>";
				echo "</tr>";
			?>
			</tr>
		<?php
		}
		?>
		</table>
		
					
		<form action="abstraction.php" method="post">
	
		<!--名稱:<input type="text" name="spot_name">-->
		<br>
		<br>
		地點:<input type="text" name="location">
		<br>
		<br>
		類型:<input type="text" name="spot_type">
		<br>
		<br>
		<!--附近民宿:<input type="text" name="near_accommodation"-->
		<input type="submit" name="submit" value="景點資訊查詢">
		</form>
		
		
		<form action="abstraction_edit.php">
		<br>
		<br>
		<input type="submit" name="submit" value="編輯景點資訊">
		<br>
		<br>
		</form>
		
		
	</body>
	</center>

</html>