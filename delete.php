<?php
include('dbConfig.php');

if(isset($_GET['id'])){

    $id= $_GET['id'];

// echo $id;

    $delete = $dbconn->query("DELETE FROM `users` WHERE `user_id`='$id'");
    $id= $_GET['id'];
    if($delete){
      ?>
      <script>
        window.alert("Record Deleted Successfully");
        window.location = "index.php";  
      </script>
      <?php  
    }else{
        echo "fail";
    }




}


?>