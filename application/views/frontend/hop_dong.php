
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<body>


<?php
if (isset($tt_hopdong))
{
?>
<table class="row2" width="100%" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <th width="120">Số QĐ</th>
    <th width="80">Từ ngày</th>
    <th width="100">Đến ngày</th>
    <th width="120">Loại hợp đồng</th>
    <th width="200">Ghi chú</th>
  
  </tr>
  <?php foreach($tt_hopdong as $row_hopdong){ ?>
    <tr>
      <td class="row1"><?php echo $row_hopdong['so_quyet_dinh']; ?></td>
      <td class="row1"><?php echo $row_hopdong['tu_ngay']; ?></td>
      <td class="row1"><?php echo $row_hopdong['den_ngay']; ?></td>
      <td class="row1">
        <?php 
	if ($row_hopdong['loai_hop_dong']==0)
	{
		echo "Không thời hạn"; 
	}
	else
	{
		echo $row_hopdong['loai_hop_dong'];
		echo " Năm";
	}
	?>
      </td>
      <td class="row1"><?php echo $row_hopdong['ghi_chu']; ?></td>
    </tr>
    <?php } ?>
</table>
<?php
		}
        else
        {?>
          <table class="row3" width="100%" align="center" cellpadding="1" cellspacing="1" bgcolor="#66CCFF">
        <tr><td>Chưa có thông tin về <?=$title?></td></tr></table>
        
        <?}?>

</body>
</html>
