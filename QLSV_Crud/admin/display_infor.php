


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

      <!-- <link rel="stylesheet" href="datatables.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<style>
                     /*
               DEMO STYLE
            */

            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            body {
               font-family: 'Poppins', sans-serif;
               background: #fafafa;
            }

            p {
               font-family: 'Poppins', sans-serif;
               font-size: 1.1em;
               font-weight: 300;
               line-height: 1.7em;
               color: #999;
            }

            a,
            a:hover,
            a:focus {
               color: inherit;
               text-decoration: none;
               transition: all 0.3s;
            }

            .navbar {
               padding: 15px 10px;
               background: #fff;
               border: none;
               border-radius: 0;
               margin-bottom: 40px;
               box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            }

            .navbar-btn {
               box-shadow: none;
               outline: none !important;
               border: none;
            }

            .line {
               width: 100%;
               height: 1px;
               border-bottom: 1px dashed #ddd;
               margin: 40px 0;
            }

            /* ---------------------------------------------------
               SIDEBAR STYLE
            ----------------------------------------------------- */

            .wrapper {
               display: flex;
               width: 100%;
               align-items: stretch;
            }

            #sidebar {
               min-width: 250px;
               max-width: 250px;
               background: #7386D5;
               color: #fff;
               transition: all 0.3s;
            }

            #sidebar.active {
               margin-left: -250px;
            }

            #sidebar .sidebar-header {
               padding: 20px;
               background: #6d7fcc;
            }

            #sidebar ul.components {
               padding: 20px 0;
               border-bottom: 1px solid #47748b;
            }

            #sidebar ul p {
               color: #fff;
               padding: 10px;
            }

            #sidebar ul li a {
               padding: 10px;
               font-size: 1.1em;
               display: block;
            }

            #sidebar ul li a:hover {
               color: #7386D5;
               background: #fff;
            }

            #sidebar ul li.active>a,
            a[aria-expanded="true"] {
               color: #fff;
               background: #6d7fcc;
            }

            a[data-toggle="collapse"] {
               position: relative;
            }

            .dropdown-toggle::after {
               display: block;
               position: absolute;
               top: 50%;
               right: 20px;
               transform: translateY(-50%);
            }

            ul ul a {
               font-size: 0.9em !important;
               padding-left: 30px !important;
               background: #6d7fcc;
            }

            ul.CTAs {
               padding: 20px;
            }

            ul.CTAs a {
               text-align: center;
               font-size: 0.9em !important;
               display: block;
               border-radius: 5px;
               margin-bottom: 5px;
            }

            a.download {
               background: #fff;
               color: #7386D5;
            }

            a.article,
            a.article:hover {
               background: #6d7fcc !important;
               color: #fff !important;
            }

            /* ---------------------------------------------------
               CONTENT STYLE
            ----------------------------------------------------- */

            #content {
               width: 100%;
               padding: 20px;
               min-height: 100vh;
               transition: all 0.3s;
            }

            /* ---------------------------------------------------
               MEDIAQUERIES
            ----------------------------------------------------- */

            @media (max-width: 768px) {
               #sidebar {
                  margin-left: -250px;
               }
               #sidebar.active {
                  margin-left: 0;
               }
               #sidebarCollapse span {
                  display: none;
               }
            }

            
</style>

</head>

<div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dashboard</p>
                <li class="active">
                    <a href="./admin.php" data-toggle="" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <!-- <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="./notification.html">Notification</a>
                </li>
                <li>
                    <!-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a> -->
                    <!-- <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <!-- <a href="#">Portfolio</a> -->
                </li>
                <li>
                    <!-- <a href="#">Contact</a> -->
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                </li>
                <li>
                    <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> -->
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>





                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul> -->
                    </div>
                    
                </div>
            </nav>

            <?php

                $id = 10101;
                require_once 'ket_noi.php';
                $Title = $_POST['title'];
                $Infor = $_POST['infor'];
                
                $edit_id = "SELECT * FROM login_offcial_1 WHERE id =$id ";

                // thực thi câu lệnh với db
                $perform = mysqli_query($conn,$edit_id);
            
                # lấy vê dòng của id này 
                $row = mysqli_fetch_assoc($perform);

                $update_infor = "UPDATE login_offcial_1 SET  title='$Title',infor='$Infor' where id =$id";

                mysqli_query($conn,$update_infor);


            ?>


<div class="container-fluid">
    <h1>Thông Báo</h1>
    <p> Đề nghị chấp hành</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-6 col-lg-4 col-xl-2 bg-success">
            <?php
                $lien_ket_db = "SELECT * FROM login_offcial_1 WHERE id =$id ";

                $result = mysqli_query($conn,$lien_ket_db);
    
                # chạy qua từng hàng trong db , mỗi lần lặp là 1 hàng 

                while($r = mysqli_fetch_assoc($result))
                {
                    echo $r['title'];  

                }

            ?>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8 col-xl-10 bg-warning">
            <?php
                            $lien_ket_db = "SELECT * FROM login_offcial_1 WHERE id =$id ";

                            $result = mysqli_query($conn,$lien_ket_db);
                
                            # chạy qua từng hàng trong db , mỗi lần lặp là 1 hàng 
            
                            while($r = mysqli_fetch_assoc($result))
                            {
                                echo $r['infor'];  
            
                            }
            ?>
            </div>
        </div>
    </div>
</div>


            
            

   </div>
</div>


</body>
</html>


<script>

   $(document).ready(function () {
               $('#sidebarCollapse').on('click', function () {
                  $('#sidebar').toggleClass('active');
               });
         });
</script>


