<?php
	$host="localhost";
	$user="root";
	$pass="root";
	$dataname="reg_db";
	$t_name="stu_list";
	$con=mysql_connect($host,$user,$pass);
	if(!con)
	{
		die('Could not connect:'.mysql_error());
	}
	$sql="CREATE DATABASE ".$dataname;
	mysql_query($sql,$con);
	mysql_select_db($dataname,$con);
	$sql="CREATE TABLE ".$t_name."(
		id int(6) not null auto_increment primary key,
		stu_name varchar(40),
		stu_sex varchar(10),
		stu_id char(10),
		stu_class varchar(40)
		)";
	mysql_query($sql,$con);
?>