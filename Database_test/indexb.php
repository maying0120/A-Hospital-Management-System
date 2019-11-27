<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" type="text/css" href="mystyle.css" rel="external nofollow" >
</head>
<body>
<script type="text/javascript" src="indexb.js"></script>
<center>
<!--banner-->
<table width="798" border="0" cellpadding="0" cellspacing="0">
  <tr>
      <td height="112" background="images/banner.jpg"></td>
  </tr>
</table>
<?php

include_once("dbf.php");
?>
<table width="780" border="0" cellpadding="0" cellspacing="0">
<form name="form1" id="form1" method="post" action="del.php">
 <tr>
     <td height="20" width="5%" class="top"> </td>
  
  <td width="5%" class="top">deid</td>
  <td width="30%" class="top">dename</td>
     <td width="10%" class="top">operation</td>

 </tr>
<?php
 
    /*mysql_select_db("disease",$con);
     $result = mysql_query ("select * from disease");
      
    echo "<table border='auto' width ='auto' height='auto'>
	<tr>
	<th>DISEASE ID</th><th>DISEASE NAME</th>
	<th>";*/
	$sqlstr1 = "select * from disease order by deid";//按id的升序查询表tb_demo02的数据
    $result = mysql_query($sqlstr1,$con);//执行查询语句


 while ($rows = mysql_fetch_array($result))
 {
 ?>
<tr>
  <td height="25" align="center" class="m_td">
    <input type=checkbox name="chk[]" id="chk" value=".$rows['deid'].">
    </td>
    <td height="25" align="center" class="m_td"><?php echo $rows['deid'];?></td>
    <td height="25" align="center" class="m_td"><?php echo $rows['dename'];?></td>
    <td class="m_td"><a href="#" rel="external nofollow" onClick="del(<?php echo $rows['deid'];?>)">del</a></td>
 </tr>
<?php
    }
?>




<tr>
    <td height="25" colspan="7" class="m_td" align="left">  </td>
</tr>
</form>
</table>
<!--show-->
 <table width="798" border="0" cellpadding="0" cellspacing="0">
  <tr>
   <td height="48" background="images/bottom.jpg"> </td>
  </tr>
</table>
</center>
</body>
</html>