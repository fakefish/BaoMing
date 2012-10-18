
<?php
	include "config.php";
//	echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">";
	mysql_select_db($dataname,$con);
	mysql_query("SET NAMES 'utf8'");
	$sql="INSERT INTO ".$t_name."(stu_name,stu_sex,stu_id,stu_class) VALUES('$_POST[stu_name]','$_POST[stu_sex]','$_POST[stu_id]','$_POST[stu_class]')";
	if(!mysql_query($sql,$con))
	{
		die('Error '.mysql_error());
	}
	else
	{
	/*	$id=
		$time=172800;
		setcookie("$id",$delflag,$time); */
		echo "<script type=\"text/javascript\">self.location='index.php'</script>"; 
	}
	mysql_close($con);
	exit();	
?>