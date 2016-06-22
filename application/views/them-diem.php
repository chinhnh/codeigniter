<!--**********************************************************************************************************************************-->  

<div class="col-md-12" style="margin: 20px 0px;">
<div style="overflow:auto;" >
        
    <table class="table table-striped table-bordered table-responsive">
   
  <tr style="background-color: #2c3e50;">
    <th >S? BÁO DANH</th>
    <th >PHÒNG THI</th>
      <th >KH?I THI</th>
    <th >H? VÀ TÊN</th>
    <th >GI?I TÍNH</th>
    <th >NGÀY SINH</th>
    <th >Ð?A CH?</th>
    <th >S? CMT</th>
    <th >KHU V?C</th> 
    <th >TÔN GIÁO</th> 
    <th >DÂN T?C</th> 
    <th > XÓA </th> 
  
    <th >ÐI?M THI</th>    
  </tr>
  <tbody>
  <?php foreach($tt_thisinh as $row){ 
    ?>
    <tr >
      <td><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><?php echo $row['so_bao_danh']; ?></a></td>
      <td><?php echo $tt_phongthi[0]['ten_phong_thi']; ?></td>
         <td><?php echo $tt_khoithi[0]['ten_khoi_thi']; ?></td>
      <td><?php echo $row['ho_ten']; ?></td>
      <td><?php if($row['gioi_tinh']==1){echo "Nam";}else {echo "N?";} ?></td>
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
<!-------------------------------------------------------------------------------------------------------------------->   
<div class="col-sm-12">

<form  action="<?echo base_url();?>index.php/home/thisinh/them-diem/<?php echo $tt_thisinh[0]['so_bao_danh']; ?>"  method="post">

<div class="col-sm-4">
<div class="form-group"> 
Ði?m môn 1: <input type="text" name="diem_mon_1" class="form-control" value="">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Ði?m môn 2:  <input type="text" name="diem_mon_2" class="form-control" value="">
</div></div>
<div class="col-sm-4">
<div class="form-group"> 
Ði?m môn 3:  <input type="text" name="diem_mon_3" class="form-control" value="">
</div></div>

<div class="col-sm-12" style="text-align: center; margin-top: 15px;">
<input class="btn btn-info" type="submit" name="submit" value="add" /></div>
    
</form></div>

