<?php
$mysql_host = 's2014156026.chvt1sdp03kh.ap-northeast-1.rds.amazonaws.com';
$mysql_user = 'admin';
$mysql_password = '2014156026';
$mysql_db = 's2014156026';
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);


function table_delete($conn) {
	$num = $_POST[d_num];
	$password = $_POST[d_password];
  $query = "delete from s2014156026.board where num='$num' and password='$password';";
	$res= mysqli_query($conn,$query);
}


if(array_key_exists('delete', $_POST)) {
	table_delete($conn);
}


?>
