<?php
	include "config.php";
	if($_GET[action]=="delete")
	{
		$id=$_GET[id];
		mysql_select_db($dataname,$con);
		$sql="delete from $t_name where id='$id'";
		mysql_query($sql,$con);
		header("Location:index.php");
	}
//	echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">";
	exit();
?>