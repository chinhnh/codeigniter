
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

<!--***************************************************************************************************************-->          


<!--***************************************************************************************************************-->    
      <?php
		if (isset($tt_giadinh))
		{
		?>
        <table class="row2" width="100%" align="center" cellpadding="1" cellspacing="1" bgcolor="#66CCFF">
        <tr>
          <th width="170">Tên người thân</th>         
          <th width="65">Quan hệ</th> 
          <th width="40">Năm sinh</th>
          <th width="80">Điện thoại</th>
          <th width="40">Nghề nghiệp</th>
          <th width="40">Địa chỉ</th>
          <th width="40">Ghi chú</th>
          
        </tr>
        <?php foreach($tt_giadinh as $row_giadinh) { ?>
          <tr>
            <td class="row1"><?php echo $row_giadinh['ten_nguoi_than']; ?></td>
            <td class="row1" align="center"><?php echo $row_giadinh['moi_quan_he']; ?></td>
            <td class="row1" align="center"><?php echo $row_giadinh['nam_sinh']; ?></td>
            <td class="row1"><?php echo $row_giadinh['dien_thoai']; ?></td>
            <td class="row1" align="center"><?php echo $row_giadinh['nghe_nghiep']; ?></td>
            <td class="row1" align="center"><?php echo $row_giadinh['dia_chi']; ?></td>
            <td class="row1" align="center"><?php echo $row_giadinh['ghi_chu']; ?></td>
            
            </tr>
          <?php }  ?>
      </table>
      <?php
		}
        else
        {?>
          <table class="row3" width="100%" align="center" cellpadding="1" cellspacing="1" bgcolor="#66CCFF">
        <tr><td>Chưa có thông tin về <?=$title?></td></tr></table>
        
        <?}?>

      
<!--***************************************************************************************************************-->

</body>
</html>