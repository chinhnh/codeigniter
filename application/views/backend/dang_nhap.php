
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Đăng Nhập Thành Viên</title>
 <!-- BOOTSTRAP STYLES-->
    <link href="<?echo $frontend;?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?echo $frontend;?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?echo $backend;?>/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="<?echo $backend;?>/js/jquery-1.3.1.min.js"></script>
        <script src="<?echo $frontend;?>/assets/js/bootstrap.js"></script>

</head>


<body >

<!---------------------------------------------------------------------------------------------->     
 <div class="container">
        <div class="row">
<?php
$attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
echo form_open(base_url()."admin/user", $attributes);?>

    <script type="text/javascript">
        var $j = jQuery.noConflict();
    </script>
 
           
<div class="col-md-4"></div>
 <div class="col-md-4 " style="margin: 50px 10px 20px 10px; ">
	
                
                <div style="text-align: right; color: #F00;">
                    <span  class="NormalRed"></span>
                </div>
                <div class="form-group">
                       <div class="key">
                            Tên đăng nhập<span  style="color:Red;">(*)</span>:
                        </div>
                        <div class="val">
                                <div>
                                    <input name="user" placeholder="Username" class="form-control" type="text" maxlength="50" id="user"  value="<?php echo set_value('user'); ?>" /></div>  
                        </div>
                   
                     <div class="key">
                            Mật khẩu   <span  style="color:Red;">(*)</span>:
                        </div>
                        <div class="val">
                            <div class="tb_container tb_password_container">    
                                <div>
                                    <input name="pass"placeholder="Password" class="form-control" type="password" maxlength="30" id="pass" class="textbox" tabindex="4" value="<?php echo set_value('pass'); ?>" /></div>
                            </div>
                         
                        </div>

                        <div class="val">
                             <span class="Normal"><input id="RememberCheckbox"  type="checkbox" name="RememberCheckbox" /><label for="RememberCheckbox" tabindex="5">Nhớ mật khẩu</label></span>
                        </div>

                        <div class="key">&nbsp;</div>

                        <div class="val">
                            <input type="hidden" name="submit" value="login" class="login_btn" tabindex="6" />
                            <input type="submit" class="btn btn-success" value="Login" class="login_btn" tabindex="6" />
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="./dang_ky.php">Đăng ký</a>
                        </div>
                        <div class="key">&nbsp;</div>
                   

                </div>
    


            </div>
     
<?php echo form_close(); ?>
<?php echo $this->session->flashdata('msg'); ?>
     </div></div>
    </div>  </div></body>
</html>
<?php

?>