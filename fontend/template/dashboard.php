<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">


    <!-- <link rel="stylesheet" href="../css-sys/style.css"> -->
    <link rel="stylesheet" href="/fontend/css-sys/style.css">
</head>

<body>
<?php

$email_admin = "admin@st.phenikaa-uni.edu.vn";
$pass_admin = "password";

if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form gửi lên 
    $email_form = $_POST["email"];
    $password_form  = $_POST["password"];

    ## kết nối dữ liệu với mysql : local , root , pass , csdl 


    if ($email_admin == $email_form) {
        // header("Location:student_admin.php");

        header("Location:/QLSV_Crud/admin/admin.php");  
        // echo "đúng";

    } else {
        // header("Location:/QLSV_Crud/student/student.php");
        if (isset($_POST['submit'])) {
            // Lấy dữ liệu từ form gửi lên 
            $email = $_POST["email"];
            $password  = $_POST["password"];

            ## kết nối dữ liệu với mysql : local , root , pass , csdl 

            $database = mysqli_connect("localhost", "root", "", "database_ktpm_official");


            ## truy vấn dữ liệu - tim name và pass trong csdl

            $sql = "select * from login_offcial_1 
              where Email = '$email' and Password  = '$password' ";


            # thực thi truy vấn 
            # đây sẽ trả về số lượng : nếu lớn hơn 0 là truy vấn về đc rồi 
            # = 0 là không truy vấn đc

            $query = mysqli_query($database, $sql);

            if (mysqli_num_rows($query) > 0) {
                echo ("Đăng nhập thành công ");

                foreach ($query as $item) {
?>





    <div class="main-wrapper">
        <div class="header">
            <div class="header-left ">

                <img src="../image/LOGO.png" alt="Logo" style="height:100% ;"><br>

                <h2>PHENIKAA</h2>

            </div>

            <div class="top-nav-search">
                <form action="/QLSV_Crud/admin/Form_search_admin.php" method="post">
                    <input name = "ID" type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="../template/dashboard.html">Admin Dashboard</a></li>
                                    </ul>
                        </li>
                        <li class="submenu active">
                            <a href="/fontend/template/ktx.html"><i class="fas fa-user-graduate"></i> <span> Log out</span> <span
                                    class="menu-arrow"></span></a>
                        </li>
 

                        <li class="menu-title">
                            <span>KTX</span>
                        </li>

                        <li>
                            <a href="/QLSV_Crud/admin/display_infor_SV.php"><i class="fas fa-holly-berry"></i> <span>THÔNG BÁO</span></a>
                        </li>





                    </ul>
                </div>
            </div>
        </div>








                
                <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Students</h3>
                            <div style="display: flex;">

                                <!-- <div class="avatar-wrapper">
                                    <img class="profile-pic" src="../student/IMG/no-avatar.png" />
                                    <div class="upload-button">
                                        <i class=" aria-hidden=" true"></i>
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*" aria-hidden="true" />
                                </div> -->

                                <table style="width: 80%; ">
                                    <tr>
                                        <th>MSSV</th>
                                        <td><?= $item['id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Họ và Tên</th>
                                        <td><?= $item['Name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ngày Sinh</th>
                                        <td><?= $item['Birthday']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="../student/upload.js"></script>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">

                                        <tr>
                                            <th>Thông tin sinh viên</th>
                                            <th style="text-align: left;">Sinh viên</th>
                                        </tr>

                                        <tr>
                                            <th>Email</th>
                                            <td><?= $item['Email']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>CMND/CCCD</th>
                                            <td><?= $item['cccd']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td><?= $item['Password']; ?></td>

                                        </tr>

                                        <tr>
                                            <th>Room</th>
                                            <td><?= $item['Room']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Number_Phone</th>
                                            <td><?= $item['Number_Phone']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><?= $item['Address']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>House</th>
                                            <td><?= $item['House']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Tiền Điện Nước</th>
                                            <td><?= $item['Bill']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Khoa</th>
                                            <td><?= $item['Khoa']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Khóa</th>
                                            <td><?= $item['K']; ?></td>

                                        </tr>
                                        <tr>
                                            <th>Lớp</th>
                                            <td><?= $item['Class']; ?></td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php

                     
}
}
}
}
} 
?>
                
                <div class="row">

            </div>
        </div>
        </div>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->

</html>