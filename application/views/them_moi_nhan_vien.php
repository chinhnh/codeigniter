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
<div class="col-md-12">
  <div style="overflow:auto;" >
 <form action="<?echo base_url();?>home/nhanvien/them-nhan-vien" method="post">
  <table class="table">
  
    <tr>
      <td width="127" align="right" nowrap="nowrap">Mã nhân viên *:</td>
      <td width="227"><input class="form-control"  type="text" name="ma_nv"  size="54" /></td>
	  <td nowrap="nowrap" align="right">Email:</td>
      <td><input type="text" class="form-control" name="email"  size="70" /></td>
    </tr>
	
    <tr >
      <td nowrap="nowrap" align="right">Họ và tên *</td>
      <td><input type="text" class="form-control"  name="ho_ten"  size="54" /></td>
      <td nowrap="nowrap" align="right">Ngày sinh:</td>
      <td><input type="text" class="form-control"  name="ngay_sinh"  size="50" /> 
        (dd/mm/yyyy)</td>
    </tr>
	
    <tr>
      <td nowrap="nowrap" align="right">Giới tính</td>
      <td><select class="form-control"  name="gioi_tinh">
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
      </select></td>
       <td nowrap="nowrap" align="right">Địa chỉ:</td>
      <td colspan="3"><input class="form-control"  type="text" name="dia_chi"  size="70" /></td>
    </tr>
	
    <tr>
      <td nowrap="nowrap" align="right">Điện thoại :</td>
      <td><input class="form-control"  type="text" name="dien_thoai" size="54" /></td>
        
     <td  align="right" width="100">Tình trạng:</td>
     
      <td width="300">
      <select class="form-control"  name="nghi_viec">     
      	<option value="0">Làm việc </option>
        <option value="1">Nghỉ việc </option>
       </select>
      </td>
	  
    </tr>
	
	
    <tr>
      <td colspan="4" align="center" nowrap="nowrap">
      <input class="btn btn-primary" type="submit" value="Đồng ý" /></td>
    </tr>
	
  </table>
  <input type="hidden"  name="submit" value="add" />
</form>
</div>
</div>
</body>
</html>
<?php
}
else {
		 echo("<script>alert('Bạn hãy đăng nhập với tài khoản admin để thực hiện thao tác $title');</script>");
         echo("<script>location.href='user/dang_nhap.php';</script>");
		 }
?>