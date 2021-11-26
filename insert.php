<?php 
    include 'config.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $stream = mysqli_real_escape_string($conn , $_POST['stream']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

        $select = "Select email from curdexam where email='$email'";
        $select_fire = mysqli_query($conn, $select);
        $get_email_rows = mysqli_num_rows($select_fire);

        if(!$get_email_rows > 0){

            $insert = "Insert into curdexam(name,email,mobile,stream,gender) Values('".strtoupper($name)."','".strtoupper($email)."','".strtoupper($mobile)."','".strtoupper($stream)."','".strtoupper($gender)."')";
            $insert_query = mysqli_query($conn, $insert);
            if(!$insert_query){
                echo "<script>alert('You are not recorded, Try Later!!');</script>";    
            }

        }else{
            echo "<script>alert('This email is already exists!!');</script>";
        }
    }



?>