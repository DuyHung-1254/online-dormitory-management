<?php

$id = $_GET['sid'];
echo $id;

require_once 'ket_noi.php';

$delete_id = "DELETE FROM login_offcial_1 where id = $id";


$perform = mysqli_query($conn,$delete_id);

echo("Thanh công");
    
// trả về tragn liên kết 

header("location: admin.php");

?>


                    
                    

