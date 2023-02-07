
<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .btn-primary
        {
            padding : 5 20px;
        }
    </style>


</head>
<body>

<div class="container">      
    <h2>Danh Sách Sinh Viên Ở Ký Túc Xá</h2>
      <a class = "btn btn-primary" href="insert_infor.html">Insert</a> 
      <a class = "btn btn-primary" href="admin.php">Về Trang Admin</a>
      <a class = "btn btn-primary" href="/QLSV_Crud/student/KTX.html">Đăng xuất</a>
        <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Birthday</th>
            <th>Room</th>
            <th> Phone</th>
            <th>Address</th>
            <th>House</th>
            <th>Khoa</th>
            <th>KHóa</th>
            <th>Lớp</th>
            <th>Bill</th>
            <th>Repair</th>
            <th>Delete</th>
            
        </tr>
        </thead>
        <tbody>

        <?php

            // liên kết databases

            require_once 'ket_noi.php';

            // câu lệnh 
            $lien_ket_db = "SELECT * FROM login_offcial_1 order by id";

            // thực thi câu lệnh 

            $result = mysqli_query($conn,$lien_ket_db);
            
            # chạy qua từng hàng trong db , mỗi lần lặp là 1 hàng 
            while($r = mysqli_fetch_assoc($result))
            {
                ?>


                <tr>
                    <td> <?php  echo $r['id'];  ?>     </td>
                    <td> <?php  echo $r['Name'];  ?>     </td>
                    <td> <?php  echo $r['Email'];  ?>     </td>
                    <td> <?php  echo $r['Password'];  ?>     </td>
                    <td> <?php  echo $r['Birthday'];  ?>     </td>
                    <td> <?php  echo $r['Room'];  ?>     </td>
                    <td> <?php  echo $r['Number_Phone'];  ?>     </td>
                    <td> <?php  echo $r['Address'];  ?>     </td>
                    <td> <?php  echo $r['House'];  ?>     </td>
                    <td> <?php  echo $r['Khoa'];  ?>     </td>
                    <td> <?php  echo $r['K'];  ?>     </td>
                    <td> <?php  echo $r['Class'];  ?>     </td>
                    <td> <?php  echo $r['Bill'];  ?>     </td>


                    <!-- xóa và xóa theo id ( sid = ...) -->
                    <td>  <a class="btn btn-info" href="repair.php?sid=<?php  echo$r['id'];  ?> ">
                    
                    
                    Repair</a></td>

                    <!-- nếu đồng ý thì mới chuyển sang cái link xóa ( confirm) -->
                    <td> <a onclick = "return confirm('Bạn có muốn xóa sinh viên này không!!')" class="btn btn-danger"   href="./delete.php?sid=<?php  echo $r['id'];?>">Delete</a></td>

                </tr>  

                <?php
    
                

            }

            
        ?>
            </tbody>
            </table>

    


    </div>

</body>
</html>





