<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users1 WHERE NOT user_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users1 are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>