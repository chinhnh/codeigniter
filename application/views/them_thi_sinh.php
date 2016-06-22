      
<!-------------------------------------------------------------------------------------------------------------------->   
<div class="col-sm-12">

<form  action="<?echo base_url();?>index.php/home/thisinh/them-thi-sinh"  method="post">
<div class="col-sm-4">
<div class="form-group"> 
Số báo danh: <input type="text" name="so_bao_danh" class="form-control" value="">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Họ tên: <input type="text" name="ho_ten" class="form-control" value="">
</div></div>
<div class="col-sm-4">
<div class="form-group"> 
Địa chỉ: <input type="text" name="dia_chi" class="form-control" value="">
</div></div>
 <div class="col-sm-4">
<div class="form-group"> 
Ngày sinh: <input type="text" name="ngay_sinh" class="form-control" value="">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Số CMT: <input type="text" name="so_cmt" class="form-control" value="">
</div></div>
<!-------------------->
<div class="col-sm-4"> Giới tính: 
<select class="form-control" name="gioi_tinh">
    
        <option value="0">Nữ</option>
         <option value="1">Nam</option>
     
      </select>
</div> 
<!-------------------->
<!-------------------->
<div class="col-sm-4"> Dân tộc: 
<select class="form-control" name="ma_dan_toc">
     
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
<div class="col-sm-4"> Khối thi: 
<select class="form-control" name="ma_khoi_thi">
     
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
<div class="col-sm-4"> Phòng thi: 
<select class="form-control" name="ma_phong_thi">
    
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
<input class="btn btn-info" type="submit" name="submit" value="add" /></div>
    
</form></div>
<!--**********************************************************************************************************************************-->  
 <style>
 .col-sm-4{margin-top: 5px;}
 </style>

