<?
session_start()
?>
<?
include ("connect/connect.php");
$title=$_GET['title'];
$id=$_GET['catID'];
if($title=="loc_nhan_vien"){
    
    $loc=$_POST['loc'];
    $sql="select * from tlb_nhanvien inner join tlb_congviec on tlb_nhanvien.ma_nhan_vien = tlb_congviec.ma_nhan_vien where tlb_congviec.phong_ban_id = '$loc' and nghi_viec=0";
    $query=mysql_query($sql);
    
    
}
else if($title=="tim_ten"){
    $ten=$_POST['ten'];
  $sql="select * from tlb_nhanvien where nghi_viec=0 and ho_ten like '%$ten%'";
$query=mysql_query($sql);   
}
else{
$sql="select * from tlb_nhanvien where  ma_nhan_vien='$id'";
$query=mysql_query($sql);   
$row=mysql_fetch_array($query);

$sql_phong="select * from tlb_phongban ";
$query_phong=mysql_query($sql_phong);   


}



?>