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
 
<link href="<?echo $frontend;?>/css/main.css" rel="stylesheet" type="text/css" />
   <!--<link href="<?//echo $frontend;?>/css/style.css" rel="stylesheet" type="text/css" />
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
                <a  class="navbar-brand" href="index.html"><?if ($info_login['admin']!=0){echo "Trang Quản Trị"; }else echo "Trang cá nhân"; ?></a>
            </div>

            <div class="notifications-wrapper">
         <ul class="nav">
 
                <li class="pull-right"> 
                <?

if (isset($info_login['username']))
{ 
    echo "<br><p>Chào ,<a href='$link/login'>".$info_login['username']."</a><a  href='$linka/logout'>Thoát</a></p>"; 
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
                        <a  href="index.php"> <strong> <?=$info_login['username'];?></strong></a>
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
     
    </div><br /> <?}?>

	
<!-------------------------------------------------------------------------------------------------------------------->            
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
        


<?php
if(isset($require)){
?>
<div class="col-md-12"> <div class="panel panel-primary"><div class="panel-heading " style=" text-align:center;" > <?php echo $title; ?></div></div></div>
<?php
$this->load->view("$require");
?>
  <?}?>

<!-------------------------------------------------------------------------------------------------------------------->




 </div>
 </div>
 </div>
 
            <!-- /. PAGE INNER  -->
          
                <footer  >
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
