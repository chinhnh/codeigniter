<?php
session_start();

require ("./db_config.php");


	if ( $_SESSION['user_id'] )
{
    $user_id = intval($_SESSION['user_id']);
    $sql_query = @mysql_query("SELECT * FROM tlb_thanhvien WHERE id='{$user_id}'");
    $member = @mysql_fetch_array( $sql_query );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trang Thông tin Thành viên</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Thông Tin</p></div>
		<div><p align="right" class="login_text"><a href="logout.php" class="hrlink">
			Xin chào <?=$_SESSION['fullname'];?></a></div>
		</td>
	</tr>
	<tr>
		<td>
			<p align="justify" style="margin: 12px 22px;"><b><span style="font-size: 16px;">
			Thông tin Thành viên</span></font></b></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Mã ID: <?=$member['id'];?></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Họ và tên:  <?=$member['fullname'];?></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Tài khoản:  <?=$member['user'];?></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Email:  <?=$member['email'];?></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Ngày sinh:  <?=$member['birthday'];?></p>
			<p align="justify" style="margin: 12px 22px; line-height:16px">Địa chỉ:  <?=$member['address'];?></p>
			<p align="justify" style="margin-left:252px; margin-right:22px; margin-top:12px; margin-bottom:12px">
			<a href="index.php">Quay về trang chủ</a></td>
	</tr>
</table>

</body>

</html>
<?php
}
 else
{
require_once ("./dangnhap.php");
}
?>