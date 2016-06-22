<?php
$id_tv=$_GET['id_tv'];
$id=$_GET['id'];
$id_sp=$_GET['id_sp'];
$mua_id=$_GET['mua_id'];
$connect=mysql_connect("localhost","root","root")or die("Can not connect database");
mysql_select_db("project2",$connect);
 mysql_query("SET NAMES 'utf8'", $connect);
 {
    {
$sql= "delete from san_pham where id=$id" ;

mysql_query($sql);
}

 {
$sql= "delete from sp_moi where id_sp=$id_sp" ;

mysql_query($sql);
}
 {
$sql= "delete from mua_hang where mua_id=$mua_id" ;

mysql_query($sql);
}
{
$sql= "delete from members where id=$id_tv" ;

mysql_query($sql);
}
}
header("location:admin.php");
exit();
?>