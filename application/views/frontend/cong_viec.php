<?
if(count($tt_congviec)>0)
{
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<!--**********************************************************************************************************************************-->  

<!--**********************************************************************************************************************************-->  
  <table class=" table table-striped table-responsive row2" >
<!--**********************************************************************************************************************************-->  
   
   <tr>
    <th width="10"  align="center">PHÒNG BAN</th>
    <th width="10"  align="center">CÔNG VIỆC</th>
    <th width="90"  align="center">CHỨC VỤ</th>
    <th width="90"  align="center">BẰNG CẤP </th>           
    <th width="170"  align="center">MỨC LƯƠNG </th>
   <th width="10"  align="center">HỆ SÔ </th>
    <th width="90"  align="center">PHỤ CẤP</th>
    <th width="90"  align="center">NGÀY LÀM</th>           
    </tr>
    <tr>
    
      <td class="row1" width="100" align="left"><?php echo $get_phongban[0]['ten_phong_ban']?></td>
      
      <td  class="row1" align="left"><?php echo $get_pccongviec[0]['ten_cong_viec']?></td>
      <td  class="row1" align="left"><?php echo $get_chucvu[0]['ten_chuc_vu']?></td>
      <td  class="row1" align="left"><?php echo $get_bangcap[0]['ten_bang_cap']?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['muc_luong_cb'];  ?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['he_so']; ?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['phu_cap']; ?></td>
      
     <td  class="row1" align="left"><?php echo $tt_congviec[0]['ngay_vao_lam']; ?></td>
    </tr>
   
   
<!--**********************************************************************************************************************************-->
  </table>
</form>
</body>
</html>
<?
}

else{
    
    if (isset($info_login['admin'])&&$info_login['admin']!=0){
    echo"<script>location.href='home.php?require=them_moi_cong_viec.php&catID=$catID&title=Thêm mới công việc';</script>";
    }}
?>
