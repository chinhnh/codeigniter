<?
if(count ($tt_congviec)>0)
{
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<!--**********************************************************************************************************************************-->  
    <div class="container">
<div class="row" >

<div class="col-md-3"><div class="panel panel-warning" >
<div class="panel-heading"> <i class="fa fa-group fa-2x"></i><a href="<?echo base_url();?>home/nhanvien/them-gia-dinh/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>"> Quan hệ gia đình</a></div>
</div></div>

<div class="col-md-3"><div class="panel panel-info" >
<div  class=" panel-heading"> <i class=" fa fa-edit fa-2x"></i><a href="<?echo base_url();?>home/nhanvien/them-hop-dong/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>"> Hợp đồng</a></div>
</div></div> 
   
</div>   
</div>
   
   
  <table class="table table-bordered table-responsive" >
 
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
    <tr >
    
     <td class="row1" width="100" align="left"><?php echo $get_phongban[0]['ten_phong_ban']?></td>
      
      <td  class="row1" align="left"><?php echo $get_pccongviec[0]['ten_cong_viec']?></td>
      <td  class="row1" align="left"><?php echo $get_chucvu[0]['ten_chuc_vu']?></td>
      <td  class="row1" align="left"><?php echo $get_bangcap[0]['ten_bang_cap']?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['muc_luong_cb'];  ?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['he_so']; ?></td>
      <td  class="row1" align="left"><?php echo $tt_congviec[0]['phu_cap']; ?></td>
      
     <td  class="row1" align="left"><?php echo $tt_congviec[0]['ngay_vao_lam']; ?></td>
    </tr>
   
   

  </table>     
      
<!--**********************************************************************************************************************************-->  
<form action="<?echo base_url();?>home/nhanvien/sua-cong-viec/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>" method="post">
  <table class="table table-responsive" >
<!--**********************************************************************************************************************************-->  
    
    
    <tr >
      <td width="102" >Mã nhân viên:</td><td><?php echo $tt_nhanvien[0]['ma_nhan_vien'];  ?></td>
      <input type="hidden" name="ma_nv" value="<?php echo $tt_nhanvien[0]['ma_nhan_vien'];  ?>" size="10" />
      
       <td >Tên nhân viên *:</td>
      <td><?php echo $tt_nhanvien[0]['ho_ten']; ?></td> 
    
   </tr>
<!--**********************************************************************************************************************************-->
    <tr>
      <td nowrap="nowrap" >Phòng ban:</td>
      <td><select class="form-control" name="phong_ban_id">
      <option value="<?php echo $get_phongban[0]['phong_ban_id']?>"><?php echo $get_phongban[0]['ten_phong_ban']?></option>
        <?php 
foreach($tt_phongban as $row_phongban) {  
?>
         <option value="<?php echo $row_phongban['phong_ban_id']?>"><?php echo $row_phongban['ten_phong_ban']?></option>
        <?php
}
?>

      </select></td>
      
 <td nowrap="nowrap" >Mức lương:</td>
 <td><input class="form-control" type="text" name="muc_luong_cb" value="<?php echo $tt_congviec[0]['muc_luong_cb'];  ?>" size="50" /></td>
         
      </tr>
<!--**********************************************************************************************************************************-->    
    <tr valign="baseline">
      <td nowrap="nowrap" >Công việc:</td>
      <td><select class="form-control" name="cong_viec_id">
      <option selected="selected" value="<?php echo $get_pccongviec[0]['cong_viec_id']?>"><?php echo $get_pccongviec[0]['ten_cong_viec']?></option>
        <?php 
foreach($tt_pccongviec as $row_congviec)  {  
?>
        <option value="<?php echo $row_congviec['cong_viec_id']?>"><?php echo $row_congviec['ten_cong_viec']?></option>
        <?php
}
?>
      </select></td>
      

      <td nowrap="nowrap">Phụ cấp:</td>
      <td><input class="form-control" type="text" name="phu_cap" value="<?php echo$tt_congviec[0]['phu_cap']; ?>" size="50" /></td>
        
    </tr>
<!--**********************************************************************************************************************************-->
    <tr valign="baseline">
      <td nowrap="nowrap" >Chức vụ:</td>
      <td><select class="form-control" name="chuc_vu_id">
      <option selected="selected" value="<?php echo $get_chucvu[0]['chuc_vu_id']?>"><?php echo $get_chucvu[0]['ten_chuc_vu']?></option>
        <?php 
foreach($tt_chucvu as $row_chucvu) {  
?>
        <option value="<?php echo $row_chucvu['chuc_vu_id']?>"><?php echo $row_chucvu['ten_chuc_vu']?></option>
        <?php
} 
?>
      </select></td>
      
 <td nowrap="nowrap" >Hệ số:</td>
      <td><input class="form-control" type="text" name="he_so" value="<?php echo $tt_congviec[0]['he_so']; ?>" size="50" /></td>
            
   </tr>
<!--**********************************************************************************************************************************-->    
    <tr>
       <td nowrap="nowrap" >Bằng cấp:</td>
      <td><select class="form-control" name="bang_cap_id">
      <option value="<?php echo $get_bangcap[0]['bang_cap_id']?>"><?php echo $get_bangcap[0]['ten_bang_cap']?></option>
        <?php 
foreach($tt_bangcap as $row_bangcap){  
?>
        <option value="<?php echo $row_bangcap['bang_cap_id']?>"><?php echo $row_bangcap['ten_bang_cap']?></option>
        <?php
} 
?>
      </select></td>
      
<!--**********************************************************************************************************************************-->    
     <td nowrap="nowrap" >Ngày vào làm *:</td>
      <td><input class="form-control" type="text" name="ngay_vao_lam" value="<?php echo $tt_congviec[0]['ngay_vao_lam']; ?>" size="50" /></td> 
    </tr>
<!--**********************************************************************************************************************************-->    



<!--**********************************************************************************************************************************-->
    <tr valign="baseline">
      <td colspan="4" align="center" nowrap="nowrap"><br /><input class="btn btn-warning" type="submit" name="submit"value="update" /></td>
    </tr>
  </table>
</form>
<!--**********************************************************************************************************************************-->  
 
</body>
</html>
<?
}

else{
    $param3=$tt_nhanvien[0]['ma_nhan_vien']; 
    echo"<script>location.href='$link/nhanvien/them-cong-viec/$param3';</script>";
    }
?>
