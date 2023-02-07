<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">



   <!-- <link rel="stylesheet" href="datatables.min.css"> -->
   <!-- <link rel="stylesheet" href="style.css"> -->
   <link rel="stylesheet" href="/QLSV_Crud/student/style.css">

    <title>Document</title>
</head>
<body>
<?php

    $email_admin = "admin@st.phenikaa-uni.edu.vn";
    $pass_admin = "password";

    if(isset($_POST['submit']))
    {
        // Lấy dữ liệu từ form gửi lên 
        $email_form = $_POST["email"];
        $password_form  = $_POST["password"];

        ## kết nối dữ liệu với mysql : local , root , pass , csdl 


        if($email_admin == $email_form && $pass_admin ==$password_form )
        {
            // header("Location:student_admin.php");

            header("Location:admin.php");   
            // echo "đúng";

        }   
        else
        {
            // header("Location:/QLSV_Crud/student/student.php");
            if(isset($_POST['submit']))
            {
         // Lấy dữ liệu từ form gửi lên 
         $email = $_POST["email"];
         $password  = $_POST["password"];

         ## kết nối dữ liệu với mysql : local , root , pass , csdl 

         $database = mysqli_connect("localhost","root" ,"" ,"database_ktpm_official");


         ## truy vấn dữ liệu - tim name và pass trong csdl

         $sql = "select * from login_offcial_1 
                  where Email = '$email' and Password  = '$password' ";


         # thực thi truy vấn 
         # đây sẽ trả về số lượng : nếu lớn hơn 0 là truy vấn về đc rồi 
         # = 0 là không truy vấn đc

         $query = mysqli_query($database ,$sql);

             if(mysqli_num_rows($query) > 0)
             {
                 echo("Đăng nhập thành công ");
         
                 foreach($query as $item)
                 {
?>
                           <div class="main-wrapper">
                              <div class="header">
                                 <div class="header-left">

                                    <img src="IMG/LOGO.png" alt="Logo">

                                 </div>

                                 <div class="top-nav-search">


                                 <!-- <form>
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                 </form> -->


                                 <form action="./Form_search.php" method="post">

                                    <!-- <Label>Nhập mã sinh viên </Label> -->
                                    <input placeholder="Nhập Mã Sinh Viên:" class="form-control" style = "margin-left :200px; margin-bottom : 200px;" type="text" name = "ID">

                                    <button class="btn"type = "submit" name ="submit_id" style = "margin-left :200px;" ><i class="fas fa-search"></i></button>


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
                                             <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                                          </li>

                                          <li class="menu-title">
                                             <span>KTX</span>
                                          </li>

                                          <li>
                                             <a href="./display_infor_SV.php"><i class="fas fa-holly-berry"></i> <span>THÔNG BÁO</span></a>
                                          </li>

                                       
                                       
                                    
                                          <li class="submenu">
                                             <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                             <ul>
                                                <li><a href="tables-basic.html">Basic Tables </a></li>
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
                                             <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Students</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="card card-table">
                                             <div class="card-body">
                                                <div class="table-responsive">
                                                   <table class="table table-hover table-center mb-0 datatable">
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
                                                            <!-- <th class="text-right">Action</th> -->
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $item['id']; ?></td>
                                                            <td><?= $item['Name']; ?></td>
                                                            <td><?= $item['Email']; ?></td>
                                                            <td><?= $item['Password']; ?></td>
                                                            <td><?= $item['Birthday']; ?></td>
                                                            <td><?= $item['Room']; ?></td>
                                                            <td><?= $item['Number_Phone']; ?></td>
                                                            <td><?= $item['Address']; ?></td>
                                                            <td><?= $item['House']; ?></td>
                                                            <!-- <td class="text-right">
                                                               <div class="actions">
                                                               </div>
                                                            </td> -->
                                                         </tr>
                                                         
                                                      </tbody>
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
 if(isset($_POST["submit_id"]))
 {
 
 
 
 
    $database = mysqli_connect("localhost","root" ,"" ,"database_ktpm_official");
    $id = $_POST["ID"];
    $sql_id = "select * from login_offcial_1 
                   where id = $id" ;
 
    $query_id = mysqli_query($database ,$sql_id);            
 
    if(mysqli_num_rows($query_id) > 0)
    {
          echo("Đăng nhập thành công ");
 
          foreach($query_id as $item)
          {
 
                ?>
                   <div class="father_box" >
 
                      <div>
                         <p>Mã sinh viên</p> 
                         <p><?= $item['id']; ?>  </p>
                      </div>
 
                      <div> 
                         <p>Tên Sinh Viên</p>
                         <p> <?= $item['Name']; ?></p>
                      </div>
 
                      <div>
                        <p>Phòng</p> 
                        <p> <?= $item['Room']; ?></p>
                     </div>
 
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
