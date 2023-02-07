<?php

    $Email = $_POST['email'];
    $Password = $_POST['pwd'];

    $Name = $_POST['Name'];
    $Birthday = $_POST['Birthday'];

    $Room = $_POST['Room'];
    $Phone = $_POST['Phone'];

    $Address = $_POST['Address'];
    $House = $_POST['House'];
    $Bill = $_POST['Bill'];
    $Id = $_POST['Id'];

    $Khoa = $_POST['Khoa'];
    $K = $_POST['K'];
    $Class = $_POST['Class'];


    // kết nối cơ sở dữ liệu
    // gọi cái file kia , file kia là file kết nối
    require_once 'ket_noi.php';


    // thêm dữ liệu :

    

	
    $insert_infor = "INSERT INTO login_offcial_1(id ,Name,Email,	
    Password,	
    Birthday,	
    Room,	
    Number_Phone,	
    Address,	
    House,Bill,Khoa,K,Class) VALUES ($Id ,'$Name','$Email', '$Password' , '$Birthday','$Room','$Phone','$Address','$House','$Bill','$Khoa','$K','$Class') ";

    // echo($insert_infor);exit;

    if (mysqli_query($conn,$insert_infor))
    {
        header("location: admin.php");
    }
        

?>