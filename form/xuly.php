<?php
    $tendangnhap= $_POST['tendangnhap'];
    $matkhau= $_POST['matkhau'];

    //Đưa dữ liệu vào bảng
    //Kết nối DB
    $conn= new mysqli('localhost', 'root', '', 'giasu');

    //Thêm dữ liệu vào bảng
    $sql= "INSERT INTO nguoidung (tendangnhap, matkhau) VALUES ('$tendangnhap', '$matkhau')";
    $result= $conn->query($sql);

    if($result){
        // This is in the PHP file and sends a Javascript alert to the client
    // $message = "wrong answer";
    // echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: ../index.php');
    }
    //Đóng kết nối
    $conn->close();
?>