<?php
	//可以讓店家查看已經可以排入服務地區的景點名稱
	include_once "db_conn.php";
	echo "<table border = '1'>
	<tr>
	<th>景點名稱</th>
	<th>地點</th>
	<th>類型</th>
	<th>距離最近的民宿</th>
	</tr>";
	
	//$spot_name = $_POST['spot_name'];
	$location = $_POST['location'];
	$spot_type = $_POST['spot_type'];
	//$near_accommodation = $_POST['near_accommodation'];
	
	//$query = "select * from abstractions where spot_name='?', location='?', spot_type='?', near_accommodation='?'";
	//$query = "select * from abstractions where spot_name = '" . $spot_name . "'and location = '" . $location . "'and spot_type = '" . $spot_type . "'and near_accommodation = '" . $near_accommodation . "'";
	$query = "select * from abstractions where location = '" . $location . "'and spot_type = '" . $spot_type . "'";
	$stmt = $db->prepare($query);
	
	$stmt ->execute();
	$result = $stmt->fetchALL();
	
	for($i=0;$i<count($result);$i++)
	{
		echo "<tr>";
		echo "<td>".$result[$i]['spot_name']."</td>";
		echo "<td>".$result[$i]['location']."</td>";
		echo "<td>".$result[$i]['spot_type']."</td>";
		echo "<td>".$result[$i]['near_accommodation']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	///////////////////////我是分隔線(以上是景點查詢)//////////////////////////////
	
	echo "<table border = '1'>
	<tr>
	<th>附近住宿</th>
	<th>平均每晚價格</th>
	</tr>";
	
	$location = $_POST['location'];
	
	$query = "select name, perNight_price from accommodation where location = '" . $location . "'";
	$stmt = $db->prepare($query);
	$stmt->execute();
	
	$result = $stmt->fetchALL();
	
	for($j=0;$j<count($result);$j++)
	{
		echo "<tr>";
		echo "<td>".$result[$j]['name']."</td>";
		echo "<td>".$result[$j]['perNight_price']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	////////////////////////我是分隔線(以上是住宿查詢)//////////////////////////////
	
		
	echo "<table border = '1'>
	<tr>
	<th>附近美食</th>
	<th>菜系</th>
	<th>價位等級</th>
	</tr>";
	
	$location = $_POST['location'];
	
	$query = "select name, cuisine, price_level from restaurant where location = '" . $location . "'";
	$stmt = $db->prepare($query);
	$stmt->execute();
	
	$result = $stmt->fetchALL();
	
	for($j=0;$j<count($result);$j++)
	{
		echo "<tr>";
		echo "<td>".$result[$j]['name']."</td>";
		echo "<td>".$result[$j]['cuisine']."</td>";
		echo "<td>".$result[$j]['price_level']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
?>
<form action="index.html" method="get">
			
			</form>