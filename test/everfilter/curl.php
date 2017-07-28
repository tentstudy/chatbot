<?php 
// Nếu submit form
if (isset($_POST['btnUpload']))
{
    // Lấy thông tin file upload
    $filename = $_FILES['file']['name'];
    $filedata = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
     
    // Nếu file OK
    if ($filedata != '')
    {
        $headers = array("Content-Type:multipart/form-data");
        // Đối với filedata phải có ký hiệu @ ở trước
        $postfields = array("filedata" => "@$filedata", "filename" => $filename);
         
        // Khởi tạo CURL
        // URL trỏ đến file upload.php
        $ch = curl_init('http://localhost/2_develop/tour/upload.php');
         
        // Cấu hình có sử dụng header
        // Vì chúng ta đang gửi file nên header của nó
        // phải ở dạng Content-Type:multipart/form-data
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         
        // Cấu hình sử dụng method POST
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
         
        // Thiết lập có gửi file và thông tin file 
        curl_setopt($ch, CURLOPT_INFILESIZE, $filesize);
         
        // Cấu hình return 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
        // Thực thi
        curl_exec($ch);
         
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
    }
    else
    {
        echo 'Bạn chưa chọn file để upload';
    }
}
echo 'xong';
?>