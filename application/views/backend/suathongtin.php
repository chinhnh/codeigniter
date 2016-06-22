<?php
session_start();

require ("./db_config.php");


	if ( $_SESSION['user_id'] )
{
    $user_id = intval($_SESSION['user_id']);
    $sql_query = @mysql_query("SELECT * FROM tlb_thanhvien WHERE id='{$user_id}'");
    $member = @mysql_fetch_array( $sql_query );
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin Thành viên</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
    <link href="./sites/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Sửa thông tin</p></div>
		<div><p align="right" class="login_text"><a href="logout.php" class="hrlink">
			Xin chào <?=$_SESSION['fullname'];?></a></div>
		</td>
	</tr>
	<tr>
		<td>

<?php
    //----Noi dung thong bao sau khi sua
    $thanhcong='<p align="justify" style="margin-left:252px; margin-right:22px; margin-top:12px; margin-bottom:12px">Sửa thành công <a href="./index.php">Quay lại</a></p>';
    $kothanh='Sửa ko thành công';
	$thongbao='<p align="justify" style="color: #FF0000; margin-left:252px; margin-right:22px; margin-top:12px; margin-bottom:12px">Ngày tháng năm sinh ko hợp lệ.</p>';
    echo "<b>Đang Sửa tài khoản {$member['user']}</b>.<br>";

    if ($_GET['do']=="edit") {
        $fullname = addslashes( $_POST['fullname'] );
        $sinhnhat = addslashes( $_POST['birthday'] );
        $address = addslashes( $_POST['address'] );
        $email = addslashes( $_POST['email'] );
        $sql="
        UPDATE `tlb_thanhvien` SET
        `email` = '".$email."',
        `address` = '".$address."',
        `fullname` = '".$fullname."',
        `birthday` = '".$sinhnhat."' WHERE `id` =$user_id LIMIT 1 ;";
 
    if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}",$sinhnhat))
    {
        echo $thongbao;
    }
	else {
        if ($sua=mysql_query($sql))
            echo $thanhcong;
        else
            echo $kothanh;
		}
	}
?>
<form method="POST" action="?do=edit">
			<div class="row2">
				<div class="val">
                    <div class="text">Họ và tên: <span  style="color:Red;display:show;">
						(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="fullname" type="text" maxlength="30" value="<?=$member['fullname']?>" id="fullname" class="textbox" tabindex="3" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Tên đăng nhập: <span >
						<span style="color: #FF0000">(*)</span></span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input disabled  name="user" type="text" maxlength="30" value="<?=$member['user']?>" id="user" class="textbox" tabindex="4" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Mật khẩu: <span >
						<span style="color: #FF0000">(*)</span></span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input disabled name="pass" type="password" maxlength="30" value="********" id="pass" class="textbox" tabindex="5" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Email: <span  style="color:Red;display:show;">
						(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="email" type="text" maxlength="30" value="<?=$member['email']?>" id="email" class="textbox" tabindex="7" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Địa Chỉ:</div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="address" type="text" maxlength="30" value="<?=$member['address']?>" id="urls" class="textbox" tabindex="8" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Ngày sinh: <span style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="birthday" type="text" maxlength="30" value="<?=$member['birthday']?>" id="birthday" class="textbox" tabindex="9" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val" style="margin-left: 140px;">
					<div>
						<input type="submit" name="submit" value="Chấp nhận" tabindex="9" /></div>
                </div>
			</div>
			<div class="row2">
				<div class="val" style="margin-top: -34px; margin-left: 230px;">
					<div>
						<input type="reset" name="Reset" value="H&#7911;y b&#7887;" tabindex="10" /></div>
                </div>
			</div>
</form>

			<p align="justify" style="margin-left:252px; margin-right:22px; margin-top:12px; margin-bottom:12px">
			<a href="index.php">Quay về trang chủ</a>
		</td>
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