<?php
include '../connect.php';
if(isset($_REQUEST)){

    $sql = "SELECT * FROM tb_user WHERE 
    username = '".$_REQUEST['username']."'
    AND password = '".$_REQUEST['password']."' ";

    $query = $conn->query($sql);
    $num = $query->num_rows;
    $result = $query->fetch_object();

    if($num > 0) {
        session_start();
        $_SESSION['sess_id'] = session_id();
        $_SESSION['sess_fullname'] = $result->fullname;
        echo json_encode(array('status' => true,'massage'=>"Successfully"));  
    } else{
        echo json_encode(array('status'=> false,'massage'=> "Username or Password is incorrect "));
    }
}


?>