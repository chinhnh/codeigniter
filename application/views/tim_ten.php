<!-------------------------------------------------------------------------------------------------------------------->        
  
 
<div class="col-md-12" style="margin: 20px 0px;">
<div style="overflow:auto;" >
        
    <table class="table table-striped table-bordered table-responsive">
   
  <tr style="background-color: #2c3e50;">
    <th rowspan="2">SỐ BÁO DANH</th>
    <th rowspan="2">PHÒNG THI</th>
    <th rowspan="2">KHỐI THI</th>
    <th rowspan="2">HỌ VÀ TÊN</th>
    <th rowspan="2">GIỚI TÍNH</th>
    <th rowspan="2">NGÀY SINH</th>
    <th rowspan="2">ĐỊA CHỈ</th>
    <th rowspan="2">SỐ CMT</th>
    <th rowspan="2">KHU VỰC</th> 
    <th rowspan="2">TÔN GIÁO</th> 
    <th rowspan="2">DÂN TỘC</th> 
    <th rowspan="2"> XÓA </th>
    <th colspan="2" > THÔNG TIN</th>  
  </tr>
  <tr style="background-color: #2c3e70;">
    <th >CÁ NHÂN</th>
    <th >ĐIỂM THI</th>    
  </tr>
  <tbody>
  <?php foreach($tt_thisinh as $row){ 
    
    $khu_vuc=$this->model->get_table_dk("khu_vuc","ma_khu_vuc","$row[ma_khu_vuc]");
    $dan_toc=$this->model->get_table_dk("dan_toc","ma_dan_toc","$row[ma_dan_toc]");
    $ton_giao=$this->model->get_table_dk("ton_giao","ma_ton_giao","$row[ma_ton_giao]");
    $phong_thi=$this->model->get_table_dk("phong_thi","ma_phong_thi","$row[ma_phong_thi]");
    $khoi_thi=$this->model->get_table_dk("khoi_thi","ma_khoi_thi","$row[ma_khoi_thi]");
    ?>
    <tr >
      <td><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><?php echo $row['so_bao_danh']; ?></a></td>
      <td><?php echo $phong_thi[0]['ten_phong_thi']; ?></td>
      <td><?php echo $khoi_thi[0]['ten_khoi_thi']; ?></td>
      <td><?php echo $row['ho_ten']; ?></td>
      <td><?php if($row['gioi_tinh']==1){echo "Nam";}else {echo "Nữ";} ?></td>
      <td><?php echo $row['ngay_sinh']; ?></td>
      
      <td><?php echo $row['dia_chi']; ?></td>
      <td><?php echo $row['so_cmt']; ?></td>
      <td><?php echo $khu_vuc[0]['ten_khu_vuc']; ?></td>
      <td><?php echo $ton_giao[0]['ten_ton_giao']; ?></td>
      <td><?php echo $dan_toc[0]['ten_dan_toc']; ?></td>
      


      <td><a href="<?echo base_url();?>index.php/home/xoa/<?php echo $row['so_bao_danh'];?>"><i class="fa fa-close fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><i class="fa fa-check fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.php/home/thisinh/sua-diem/<?php echo $row['so_bao_danh']; ?>"><i class="fa fa-check fa-2x"></i></a></td>
   

              
    </tr>
    <?php }  ?>
    </tbody>
    </table>
</div></div>
<!-------------------------------------------------------------------------------------------------------------------->   