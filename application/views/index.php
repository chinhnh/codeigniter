<?
$info_login=$this->session->userdata('lay_user');
if (isset($info_login['username'])){
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý nhân viên</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    <link href="<?echo $frontend;?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?echo $frontend;?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="<?echo $frontend;?>/assets/css/style.css" rel="stylesheet" />
    <!--
<link href="<?//echo $frontend;?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?//echo $frontend;?>/css/style.css" rel="stylesheet" type="text/css" />
-->
</head>

<body >



<div id="wrapper">
       <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.html">Trang quản trị</a>
            </div>

            <div class="notifications-wrapper">
         <ul class="nav">
   
                <li class="pull-right"> 
                <?

if (isset($info_login['username']))
{ 
    echo "<br><p>Chào ,<a href='$link/login'>".$info_login['username']."</a><a href='user/info.php'>Hồ sơ</a><a  href='$linka/logout'>Thoát</a></p>"; 
}
else{
    echo "<br><p><a class='link' href='$linka/login'>ĐĂNG NHẬP</a><a href='$link/register'>ĐĂNG KÝ</a></p>";
}
?></li>
                
            </ul>
               


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?echo $frontend;?>/assets/img/user.jpg" class="img-circle" width="120px" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="index.php"> <strong> <??></strong></a>
                    </li>

                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-dashboard "></i>Bảng điều khiển</a>
                    </li>
                    
                   
                        

                </ul>
            </div>

        </nav> 
         
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
            
             <?if (isset($info_login['admin'])&&$info_login['admin'] !=0){?>   
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-family:time new roman;">Bảng điều khiển</h1>
                    </div>
                </div> 
    <div class="col-md-12 ">
      <div id="header">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>
             
                    <div class="navbar-collapse collapse" id="menu2">
                        <ul class="nav navbar-nav">
                          <li><a href="<?echo base_url();?>index.php/home/thisinh/them-thi-sinh">Thêm thí sinh</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh">Danh sách thí sinh</a></li>   
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/diem-thi">Thông tin điểm thi</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/khoi-thi">Khối thi</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/khu-vuc">Khu vực</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/phong-thi">Phòng thi</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/ton-giao">Tôn giáo</a></li>
                            <li><a href="<?echo base_url();?>index.php/home/thisinh/dan-toc">Dân tộc</a></li>
                           

              </ul> </div>   
               
          
                    </div>
                </nav>
     
    </div><br /><?}?>  

	
<!-------------------------------------------------------------------------------------------------------------------->            
<div class="col-md-12">
<div class="col-md-3">
<div class="panel panel-info"><div class="panel-heading" style="text-align: center;"><a href="<?echo base_url();?>index.php/service/view/json/BVS001">Test json</a></div></div>
</div>
<div class="col-md-3">
<div class="panel panel-warning"><div class="panel-heading" style="text-align: center;"><a href="<?echo base_url();?>index.php/service/view/xml/BVS001">Test xml</a></div></div>
</div>

</div>
		
 
<!--------------------------------------------------------------------------------------------------------------------> 		
    
       <div class="col-md-12" style="margin-bottom: 20px; text-align: center;">
		<form class="form-inline" action="<?=$link;?>/thisinh/search/phong" method="post">
          <select class="form-control" name="phong">
          <?foreach ($phong as $row_phong){?>
           <option value="<?=$row_phong['ma_phong_thi']?>"><?=$row_phong['ten_phong_thi']?></option>
           <?}?>
          </select>        
          <input class="btn btn-success" type="submit" name="click" value="Lọc phòng thi"/>
          </form>
        <br />
		 
          <form class="form-inline" method="post" action="<?=$link;?>/thisinh/search/ten">
          <input type="text" class="form-control" placeholder="nhập tên" name="ten"  size="50px"/>          
          <input type="submit" class="btn btn-danger" name="click" value="Tìm"/>
          </form>
          
        </div><br /><br />

        
 <!-------------------------------------------------------------------------------------------------------------------->          
        
        
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
      
<?php if(isset($info_login['admin'])&&$info_login['admin'] !=0){?>

      <td><a href="<?echo base_url();?>index.php/home/xoa/<?php echo $row['so_bao_danh'];?>"><i class="fa fa-close fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.php/home/thisinh/sua-thi-sinh/<?php echo $row['so_bao_danh']; ?>"><i class="fa fa-check fa-2x"></i></a></td>
      <td ><a href="<?echo base_url();?>index.php/home/thisinh/sua-diem/<?php echo $row['so_bao_danh']; ?>"><i class="fa fa-check fa-2x"></i></a></td>
   
<?}?>
              
    </tr>
    <?php }  ?>
    </tbody>
    </table>
</div></div>
<!-------------------------------------------------------------------------------------------------------------------->   

<!-------------------------------------------------------------------------------------------------------------------->   
 </div>
 </div>
 </div>
 
            <!-- /. PAGE INNER  -->
      
 <footer>
    </footer>
    <!-- /. FOOTER  -->
            
 <script src="<?echo $frontend;?>/assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?echo $frontend;?>/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?echo $frontend;?>/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?echo $frontend;?>/assets/js/custom.js"></script>
</body>
</div>
</html>

<?}
else{
  echo "<script>location.href='$linka/login'</script>" ;
    
}?>


<style>td{text-align: center;}</style>


