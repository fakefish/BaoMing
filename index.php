<?php
	include "config.php";
	if(!$_GET[page])
	{
		$page=1;
	}
	else
	{
		$page=$_GET[page];
	}
	$sql="select id from $t_name";
	$result=mysql_query($sql,$con);
	$reg_num=mysql_num_rows($result);
	$p_num=12;
	$page_z=ceil($reg_num/$p_num);
	//cookie
/*	$flag=false;
	if($_COOKIE["delflag"])
	{
		$flag=true;
	}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Register Web</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

</head>
<body>
<div id="wrapbg">
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0025_chinese_hong_kong.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<h1>YPcollage ACM Comprtition Register List</h1>
<div class="wrap">
	<div id="left">
		<table id="list">
		<?php
			if($reg_num==0)
			{
				echo "<div id=\"none\"><span></span></div>";
			}
			else
			{
				echo "<thead>
						<th>Name</th>
						<th>Sex</th>
						<th>StudentID</th>
						<th>Class</th>
					</thead>";
				$temp=($page-1)*$p_num;
				$sql="select * from ".$t_name." limit $temp,$p_num";
				mysql_query("SET NAMES 'utf8'");
				$result=mysql_query($sql,$con);
				while($detail=mysql_fetch_array($result))
				{
					echo "<tr>
							<td><a class=\"delete\" onclick=\"return del()\" href=\"edit.php?action=delete&id=".$detail[id]."\"></a><span class=\"stuName\">".$detail[stu_name]."</span></td> 
							<td>".$detail[stu_sex]."</td>
							<td>".$detail[stu_id]."</td>
							<td>".$detail[stu_class]."</td>
						</tr>";
					//$max=
				}
			}
			?>

		</table>
		<div id="bottom">
			<a id="button">Add Your Name</a>
			<div>
				<?php
					if($page_z>1)
					{
						$pre_page=$page-1;
						$next_page=$page+1;
						if($page>1)
						{
							echo "<a href=index.php?page=1>First Page</a> | ";
						}
						if($pre_page<1)
						{
							echo "Previous Page |";
						}
						else
						{
							echo "<a href=index.php?page=".$pre_page.">Previous Page</a> |";
						}
						if($next_page>$page_z)
						{
							echo "Next Page";
						}
						else
						{
							echo "<a href=index.php?page=".$next_page.">Next Page</a>";
						}
					}
				?>
			</div>
		</div>
	</div>
	<div id="register">
		<div id="back"></div>
		<form action="add.php" method="post" id="regForm" name="regForm">
			<ul>
				<li><label for="stu_name">Your name:</label><input type="text" name="stu_name" id="stu_name" class=":required"  /></li>
				<li><label for="stu_sex" >Your sex:</label><input type="text" name="stu_sex" id="stu_sex" class=":required"  /></li>
				<li><label for="stu_id">Your id:</label><input type="text" name="stu_id" id="stu_id" class=":required :integer: :length;10	" /></li>
				<li><label for="stu_class">Your class:</label><input type="text" name="stu_class" id="stu_class" class=":required" /></li>
			</ul>
			<!--<input type="submit" />-->
		</form>
		<div><a id="submit"></a></div>
	</div>
</div>
<div id="footer">
	<div>Version 1.13 Powerd By <a href="http://fakefish.me" target="_blank">Fakefish</a></div>
</div>
</div>

<script type="text/javascript" src="js/other.js"></script>
</body>
</html>