<?php

{
	if ( $_SESSION['user_id'] )
{
    $user_id = intval($_SESSION['user_id']);
    $sql_query = @mysql_query("SELECT * FROM tlb_thanhvien WHERE id='{$user_id}'");
    $member = @mysql_fetch_array( $sql_query );
?>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>BK_Computer</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p  class="mem_acc">Trang thông tin</p></div>
		<div><p align="right" class="login_text"><a href="../index.php" class="hrlink">Xin chào <?=$_SESSION['fullname'];?></a></div>
		</td>
	</tr>
</table>
<p  style="line-height: 16px; margin: 8px 22px">
<a href="info.php">Xem thông tin</a></p>
<p  style="line-height: 16px; margin: 8px 22px">
<a href="suathongtin.php">Sửa thông tin</a></p>
<?php

if ($member['admin']=="1") {
?>
<p  style="line-height: 16px; margin: 8px 22px">
<a href="admin.php">Trang quản trị</a></p>
<?php
}
else {}
?>
<p  style="line-height: 16px; margin: 8px 22px">
<a href="../index.php">Quay lại trang chủ</a></p>
<p style="line-height: 16px; margin: 8px 22px">
<a href="logout.php">[ Đăng xuất ]</a></p>
</body>

</html>
<?php
}
 else
{
require_once ("./dang_nhap.php");
}

exit;
}
?>