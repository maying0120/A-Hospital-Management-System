<?php

$con = mysql_connect("localhost","root","");
if(!$con)
{
  die('数据库连接失败'.mysql_error());
}

if(!$con)
{
 die('数据库连接失败'.mysql_error());
}
else
{
   mysql_query("set names utf8");
   mysql_select_db("F196083B",$con);
}
?>