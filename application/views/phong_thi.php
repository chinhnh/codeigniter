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
 <thead>
   <tr>
    <th width="10"  align="center">Mã phòng</th>
    <th width="10"  align="center">Tên phòng</th>
   
    </tr></thead>
    <?foreach($tt_phongthi as $row){
  
    
    ?>
    <tbody>
    <tr >
    
     <td><?php echo $row['ma_phong_thi'];?></td>
      <td><?php echo $row['ten_phong_thi'];?></td>
    
    </tr>
   </tbody>
   
<?
}
?>
  </table>     
      
<!--**********************************************************************************************************************************-->  

</div></div>
</body>
</html>

