<?

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://localhost/server/webservice/ql_diemthi_service/service/view/json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
/*
foreach ($obj as $row){
  foreach($row as $key =>$result2){
    echo $key ."-". $result2;
    echo ("<br>");
  }
}
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý nhân viên</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    <link href="<?echo base_url();?>public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?echo base_url();?>public/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="<?echo base_url();?>public/assets/css/style.css" rel="stylesheet" />

</head>

<body >
     
        
<!-------------------------------------------------------------------------------------------------------------------->        
  
 
<div class="col-md-12" style="margin: 20px 0px;">
<div style="overflow:auto;" >
        
    <table class="table table-striped table-bordered table-responsive">
   
  <tr style="background-color: #2c3e50;">
    <th rowspan="2">SỐ BÁO DANH</th>
    <th rowspan="2">PHÒNG THI</th>
    <th rowspan="2">HỌ VÀ TÊN</th>
    <th rowspan="2">GIỚI TÍNH</th>
    <th rowspan="2">NGÀY SINH</th>
    <th rowspan="2">ĐỊA CHỈ</th>
    <th rowspan="2">SỐ CMT</th>
    <th rowspan="2">KHU VỰC</th> 
    <th rowspan="2">TÔN GIÁO</th> 
    <th rowspan="2">DÂN TỘC</th> 
    
    <th colspan="2" > THÔNG TIN</th> 

    
  </tr>

  <tr style="background-color: #2c3e70;">
    <th >CÁ NHÂN</th>
    <th >ĐIỂM THI</th>    
  </tr>
 
  <tbody>
  <?php
 
  foreach ($obj as $row){
    
    ?>
    <tr >
      <td><a href="<?echo base_url();?>home/thisinh/sua-thi-sinh/<?php echo $row->so_bao_danh ; ?>"><?php echo $row->so_bao_danh; ?></a></td>
      <td><?php echo $row->ma_phong_thi; ?></td>
      <td><?php echo $row->ho_ten; ?></td>
      <td><?php if(($row->gioi_tinh)==1){echo "Nam";}else {echo "Nữ";} ?></td>
      <td><?php echo $row->ngay_sinh; ?></td>
      
      <td><?php echo $row->dia_chi; ?></td>
      <td><?php echo $row->so_cmt; ?></td>
      <td><?php echo $row->ma_khu_vuc; ?></td>
      <td><?php echo $row->ma_dan_toc; ?></td>
      <td><?php echo $row->ma_ton_giao; ?></td>
      

   <td ><a href="<?echo base_url();?>index.phphome/thisinh/sua-thi-sinh/<?php echo $row->so_bao_danh; ?>"><i class="fa fa-check fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.phphome/thisinh/sua-diem/<?php echo $row->so_bao_danh; ?>"><i class="fa fa-check fa-2x"></i></a></td>
   

   
      
   
   
    </tr>
    <?php }  ?>
    </tbody>
    </table>
</div></div>
<!-------------------------------------------------------------------------------------------------------------------->   

<!-------------------------------------------------------------------------------------------------------------------->   


 
            <!-- /. PAGE INNER  -->
      
 <footer>
    </footer>
    <!-- /. FOOTER  -->
            
 <script src="<?echo base_url();?>public/assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?echo base_url();?>public/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?echo base_url();?>public/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?echo base_url();?>public/assets/js/custom.js"></script>
</body>
</div>
</html>


<style>td{text-align: center;}</style>


