<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<? foreach($tt_nhanvien as $row){?>
<form class="form-inline" action="<?echo base_url();?>home/nhanvien/sua-nhan-vien/<?php echo $row['ma_nhan_vien']; ?>" method="post">
 <!--****************************************************************************************************************-->
 <div class="container">
<div class="row" >

<div class="col-md-3"><div class="panel panel-warning" >
<div class="panel-heading"> <i class="fa fa-group fa-2x"></i><a href="<?echo base_url();?>home/nhanvien/them-gia-dinh/<?php echo $row['ma_nhan_vien']; ?>"> Quan hệ gia đình</a></div>
</div></div>

<div class="col-md-3"><div class="panel panel-info" >
<div  class=" panel-heading"> <i class=" fa fa-edit fa-2x"></i><a href="<?echo base_url();?>home/nhanvien/them-hop-dong/<?php echo $row['ma_nhan_vien']; ?>"> Hợp đồng</a></div>
</div></div> 
   
</div>   
</div>
 
 <!--****************************************************************************************************************-->
  <table class=" table table-pesponsive ">
  
    <tr>
      <td width="127" align="right" nowrap="nowrap">Mã nhân viên *:</td>
      <td width="227"><input type="text" name="ma_nv" class="form-control" value="<? echo $row['ma_nhan_vien']?>"  /></td>
	  <td nowrap="nowrap" align="right">Email:</td>
      <td><input type="text" class="form-control" name="email" value="<? echo $row['email']?>" /></td>
    </tr>
	
    <tr >
      <td nowrap="nowrap" align="right">Họ và tên *</td>
      <td><input type="text" class="form-control" name="ho_ten" value="<? echo $row['ho_ten']?>"  /></td>
      <td nowrap="nowrap" align="right">Ngày sinh:</td>
      <td><input type="text" class="form-control" name="ngay_sinh" value="<? echo $row['ngay_sinh']?>"  /> 
        (dd/mm/yyyy)</td>
    </tr>
	
    <tr>
      <td nowrap="nowrap" align="right">Giới tính</td>
      <td><select class="form-control" name="gioi_tinh">
      <?if ($row['gioi_tinh']==1){?>
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
        
        <?}else{?>
        <option value="0">Nữ</option>
         <option value="1">Nam</option>
        <?}?>
      </select></td>
       <td nowrap="nowrap" align="right">Địa chỉ:</td>
      <td colspan="3"><input class="form-control" type="text" name="dia_chi" value="<? echo $row['dia_chi']?>"  /></td>
    </tr>
	
    <tr>
    
      <td  align="right">Điện thoại :</td>
      <td><input type="text" class="form-control" name="dien_thoai" value="<? echo $row['dien_thoai']?>"  /></td>
      
     <td  align="right" width="100">Tình trạng:</td>
      <td width="300">
      <select class="form-control" name="nghi_viec">
      <?php
	  if ($row['nghi_viec']==0)
	  {
	  ?>
      	<option value="0">Làm việc </option>
        <option value="1">Nghỉ việc </option>
   
      <?php
	  }else{
	  ?> 
      	<option  value="1">Nghỉ việc </option>
        <option value="0">Làm việc </option>
      <?php }?>
       </select>
      </td>
      
    </tr>
	
    <tr>
    
      <td colspan="4" align="center" nowrap="nowrap">
      <br /><input class="btn btn-danger" type="submit" name="submit" value="update" /></td>
    </tr>
	
  </table>
</form>
<?}?>
</body>
</html>
