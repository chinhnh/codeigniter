<?php
session_start();

require ("./db_config.php");


	if ( $_SESSION['user_id'] )
{
    $user_id = intval($_SESSION['user_id']);
    $sql_query = @mysql_query("SELECT * FROM tlb_thanhvien WHERE id='{$user_id}'");
    $row = @mysql_fetch_array( $sql_query );

    if ($row['admin']=="1") {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trang Quản trị của Admin</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
    <link href="./sites/css/login.css" rel="stylesheet" type="text/css" />
   
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Quản trị admin</p></div>
		<div><p align="right" class="login_text"><a href="logout.php" class="hrlink">
			Xin chào <?=$_SESSION['fullname'];?></a></div>
		</td>
	</tr>
    	<tr>
		<td>
			<p align="justify" style="margin-left:20px; margin-right:22px; margin-top:12px; margin-bottom:12px">
            
			<a href="index.php">Quay lại</a><br /><br />
           
		</td>
	</tr>
    
   <tr><td> 

</td></tr>
</table>

</body>

</html>
<?php
	}
else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trang Quản trị của Administrator</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
    <link href="./sites/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>



<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Thông tin</p></div>
		<div><p align="right" class="login_text"><a href="logout.php" class="hrlink">
			Xin chào <?=$_SESSION['fullname'];?></a></div>
		</td>
	</tr>
	<tr>
		<td>
<p align="justify" style="line-height: 16px; margin: 8px 12px">Bạn không phải là Admin. Bạn không thể xem gì ở đây cả </p>
			<p align="justify" style="margin-left:252px; margin-right:22px; margin-top:12px; margin-bottom:12px">
			<a href="index.php">Quay về trang chủ</a>
		</td>
	</tr>
</table>

</body>

</html>

<?php
	}

}
 else
{
require_once ("./dangnhap.php");
}
?>
<style>

.pro{
border:1px solid red;
margin:1px;
width:172px;
text-align: center;
float:left;
margin-left:11px;
margin-top: 10px;
height:275px;

border-radius: 8px;
   -moz-border-radius: 8px; 
	-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-webkit-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-moz-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);

}
.pro2{
border:1px solid red;
margin:1px;
width:210px;
float:left;
margin-left:15px;
margin-top: 15px;
text-align: center;
height:240px;

border-radius: 8px;
   -moz-border-radius: 8px; 
	-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-webkit-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-moz-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);

}
p img{
    margin-top: 5px;
   width:160px;
    height:168px;
   vertical-align:middle ;
   margin-bottom: 6px;
}


a{
color:#666666;
text-decoration:none;
font-weight:900;
font-size: 14px;

}
form{
    text-align: center;
}
div.khung_abc__nd3{
     width: 950px;
     height:625px;
     margin-left: 20px;
     margin-bottom: 15px;
     border: 1px solid red;
    margin-left:220px;
    
}
div.khung_abc__td3{
  height: 50px;
    width:750px;
    margin-top: 25px;
    background: url(../imgs/nd.png);
    margin-left: 320px;
}
div.khung_abc__td3 span{
     color: yellow;
	line-height:50px;
	margin-left:350px;
	cursor:default;
	font-weight:bold;
    font-size: 18px;
    
}
div.khung_abc__nd3{border-radius: 20px;
   -moz-border-radius: 20px; 
	box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-webkit-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);
	-moz-box-shadow: 2px 2px 6px rgba(0,0,0,0.6);}
</style>
