<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dang nhap Thanh cong !!</title>
<link href="<?echo $backend;?>/css/csscp.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div align="center">
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" height="100%">
		<tr>
			<td valign="top"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
			<div align="center">

<table class="tborder" cellpadding="6" cellspacing="1" border="0" width="500">
<tr>
	<td class="tcat">
	<p align="justify" style="line-height: 16px; margin: 4px 8px">
	<span style="font-size: 13pt">Đang chuyển tới ...</span></td>
</tr>
<tr>
	<td class="panelsurround" align="center">
	<div class="panel">
		<div align="left">

		
			<!-- main error message -->


			<p align="justify">&nbsp;</p>
			<p align="center">
			<img src="<?echo $backend;?>/images/working.gif" width="214" height="15"></p>


			<div style="margin: 10px">
				<p align="center" style="margin: 4px 8px; ; line-height:16px">
				<span style="font-size: 9pt; font-weight: 700">Xin chào! <font color="#0066FF"><?php echo $info_login['username']; ?></font> đã đăng nhập thành công.</span></p>
				<p align="center" style="margin: 4px 8px; ; line-height:16px">
				<a href="<?echo base_url();?>home/nhanvien">Bấm vào đây nếu bạn cảm thấy chờ lâu hoặc trình duyệt không tự chuyển.</a></p></div>


			<!-- / main error message -->
		

		</div>

	</div>

	</td>
</tr>
</table>

			</div>
			</td>
		</tr>
	</table>
</div>

</body>
<noscript>
<meta http-equiv="Refresh" content="1; URL=./index.php">
</noscript>

<script type="text/javascript">
function exec_refresh()
{
	window.status = "Ðang chuyển tới ..." + myvar;
	myvar = myvar + " .";
	var timerID = setTimeout("exec_refresh();", 120);
	if (timeout > 0)
	{
		timeout -= 1;
	}
	else
	{
		clearTimeout(timerID);
		window.status = "";
		window.location = "../home/thisinh";
	}
}

var myvar = "";
var timeout = 20;
exec_refresh();
</script>

</html>