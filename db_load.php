<?php
$mysql_host = 's2014156026.chvt1sdp03kh.ap-northeast-1.rds.amazonaws.com';
$mysql_user = 'admin';
$mysql_password = '2014156026';
$mysql_db = 's2014156026';
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

function table_load($conn) {
  $query = 'select * from s2014156026.board';
  $res= mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
    echo('<tr>');
    echo('<td>') .$row['num'];
    echo('</td>');
    echo('<td>') .$row['text'];
    echo('</td>');
    echo('<td>') .$row['name'];
    echo('</td>');
    echo('</tr>');
  }
}

function table_insert($conn) {
	$name = $_POST[name];
	$password = $_POST[password];
	$message = $_POST[message];
  $query = "insert into s2014156026.board values ('$name', '$password', '$message', 'THIS AUTO NUMBER');";
	$res= mysqli_query($conn,$query);
}


if(array_key_exists('submit', $_POST)) {
	table_insert($conn);
}


?>
