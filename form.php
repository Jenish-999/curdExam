<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>Sign Up</title>
</head>
<?php include 'insert.php'; ?>
<body>
    <div class="container-sm my-4 p-3 w-25 border border-dark rounded bg-secondary">
        <h2 class="text-center white">Sign Up</h2>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Enter your Full Name"
                    autocomplete="off">
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                    autocomplete="off">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="mobile" placeholder="Enter your Mobile"
                    maxlength="10" autocomplete="off">
                <label for="floatingInput">Mobile</label>
            </div>
            <div class="mb-3">
                <select class="form-select form-select-lg mb-3" name="stream" aria-label=".form-select-lg example">
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
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>