<!--**********************************************************************************************************************************-->  
<? if (count ($tt_diemthi)>0){?>
  <div class="col-md-12" style="margin: 20px 0px;">
<div style="overflow:auto;" > 
   
  <table class="table table-bordered table-responsive" >
 
   <tr>
    <th width="10"  align="center">SỐ BÁO DANH</th>
    <th width="10"  align="center">HỌ TÊN</th>
    <th width="10"  align="center">PHÒNG THI</th>
    <th width="10"  align="center">KHỐI THI</th>  
    <th width="90"  align="center">ĐIÊM MÔN 1</th>
    <th width="90"  align="center">ĐIÊM MÔN 2</th>           
    <th width="90"  align="center">ĐIÊM MÔN 3</th>
    <th width="90"  align="center">ĐIỂM THI</th>
      <th width="90"  align="center">TỔNG ĐIỂM</th>   
    </tr>
    <?foreach($tt_diemthi as $row){
    $tt_thisinh =$this->model->get_table_dk("tt_thisinh","so_bao_danh",$row['so_bao_danh']);
  $phong_thi=$this->model->get_innerjoin("phong_thi","tt_thisinh","ma_phong_thi","so_bao_danh","$row[so_bao_danh]");
    $khoi_thi=$this->model->get_innerjoin("khoi_thi","tt_thisinh","ma_khoi_thi","so_bao_danh","$row[so_bao_danh]");
    ?>
    <tr >
    
   <td><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><?php echo $row['so_bao_danh']; ?></a></td>
     <td  class="row1" align="left"><?php echo $tt_thisinh[0]['ho_ten'];?></td>
      <td  class="row1" align="left"><?php echo $phong_thi[0]['ten_phong_thi'];?></td>
      <td  class="row1" align="left"><?php echo $khoi_thi[0]['ten_khoi_thi'];?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_1'];?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_2'];  ?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_3']; ?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_1']+$row['diem_mon_2']+$row['diem_mon_3']  ?></td>
      
     <td  class="row1" align="left"><?php echo round($row['tong_diem'],2); ?></td>
    </tr>
   
   
<?
}
?>
  </table>     
      
<!--**********************************************************************************************************************************-->  

</div></div>
<!-------------------------------------------------------------------------------------------------------------------->   
<div class="col-sm-12">

<form  action="<?echo base_url();?>index.php/home/thisinh/sua-diem/<?php echo $tt_thisinh[0]['so_bao_danh']; ?>"  method="post">

<div class="col-sm-4">
<div class="form-group"> 
Điểm môn 1: <input type="text" name="diem_mon_1" class="form-control" value="<?=$tt_diemthi[0]['diem_mon_1'];?>">
</div></div>

<div class="col-sm-4">
<div class="form-group"> 
Điểm môn 2:  <input type="text" name="diem_mon_2" class="form-control" value="<?=$tt_diemthi[0]['diem_mon_2'];?>">
</div></div>
<div class="col-sm-4">
<div class="form-group"> 
Điểm môn 3:  <input type="text" name="diem_mon_3" class="form-control" value="<?=$tt_diemthi[0]['diem_mon_3'];?>">
</div></div>

 <div class="col-sm-4">
<div class="form-group" style="color: red;"> 
Tổng điểm: <?=$tt_diemthi[0]['tong_diem'];?>
</div></div>



<div class="col-sm-12" style="text-align: center; margin-top: 15px;">
<input class="btn btn-info" type="submit" name="submit" value="update" /></div>
    
</form></div>
<?}
else {
    $p=$tt_thisinh[0]['so_bao_danh'];
     echo "<script>location.href='$link/thisinh/them-diem/$p'</script>" ;
}

?>
