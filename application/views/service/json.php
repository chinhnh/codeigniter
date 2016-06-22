<?
if(isset($tt_diemthi)&&isset($diem_bang)&&isset($diem_kem)&&isset($diem_hon)){
header('Content-type: application/json');
$array_merge=array_merge($tt_diemthi,$diem_bang,$diem_kem,$diem_hon);
$get_diemthi =json_encode($array_merge);
echo $get_diemthi; 
}else {
    echo "null";
}
?>