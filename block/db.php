<?php 
$db = mysql_connect('localhost','root','');
if(!$db){
	die('Baza bilan aloqa yo`q'.mysql_error());
}
else{
	mysql_select_db('lang',$db);
}
	  session_start();
/* $sdb = mysql_query("select * from subwords");
$i = 0;
while ($msdb = mysql_fetch_array($sdb)){
	$sword[$i] = $msdb['subword'];
	$i ++;
}*/
?>