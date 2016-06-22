<?php
session_start();
?>
<meta charset="utf-8"/>
<?php
include "./db_config.php";
//Kiem tra email co hop le hay ko
function check_email($email) {
    if (strlen($email) == 0) return false;
    if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) return true;
    return false;
}
if ( $_GET['act'] == "do" )
{
    $username = addslashes( $_POST['user'] );
    $password = md5( addslashes( $_POST['pass'] ) );
    $verify_password = md5( addslashes( $_POST['verify_pass'] ) );
    $email = addslashes( $_POST['email'] );
    $fullname = addslashes( $_POST['fullname'] );
    $sinhnhat = addslashes( $_POST['birthday'] );
    $address = addslashes( $_POST['address'] );
    // Kiểm tra 7 thông tin, nếu có bất kỳ thông tin chưa điền thì sẽ báo lỗi
    if ( ! $username || ! $_POST['pass'] || ! $_POST['verify_pass'] || ! $email || ! $fullname || ! $sinhnhat)
    {
        print "Vui lòng điền đầy đủ thông tin. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    // Kiểm tra username nay co nguoi dung chua
    if ( mysql_num_rows(mysql_query("SELECT user FROM tlb_thanhvien WHERE user='$username'"))>0)
    {
        print "Tên đăng nhập đã được sử dụng.mời bạn nhập tên khác <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    // Kiểm tra email nay co hop le ko
    if (!check_email($email))
    {
       print "Email không hợp lệ. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}",$sinhnhat))
    {
        print "Ngày tháng năm sinh không hợp lệ. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    // Kiểm tra email nay co nguoi dung chua
    if ( mysql_num_rows(mysql_query("SELECT email FROM tlb_thanhvien WHERE email='$email'"))>0)
    {
        print "Email này đã được sử dụng.mời bạn nhập email khác. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    // Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau
    if ( $password != $verify_password )
    {
        print "Mật khẩu không trùng khớp.xin mời bạn nhập lại! <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại.</a>";
        exit;
    }
    // Tiến hành tạo tài khoản
    @$a=mysql_query("INSERT INTO tlb_thanhvien (user, pass, email, address, fullname, birthday) VALUES ('{$username}', '{$password}', '{$email}', '{$address}', '{$fullname}', '{$sinhnhat}')");
    // Thông báo hoàn tất việc tạo tài khoản
    if ($a)
    {
        echo "<script> alert('Đăng ký thành công! Mời bạn đăng nhập!');</script>";
        echo"<script>location.href='dang_nhap.php';</script>";
        }
    else
        print "<script> alert('Có lỗi trong quá trình đăng kí');</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Đăng ký</title>
    <link type="text/css" rel="stylesheet" href="./sites/css/style.css" />
    <link href="./sites/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Đăng Ký</p></div>
		<div><p align="right" class="login_text"><a href="dang_nhap.php" class="hrlink">Đăng Nhập</a></div>
		</td>
	</tr>
	<tr>
		<td>
		<p align="justify" style="margin: 12px 22px; margin-left: 70px;"><b><span style="font-size: 16px;">Vui lòng điền thông tin đăng ký tài khoản</span></font></b></p>

<!--------------------------------------------------------------------------------------------------------------->
		
		<form action="dang_ky.php?act=do" method="post">

			<div class="row2">
				<div class="val">
                    <div class="text">Họ và tên: <span  style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="fullname" type="text" maxlength="30" id="fullname" class="textbox" tabindex="3" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Tên đăng nhập: <span  style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="user" type="text" maxlength="30" id="user" class="textbox" tabindex="4" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Mật khẩu: <span  style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="pass" type="password" maxlength="30" id="pass" class="textbox" tabindex="5" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Nhập lại mật khẩu: <span  style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="verify_pass" type="password" maxlength="30" id="verify_pass" class="textbox" tabindex="6" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Email: <span style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="email" type="text" maxlength="30" id="email" class="textbox" tabindex="7" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Địa Chỉ: <span style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="address" type="text" maxlength="30" id="urls" class="textbox" tabindex="8" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Ngày sinh: (ngày / tháng / năm) <span style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="birthday" type="text" maxlength="30" id="birthday" class="textbox" tabindex="9" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
					<div><input type="hidden" name="submit" />
                    <input type="image" src="../imgs/dang_ky.gif"/></div>
                </div>
			</div>
			<div class="row2">
				<div class="val" style="margin-top: -34px; margin-left: 130px;">
					<div>
						<input type="reset" name="Reset" value="Hủy bỏ" tabindex="10" /></div>
                </div>
			</div>

</form>
		</td>
	</tr>
</table>

</body>

</html>