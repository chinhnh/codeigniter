<?php
// trả ra dữ liệu dưới dạng xml
if(isset($tt_diemthi)&&isset($diem_bang)&&isset($diem_kem)&&isset($diem_hon)){
    $get_diemthi=array_merge($tt_diemthi,$diem_bang,$diem_kem,$diem_hon);
  		header('Content-type: text/xml');
		echo '<diemthi>';
		foreach($get_diemthi as $index => $vl) {
			if(is_array($vl)) {
				foreach($vl as $key => $value) {
				
				
							echo '<',$key,'>',$value,'</',$key,'>';
			
				}
			}
		}
		echo '</diemthi>';
}
else {
    echo "null";
}
