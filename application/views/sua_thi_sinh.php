      
        
        
<!-------------------------------------------------------------------------------------------------------------------->        
  
 
<div class="col-md-12" style="margin: 20px 0px;">
<div style="overflow:auto;" >
        
    <table class="table table-striped table-bordered table-responsive">
   
  <tr style="background-color: #2c3e50;">
    <th >SỐ BÁO DANH</th>
    <th >PHÒNG THI</th>
      <th >KHỐI THI</th>
    <th >HỌ VÀ TÊN</th>
    <th >GIỚI TÍNH</th>
    <th >NGÀY SINH</th>
    <th >ĐỊA CHỈ</th>
    <th >SỐ CMT</th>
    <th >KHU VỰC</th> 
    <th >TÔN GIÁO</th> 
    <th >DÂN TỘC</th> 
    <th > XÓA </th> 
  
    <th >ĐIỂM THI</th>    
  </tr>
  <tbody>
  <?php foreach($tt_thisinh as $row){ 
    ?>
    <tr >
      <td><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><?php echo $row['so_bao_danh']; ?></a></td>
      <td><?php echo $tt_phongthi[0]['ten_phong_thi']; ?></td>
         <td><?php echo $tt_khoithi[0]['ten_khoi_thi']; ?></td>
      <td><?php echo $row['ho_ten']; ?></td>
      <td><?php if($row['gioi_tinh']==1){echo "Nam";}else {echo "Nữ";} ?></td>
      <td><?php echo $row['ngay_sinh']; ?></td>     
      <td><?php echo $row['dia_chi']; ?></td>
      <td><?php echo $row['so_cmt']; ?></td>
      <td><?php echo $tt_khuvuc[0]['ten_khu_vuc']; ?></td>
      <td><?php echo $tt_tongiao[0]['ten_ton_giao']; ?></td>
      <td><?php echo $tt_dantoc[0]['ten_dan_toc']; ?></td>
      
      <td><a href="<?echo base_url();?>index.php/home/xoa/<?php echo $row['so_bao_danh'];?>"><i class="fa fa-close fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.php/home/thisinh/sua-diem/<?php echo $row['so_bao_danh']; ?>"><i class="fa fa-check fa-2x"></i></a></td>
   
              
    </tr>
    <?php }  ?>
    </tbody>
    </table>
</div></div>
<!-------------------------------------------------------------------------------------------------------------------->   
<div class="col-md-12" style="margin:10px 0px;"><div class="panel panel-danger"><div class="panel-heading" style="text-align: center;"><i class="fa fa-book fa-2x"></i> Nhập thông tin sửa</div></div></div>
<div class="col-sm-12">

<form  action="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $tt_thisinh[0]['so_bao_danh']; ?>"  method="post">
<div class="col-sm-4">
<div class="form-group" style="color: red;"> 
Cập nhật thông tin thí sinh: <?=$tt_thisinh[0]['so_bao_danh'];?>
</div></div>
<div class="col-sm-4">
<div class="form-group"> 
Số báo danh: <input type="text" name="so_bao_danh" class="form-control" value="<?=$tt_thisinh[0]['so_bao_danh'];?>">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Họ tên: <input type="text" name="ho_ten" class="form-control" value="<?=$tt_thisinh[0]['ho_ten'];?>">
</div></div>
<div class="col-sm-4">
<div class="form-group"> 
Địa chỉ: <input type="text" name="dia_chi" class="form-control" value="<?=$tt_thisinh[0]['dia_chi'];?>">
</div></div>
 <div class="col-sm-4">
<div class="form-group"> 
Ngày sinh: <input type="text" name="ngay_sinh" class="form-control" value="<?=$tt_thisinh[0]['ngay_sinh'];?>">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Số CMT: <input type="text" name="so_cmt" class="form-control" value="<?=$tt_thisinh[0]['so_cmt'];?>">
</div></div>
<!-------------------->
<div class="col-sm-4"> Giới tính: 
<select class="form-control" name="gioi_tinh">
      <?if ($tt_thisinh[0]['gioi_tinh']==1){?>
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
        
        <?}else{?>
        <option value="0">Nữ</option>
         <option value="1">Nam</option>
        <?}?>
      </select>
</div> 
<!-------------------->
<!-------------------->
<div class="col-sm-4"> Dân tộc: 
<select class="form-control" name="ma_dan_toc">
      <option value="<?php echo $tt_dantoc[0]['ma_dan_toc']?>"><?php echo $tt_dantoc[0]['ten_dan_toc']?></option>
        <?php 
foreach($get_dantoc as $row){  
?>
        <option value="<?php echo $row['ma_dan_toc']?>"><?php echo $row['ten_dan_toc']?></option>
        <?php
} 
?>
      </select>
</div> 
<!-------------------->
<!-------------------->
<div class="col-sm-4"> Khối thi: 
<select class="form-control" name="ma_khoi_thi">
      <option value="<?php echo $tt_khoithi[0]['ma_khoi_thi']?>"><?php echo $tt_khoithi[0]['ten_khoi_thi']?></option>
        <?php 
foreach($get_khoithi as $row){  
?>
        <option value="<?php echo $row['ma_khoi_thi']?>"><?php echo $row['ten_khoi_thi']?></option>
        <?php
} 
?>
      </select>
</div>

<!-------------------->
<!-------------------->
<div class="col-sm-4"> Phòng thi: 
<select class="form-control" name="ma_phong_thi">
      <option value="<?php echo $tt_phongthi[0]['ma_phong_thi']?>"><?php echo $tt_phongthi[0]['ten_phong_thi']?></option>
        <?php 
foreach($get_phongthi as $row){  
?>
        <option value="<?php echo $row['ma_phong_thi']?>"><?php echo $row['ten_phong_thi']?></option>
        <?php
} 
?>
      </select>
</div>

<!-------------------->
<div class="col-sm-4"> Khu vực: 
<select class="form-control" name="ma_khu_vuc">
      <option value="<?php echo $tt_khuvuc[0]['ma_khu_vuc']?>"><?php echo $tt_khuvuc[0]['ten_khu_vuc']?></option>
        <?php 
foreach($get_khuvuc as $row){  
?>
        <option value="<?php echo $row['ma_khu_vuc']?>"><?php echo $row['ten_khu_vuc']?></option>
        <?php
} 
?>
      </select>
</div> 
<!-------------------->

<!-------------------->
<div class="col-sm-4"> Tôn giáo: 
<select class="form-control" name="ma_ton_giao">
      <option value="<?php echo $tt_tongiao[0]['ma_ton_giao']?>"><?php echo $tt_tongiao[0]['ten_ton_giao']?></option>
        <?php 
foreach($get_tongiao as $row){  
?>
        <option value="<?php echo $row['ma_ton_giao']?>"><?php echo $row['ten_ton_giao']?></option>
        <?php
} 
?>
      </select>
</div> 
<!-------------------->
<br /><br />
<div class="col-sm-12" style="text-align: center; margin-top: 15px;">
<input class="btn btn-info" type="submit" name="submit" value="update" /></div>
    
</form></div>
<!--**********************************************************************************************************************************-->  
 <style>
 .col-sm-4{margin-top: 5px;}
 </style>

