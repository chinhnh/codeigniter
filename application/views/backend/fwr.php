
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Qu?n l� nh�n vi�n</title>
<style type="text/css">

</style>
<script language="javascript" type="text/javascript">

</script>
<link href="<?echo $frontend;?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?echo $frontend;?>/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body >

<div id="header">
<?
$info_login=$this->session->userdata('lay_user');
if (isset($info_login['admin'])&&$info_login['admin']==1)
{ 
    echo "<br><p>Ch�o ,<a href='$link/login'>".$info_login['username']."</a><a href='user/info.php'>H? so</a><a href='user/logout.php'>Tho�t</a></p>"; 
}
else{
    echo "<br><p><a href='$linka/login'>�ANG NH?P</a><a href='$link/register'>�ANG K�</a></p>";
}
?>
</div>

<div id="wrapper">

<table style="margin-left: 70px; margin-top: 20px;" >
  <tr>
<!--------------------------------------------------------------------------------------------------------------------> 
 <td width="170" valign="top">

	<table width="100%" cellspacing="1" cellpadding="10">
      <tr>
        <td class="row3"><a href="<?echo base_url();?>home/nhanvien">Danh s�ch nh�n vi�n</a></td>
      </tr>
      
      <tr>
        <td class="row3"><a href="<?echo base_url();?>home/nhanviennghi">Danh s�ch ngh? vi?c</a></td>
      </tr>
    <?if (isset($info_login['admin'])&&$info_login['admin'] !=0){?>  
      <tr>
        <td class="row3"><a href="<?echo base_url();?>home/nhanvien/them-nhan-vien">Th�m m?i nh�n vi�n</a></td>
      </tr>
      
      <tr>
        <td class="row3"><a href="<?echo base_url();?>home/nhanvien/phong">Danh s�ch ph�ng ban</a></td>
      </tr>
      <tr>
        <td class="row3"><a href="<?echo base_url();?>home/nhanvien/chuc-vu">Th�ng tin ch?c v?</a></td>
      </tr>
    <?}?>
     
      
    </table>
 </td>
<!-------------------------------------------------------------------------------------------------------------------->
<td width="797" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
<!-------------------------------------------------------------------------------------------------------------------->            
      <tr>
        <td><div id="tieude">DANH S�CH NH�N VI�N <br/></div></td>
		
        </tr>
<!-------------------------------------------------------------------------------------------------------------------->        
        <tr>
        <td>
<!--------------------------------------------------------------------------------------------------------------------> 		
        <table><tr>       
        <div id="tieude3">
        <td>
		<form action="index.php?act=do&title=loc_nhan_vien" method="post">
          <select name="loc">
          <?foreach ($phong_ban as $row_phong){?>
           <option value="<?=$row_phong['phong_ban_id']?>"><?=$row_phong['ten_phong_ban']?></option>
           <?}?>
          </select>        
          <input type="submit" name="click" value="L?c nh�n vi�n"/>
          </form>
         </td> 
         <td style="float: right; margin-left: 280px;">
		 
          <form method="post" action="index.php?act=do&title=tim_ten">
          T�m ki?m :<input type="text" name="ten"  size="50px"/>          
          <input type="submit" name="click" value="T�m"/>
          </form>
          </td> 
        </div>

        </tr></table>
 <!-------------------------------------------------------------------------------------------------------------------->        
        
        </td>
        </tr>
<!-------------------------------------------------------------------------------------------------------------------->        
      <tr>
        <td valign="top">
        
    <table class="row2"width="1020" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <th width="80"  align="center">M� NV</th>
    <th width="180" align="center">H? V� T�N</th>
    <th width="10"  align="center">GI?I T�NH</th>
    <th width="10"  align="center">NG�Y SINH</th>
    <th width="90"  align="center">�I?N THO?I</th>
    <th width="90"  align="center">QU� QU�N</th>
    <th width="170" align="center">EMAIL</th> 

  
  <?php foreach($tt_nhanvien as $row){ 
    ?>
    <tr class="row">
      <td class="row1" width="100" align="left"><a href="<?echo base_url();?>home/nhanvien/sua-nhan-vien/<?php echo $row['ma_nhan_vien']; ?>"><?php echo $row['ma_nhan_vien']; ?></a></td>
      
      <td  class="row1" align="left"><?php echo $row['ho_ten']; ?></td>
      <td  class="row1" align="left"><?php if($row['gioi_tinh']==1){echo "Nam";}else {echo "N?";} ?></td>
      <td  class="row1" align="left"><?php echo $row['ngay_sinh']; ?></td>
      <td  class="row1" align="left"><?php echo $row['dien_thoai']; ?></td>
      <td  class="row1" align="left"><?php echo $row['dia_chi']; ?></td>
      <td  class="row1" align="left"><?php echo $row['email']; ?></td>

   
   
    </tr>
    <?php }  ?>
    </table>

    </td>
   </tr>
   </table>
<!-------------------------------------------------------------------------------------------------------------------->   

<!-------------------------------------------------------------------------------------------------------------------->   
<?php
if ($info_login['admin']!=1)
{
?>
<br /><table class="row4" width="100%" cellpadding="1" cellspacing="1" >
        <tr>
          <td width="30%"><a href="<?echo base_url();?>home/nhanvien/tt-gia-dinh/<?php echo $row['ma_nhan_vien']; ?>">Quan h? gia d�nh</a></td>
         
          <td  align="20%"><a href="<?echo base_url();?>home/nhanvien/tt-hop-dong/<?php echo $row['ma_nhan_vien']; ?>">H?p d?ng</a></td>
          
          <td  align="left"   ><a href="<?echo base_url();?>home/nhanvien/tt-cong-viec/<?php echo $row['ma_nhan_vien']; ?>">Th�ng tin c�ng vi?c</a></td>
   
        </tr>
      </table>
 
  <!--------------------------------------------------------------->
<?php
}
if(isset($require)){
?>
<table width="100%" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td><div id="tieude2"><?php echo $title; ?></div></td>
  </tr>
  <tr>
    <td><?php

$this->load->view("$require");
?></td>
  </tr>
  </table>
  <?}?>

<!--------------------------------------------------------------------------------------------------------------------> 





</td>
</tr>
</table>


</body>
</div>
</html>
