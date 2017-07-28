<?php 
	// Đường dẫn upload
$uploadpath = "upload/";
 
// Nhận thông tin
$filedata = $_POST['filedata']['tmp_name'];
$filename = $_POST['filename'];
 
 
if ($filedata != '' && $filename != ''){
    // Dùng hàm copy để lưu vào thay vì hàm move_upload_file như thông thường
    copy($filedata,$uploadpath.$filename);   
}


?>