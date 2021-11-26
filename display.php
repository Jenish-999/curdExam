<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>Display</title>
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php';?>

    <!-- Display -->
    <div class="container my-2">
        <h2 class="text-center table-head">Members List</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Stream</th>
                    <th scope="col">Gender</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'config.php';
                    $select = "Select * from curdexam";
                    $select_fire = mysqli_query($conn, $select);
                    while($res = mysqli_fetch_assoc($select_fire)){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $res['id'];?></th>
                                <td scope="row"><?php echo $res['name'];?></td>
                                <td scope="row"><?php echo $res['email'];?></td>
                                <td scope="row"><?php echo $res['mobile'];?></td>
                                <td scope="row"><?php echo $res['stream'];?></td>
                                <td scope="row"><?php echo $res['gender'];?></td>
                                <td scope="row"><a href="update.php?ids=<?php echo $res['id'];?>"><i class="far fa-edit"></i></a></td>
                                <td scope="row"><a href="delete.php?ids=<?php echo $res['id'];?>"><i class="far fa-trash-alt"></i></a></td>
                            </tr>

                        <?php
                    }
                
                ?>
               
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php include 'footer.php';?>
</body>

</html>