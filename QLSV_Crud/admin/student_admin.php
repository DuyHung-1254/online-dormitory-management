<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title> Students</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">



      <link rel="stylesheet" href="datatables.min.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
   </body>
</html>
   <?php
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
                                          <li class="submenu active">
                                             <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                                          </li>
                                          <li class="submenu">
                                             <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> TIỀN ĐIỆN</span> <span class="menu-arrow"></span></a>
                                             
                                          </li>
                                          <li class="submenu">
                                             <a href="#"><i class="fas fa-building"></i> <span> THÔNG TIN PHÒNG</span> <span class="menu-arrow"></span></a>
                                             <
                                          </li>
                              
                                          <li class="menu-title">
                                             <span>KTX</span>
                                          </li>
                                          <li class="submenu">
                                             <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                                          
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
                                             <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
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
                                                            <th>MÃ SINH VIÊN</th>

                                                               
                                                            <th>HỌ TÊN</th>
                                                            <th>NGÀY SINH</th>
                                                            <th>PHÒNG</th>
                                                            <th>Mobile Number</th>
                                                            <th>Address</th>
                                                            <th>Tòa</th>
                                                            <!-- <th class="text-right">Action</th> -->
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $item['id']; ?></td>
                                                            <td><?= $item['Name']; ?></td>
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
?>


<!-- form_search -->

<!-- <form style = "margin-left :500px; padding-bottom : 600px; " action="./student.php" method="post">

    <Label >Nhập mã sinh viên </Label>
    <input  type="text" name = "ID">
 
    <button class = "button_submit_id" type = "submit" name ="submit_id"  >Search</button>
 
    
 </form>
  -->
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