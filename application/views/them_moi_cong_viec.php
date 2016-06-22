<meta charset="utf-8"/>
<?php
$info_login=$this->session->userdata('lay_user');
if (isset($info_login['admin'])&&$info_login['admin']==1)
{ 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>


<form action="<?base_url()?>home/nhanvien/them-cong-viec" method="post" >
  <table class="table table-responsive table-bordered">
<!--**********************************************************************************************************************************-->  
    <tr valign="baseline">
      <td width="102" align="right" nowrap="nowrap">Mã nhân viên:</td>
       <td><?echo $tt_nhanvien[0]['ma_nhan_vien']; ?></td>
      <input type="hidden" name="ma_nv" value="<?echo $tt_nhanvien[0]['ma_nhan_vien']; ?>" size="10" />
        <td nowrap="nowrap" align="right">Ngày vào làm *:</td>
      <td><input type="text" name="ngay_vao_lam" value="" size="50" /></td>
   </tr>
<!--**********************************************************************************************************************************-->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Phòng ban:</td>
      <td><select name="phong_ban_id">
      <option value="0"></option>
       <?php 
foreach($tt_phongban as $row_phongban) {  
?>
        <option value="<?php echo $row_phongban['phong_ban_id']?>"><?php echo $row_phongban['ten_phong_ban']?></option>
        <?php
} 
?>

      </select></td>
      
 <td nowrap="nowrap" align="right">Mức lương:</td>
 <td><input type="text" name="muc_luong_cb" value="" size="50" /></td>
         
      </tr>
<!--**********************************************************************************************************************************-->    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Công việc:</td>
      <td><select name="cong_viec_id">
       <option value="0"></option>
        <?php 
foreach($tt_pccongviec as $row_congviec) {  
?>
        <option value="<?php echo $row_congviec['cong_viec_id']?>"><?php echo $row_congviec['ten_cong_viec']?></option>
        <?php
} 
?>
      </select></td>
      

      <td nowrap="nowrap" align="right">Phụ cấp:</td>
      <td><input type="text" name="phu_cap" value="" size="50" /></td>
        
    </tr>
<!--**********************************************************************************************************************************-->
    <tr valign="baseline">
      <td  align="right">Chức vụ:</td>
      <td><select name="chuc_vu_id">
      <option value="0"></option>
       <?php 
foreach($tt_chucvu as $row_chucvu) {  
?>
        <option value="<?php echo $row_chucvu['chuc_vu_id']?>"><?php echo $row_chucvu['ten_chuc_vu']?></option>
        <?php
} 
?>
      </select></td>
      
 <td  align="right">Hệ số:</td>
      <td><input type="text" name="he_so" value="" size="50" /></td>
            
   </tr>
<!--**********************************************************************************************************************************-->    
    <tr>
       <td align="right">Bằng cấp:</td>
      <td><select name="bang_cap_id">
      <option value="0"></option>
        <?php 
foreach($tt_bangcap as $row_bangcap){  
?>
        <option value="<?php echo $row_bangcap['bang_cap_id']?>"><?php echo $row_bangcap['ten_bang_cap']?></option>
        <?php
}
?>
      </select></td>
       
    </tr>

<!--**********************************************************************************************************************************-->
    <tr valign="baseline">
      <td colspan="4" align="center" nowrap="nowrap"><input type="submit" name="submit" value="add" /></td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
</body>
</html>

<?php
}
else {
		 echo("<script>alert('Bạn hãy đăng nhập với tài khoản admin để thực hiện thao tác $title');</script>");
         //echo("<script>location.href='user/dang_nhap.php';</script>");
		 }
?>