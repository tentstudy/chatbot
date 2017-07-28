<?php
    require_once '../../lib/curl.php';
    $image = 'https://scontent.xx.fbcdn.net/v/t35.0-12/20132597_113573032616692_1758978685_o.jpg?_nc_ad=z-m&oh=1c307fba9796e9e37db11514235adfb8&oe=596A2608';
    $url = 'http://server-backup5.trolyfacebook.com:22103/filter/?image={$image}&mode=0';
    $data = cURL($url);
    // $url = "http://api.everfilter.me/filters/shinkai?nightscape=0";

    // $param = array('data' => "{'media': $image}");
    // $data = cURLPost($url, $param);
    // echo $url;
    echo $data;
	// $param = array(
	// 	'data' => "'media' : @$in"
	// );
	// $out = cURLPost('http://api.everfilter.me/filters/shinkai?nightscape=0', $param);
	// // echo($in);
	// print_r($out);


	// $fp = @fopen('in.jpg', "rb");
	// $data = fread($fp, filesize('in.jpg'));
	// echo $data;
 //    $headers = array("Content-Type:multipart/form-data");
 //    // Đối với filedata phải có ký hiệu @ ở trước
 //    // require_once '../../lib/curl.php';
	// $in = file_get_contents('in.jpg');
	// $filename = 'in.jpg';
	// $filesize = filesize('in.jpg');
 //    $postfields = array("filedata" => "@$in", "filename" => $filename);
     
 //    // Khởi tạo CURL
 //    // URL trỏ đến file upload.php
 //    $ch = curl_init('http://api.everfilter.me/filters/shinkai?nightscape=0');
     
 //    // Cấu hình có sử dụng header
 //    // Vì chúng ta đang gửi file nên header của nó
 //    // phải ở dạng Content-Type:multipart/form-data
 //    curl_setopt($ch, CURLOPT_HEADER, true);
 //    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     
 //    // Cấu hình sử dụng method POST
 //    curl_setopt($ch, CURLOPT_POST, 1);
 //    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
     
 //    // Thiết lập có gửi file và thông tin file 
 //    curl_setopt($ch, CURLOPT_INFILESIZE, $filesize);
     
 //    // Cấu hình return 
 //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
 //    // Thực thi
 //    $data = curl_exec($ch);
	// curl_close($ch);
	// file_put_contents('out.jpg', $data);
 ?>