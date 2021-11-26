<?php 
    include 'config.php';

    $id = $_GET['ids'];

    $delete = "Delete from curdexam where id={$id}";
    $delete_query = mysqli_query($conn, $delete);

    if(!$delete_query){
        echo "<script>alert('Your record is not deleted!!');</script>";   
    }else{
        header("Location: display.php");
    }

?>