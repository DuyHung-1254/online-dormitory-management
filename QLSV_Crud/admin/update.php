<?php

    $Email = $_POST['email'];
    $Password = $_POST['pwd'];

    $Name = $_POST['Name'];
    $Birthday = $_POST['Birthday'];

    $Room = $_POST['Room'];
    $Phone = $_POST['Phone'];

    $Address = $_POST['Address'];
    $House = $_POST['House'];
    $Bill =$_POST['Bill'];

    // lây dữ liệu từ file lien_ket(để sửa đugns thg )
    $Id = $_POST['sid'];


    // kết nối cơ sở dữ liệu
    // gọi cái file kia , file kia là file kết nối
    require_once 'ket_noi.php';


    // sửa dữ liệu :

    
    // echo($Id);
	
    $update_infor = "UPDATE login_offcial_1 SET  id='$Id' , Name= '$Name',Email=  '$Email' , Password=  '$Password',Birthday='$Birthday',Room ='$Room', Number_Phone= '$Phone',Address= '$Address',House= '$House',Bill= '$Bill' where id = '$Id'";

    // $perform_update = mysqli_query($conn,$update_infor);


    if (mysqli_query($conn,$update_infor))
    {
        header("location: admin.php");

    }
        




?>


