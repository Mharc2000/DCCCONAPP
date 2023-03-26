<?php

include("config.php");   

if (isset($_POST['POSTED'])) {

    $Name = $_POST['Name'];
    $Message = $_POST['Message'];
  

    $query = "INSERT INTO users (Name, Message) VALUES (?,?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $Name, $Message);
    mysqli_stmt_execute($stmt);
    if($stmt){
        ?>
        <script>
            swal({
            title: "Message Posted!",
            icon: "success"
            }).then(function() {
            // Redirect the user
            window.location.href='index.php';
            console.log('The Ok Button was clicked.');
            });
        </script>
        <?php
    }
} 

?>