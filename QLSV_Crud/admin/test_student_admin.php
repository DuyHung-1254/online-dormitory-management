<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="../student/style.css">

    <title>Document</title>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-110e3ee2-ccb3-8957-7b69-08e904d49e3b" crossorigin="">
    </script>
    <script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(".profile-pic").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };

        $(".file-upload").on("change", function() {
            readURL(this);
        });

        $(".upload-button").on("click", function() {
            $(".file-upload").click();
        });
    });
    </script>
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

            header("Location:admin.php");
            // echo "đúng";

        } else {
            // header("Location:/QLSV_Crud/student/student.php");
            if (isset($_POST['submit'])) {
                // Lấy dữ liệu từ form gửi lên 
                $email = $_POST["email"];
                $password  = $_POST["password"];

                ## kết nối dữ liệu với mysql : local , root , pass , csdl 

                $database = mysqli_connect("localhost", "root", "", "login_official");


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
            <div class="header-left">

                <img src="../student/IMG/LOGO.png" style="width: 30px; height: 30px;" alt="Logo">

            </div>

            <div class="top-nav-search">


                <form action="./Form_search.php" method="post">

                    <!-- <Label>Nhập mã sinh viên </Label> -->
                    <input placeholder="Nhập Mã Sinh Viên:" class="form-control"
                        style="margin-left :200px; margin-bottom : 200px;" type="text" name="ID">

                    <button class="btn" type="submit" name="submit_id" style="margin-left :200px;"><i
                            class="fas fa-search"></i></button>


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
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> TIỀN ĐIỆN</span> <span
                                    class="menu-arrow"></span></a>

                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> THÔNG TIN PHÒNG</span> <span
                                    class="menu-arrow"></span></a>
                            < </li>

                        <li class="menu-title">
                            <span>KTX</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                                    class="menu-arrow"></span></a>

                        </li>
                        <li>
                            <a href=""><i class="fas fa-holly-berry"></i> <span>THÔNG BÁO</span></a>
                        </li>


                        <li>
                            <a href=""><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>


                        <li class="menu-title">
                            <span>Pages</span>
                        </li>

                        <li>
                            <a href=""><i class="fas fa-file"></i> <span>Blank Page</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Others</span>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                        </li>



                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
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

                                <div class="avatar-wrapper">
                                    <img class="profile-pic" src="../student/IMG/no-avatar.png" />
                                    <div class="upload-button">
                                        <i class=" aria-hidden=" true"></i>
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*" aria-hidden="true" />
                                </div>

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
                                            <td></td>

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
                                    </table>
                                </div>
                            </div>
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

    <?php
    if (isset($_POST["submit_id"])) {




        $database = mysqli_connect("localhost", "root", "", "login_official");
        $id = $_POST["ID"];
        $sql_id = "select * from login_offcial_1 
                   where id = $id";

        $query_id = mysqli_query($database, $sql_id);

        if (mysqli_num_rows($query_id) > 0) {
            echo ("Đăng nhập thành công ");

            foreach ($query_id as $item) {

    ?>
    <div class="father_box">

        <div>
            <p>Mã sinh viên</p>
            <p><?= $item['id']; ?> </p>
        </div>
        <br>
        <div>
            <p>Tên Sinh Viên</p>
            <p> <?= $item['Name']; ?></p>
        </div>

        <div>
            <p>Phòng</p>
            <p> <?= $item['Room']; ?></p>
        </div>
        <br>
        <div>
            <p>Số điện thoại</p>
            <p> <?= $item['Number_Phone']; ?></p>
        </div>

        <div>
            <p>Tòa</p>
            <p><?= $item['House']; ?></p>
        </div>
    </div>




    <?php
            }
        }
    }


    ?>
</body>

</html>