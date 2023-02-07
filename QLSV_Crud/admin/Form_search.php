<!-- form_search -->

<!-- <form action="./Form_search.php" method="post">

    <Label>Nhập mã sinh viên </Label>
    <input style = "margin-left :200px; margin-bottom : 200px;" type="text" name = "ID">
 
    <button class = "button_submit_id" type = "submit" name ="submit_id" style = "margin-left :200px;" >Search</button>
 
    
 </form> -->
 


 <!DOCTYPE html>
 <html lang="en">
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <title>Document</title>
 </head>
 <body>
   <div class="container">      
    <h2>Danh Sách Sinh Viên Ở Ký Túc Xá</h2>
        <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Room</th>
            <th> Phone</th>
            <th>Address</th>
            <th>House</th>
            <th>Bill</th>
            
        </tr>
        </thead>
        <tbody>

        <?php


            // liên kết databases

            $conn = mysqli_connect("localhost","root" ,"" ,"database_ktpm_official");
            $id = $_POST["ID"];

            // câu lệnh 
            $lien_ket_db = "SELECT * FROM login_offcial_1 where id = $id";


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
                    <td> <?php  echo $r['Birthday'];  ?>     </td>
                    <td> <?php  echo $r['Room'];  ?>     </td>
                    <td> <?php  echo $r['Number_Phone'];  ?>     </td>
                    <td> <?php  echo $r['Address'];  ?>     </td>
                    <td> <?php  echo $r['House'];  ?>     </td>
                    <td> <?php  echo $r['Khoa'];  ?>     </td>
                    <td> <?php  echo $r['K'];  ?>     </td>
                    <td> <?php  echo $r['Class'];  ?>     </td>
                    <td> <?php  echo $r['Bill'];  ?>     </td>
                </tr>  

                <?php
    
                

            }

            
        ?>
            </tbody>
            </table>

    


    </div>
 </body>
 </html>