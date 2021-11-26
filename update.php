<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php';?>
    <title>Update</title>
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php';?>

<!-- Update php code -->
<?php 
    include 'config.php';
    $id = $_GET['ids'];
    $select_query = "Select * from curdexam where id={$id}";
    $select_query_fire = mysqli_query($conn, $select_query);
    $res = mysqli_fetch_assoc($select_query_fire);

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $stream = mysqli_real_escape_string($conn , $_POST['stream']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

            $update = "Update curdexam set name='".strtoupper($name)."',email='".strtoupper($email)."',mobile='".strtoupper($mobile)."',stream='".strtoupper($stream)."',gender='".strtoupper($gender)."' where id={$id}";
            $update_query = mysqli_query($conn, $update);
            if(!$update_query){
                echo "<script>alert('You are not recorded, Try Later!!');</script>";    
            }else{
                header("Location: display.php");
            }
    }


?>

<div class="container-sm my-4 p-3 w-25 border border-dark rounded bg-secondary">
        <h2 class="text-center white">Make Change</h2>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" value="<?php echo $res['name'];?>" placeholder="Enter your Full Name"
                    autocomplete="off">
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" value="<?php echo $res['email'];?>" placeholder="name@example.com"
                    autocomplete="off">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="mobile" value="<?php echo $res['mobile'];?>" placeholder="Enter your Mobile"
                    maxlength="10" autocomplete="off">
                <label for="floatingInput">Mobile</label>
            </div>
            <div class="mb-3">
                <select class="form-select form-select-lg mb-3" name="stream" value="<?php echo $res['stream'];?>" aria-label=".form-select-lg example">
                    <option selected>Select Stream</option>
                    <option value="BCA">BCA</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                        value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                        value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                        value="Other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
        </form>
    </div>

<!-- Footer -->
<?php include 'footer.php';?>

</body>
</html>