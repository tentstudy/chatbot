<?php
	$filedata = file_get_contents('in.jpg');
	$url = 'http://server-backup5.trolyfacebook.com:22103/filter/?mode=0';
	/*image={{image}}&*/
    // Đối với filedata phải có ký hiệu @ ở trước
    $postfields = array("filedata" => "@$filedata");
     
    // Khởi tạo CURL
    // URL trỏ đến file upload.php
    $ch = curl_init($url);
     
    // Cấu hình có sử dụng header
    // Vì chúng ta đang gửi file nên header của nó
    // phải ở dạng Content-Type:multipart/form-data
    $headers = array("Content-Type:multipart/form-data");
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     
    // Cấu hình sử dụng method POST
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
     
    // Thiết lập có gửi file và thông tin file      
    // Cấu hình return 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
    // Thực thi
    $data = curl_exec($ch);
     
    // Nếu không tồn tại lỗi nào trong CURL
    if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200){
            echo 'Upload thành công';
        }
    }
    else
    {
        echo curl_error($ch);
    }
     
    // Đóng CURL
    curl_close($ch);
	echo $data;
?>