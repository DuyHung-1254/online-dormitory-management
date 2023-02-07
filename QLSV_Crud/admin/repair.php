<?php

#  trả về id vì trong thẻ a có trả về sid = id  
# lấy dữ liệu id cần xóa ( xóa = id)
// lấy về id từ cái nút bấm sửa
    $id = $_GET['sid'];

    require_once 'ket_noi.php';


    
    

    // lấy ra thông tin sinh viên từ id lấy về 

    $edit_id = "SELECT * FROM login_offcial_1 WHERE id =$id ";

    // thực thi câu lệnh với db
    $perform = mysqli_query($conn,$edit_id);

    # lấy vê dòng của id này 
    $row = mysqli_fetch_assoc($perform);

    # thay đổi và hiển thị thông tin sv 




?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <title>Repair</title>
</head>
<body>

    <div class="container" style = "border:1px solid rgb(194, 170, 170)">
      <form action="update.php" method = "post" >
        <!-- name -->
        <!-- Ẩn cái id đi để lấy về để biết sửa thg nào  -->
        <input type="hidden" name="sid" value="<?php echo($id)?>" id="">

        <div class="form-group">    
            <label for="email">Mã SV:</label>
            <input type ="number"   class="form-control" id="" placeholder="Enter Mã SV" name="Id" value="<?php echo($row['id'])?>">
        </div>


        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="" placeholder="Enter name" name="Name" value = "<?php echo $row['Name'] ?>">
          </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="" placeholder="Enter email" name="email" value="<?php echo $row['Email'] ?>">
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="text" class="form-control" id="" placeholder="Enter password" name="pwd" value="<?php echo ($row['Password'])?>">
        </div>

        <div class="form-group">
            <label for="">Birthday:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Birthday" name="Birthday"  value="<?php echo($row['Birthday']) ?>">
        </div>

        <div class="form-group">
            <label for="email">Room:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Room" name="Room" value="<?php echo($row['Room'])?>">
        </div>

        <div class="form-group">    
            <label for="email">Phone:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Phone" name="Phone" value="<?php  echo($row['Number_Phone'])?>">
        </div>

        <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Address" name="Address" value="<?php echo($row['Address']) ?>">
        </div>

        <div class="form-group">
            <label for="email">House:</label>
            <input type="text" class="form-control" id="" placeholder="Enter House" name="House" value="<?php echo($row['House'])?>">
        </div>

        <div class="form-group">
            <label for="email">Bill:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Bill" name="Bill" value="<?php echo($row['Bill'])?>">
        </div>


        <div class="form-group">
            <label for="email">Khoa:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Khoa" name="Address" value="<?php echo($row['Khoa']) ?>">
        </div>

        <div class="form-group">
            <label for="email">Khóa:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Khóa" name="House" value="<?php echo($row['K'])?>">
        </div>

        <div class="form-group">
            <label for="email">Lớp:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Lớp" name="Bill" value="<?php echo($row['Class'])?>">
        </div>



        



        <!-- <div class="checkbox"> -->
          <!-- <label><input type="checkbox" name="remember"> Remember me</label> -->
        <!-- </div> -->
        <button type="submit" class="btn btn-default">Cập nhật thông tin </button>
      </form>
    </div>
    
    </body>
</html>


