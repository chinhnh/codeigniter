<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<!--**********************************************************************************************************************************-->  

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
    <th width="170"  align="center">ĐIÊM MÔN 3</th>
    <th width="90"  align="center">ĐIỂM THI</th>
      <th width="90"  align="center">TỔNG ĐIỂM</th>   
    </tr>
    <?foreach($tt_diemthi as $row){
    $tt_thisinh =$this->model->get_table_dk("tt_thisinh","so_bao_danh",$row['so_bao_danh']);
 
  $phong_thi=$this->model->get_innerjoin("phong_thi","tt_thisinh","ma_phong_thi","so_bao_danh","$row[so_bao_danh]");
    $khoi_thi=$this->model->get_innerjoin("khoi_thi","tt_thisinh","ma_khoi_thi","so_bao_danh","$row[so_bao_danh]");
    ?>
    <tr >
    
     <td class="row1" width="100" align="left"><?php echo $row['so_bao_danh'];?></td>
      <td  class="row1" align="left"><?php echo $tt_thisinh[0]['ho_ten'];?></td>
      <td  class="row1" align="left"><?php echo $phong_thi[0]['ten_phong_thi'];?></td>
      <td  class="row1" align="left"><?php echo $khoi_thi[0]['ten_khoi_thi'];?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_1'];?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_2'];  ?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_3']; ?></td>
      <td  class="row1" align="left"><?php echo $row['diem_mon_1']+$row['diem_mon_2']+$row['diem_mon_3']  ?></td>
      
     <td  class="row1" align="left"><?php echo $row['tong_diem']; ?></td>
    </tr>
   
   
<?
}
?>
  </table>     
      
<!--**********************************************************************************************************************************-->  

</div></div>
</body>
</html>

