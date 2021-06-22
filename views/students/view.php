
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div id="nav-logo">
            <img id="logo" src="./image/logo.png" alt="none">
        </div>
        <div>
            <img id="background" src="./image/itplus.jpeg" alt="none">
        </div>

        <div class="row custom_table" style="width: 100%; margin:0;">
            <table class="table table-bordered col-md-2">
                <thead>
                    <tr>
                        <th scope="col">Quản trị học viên</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"><a href="index.php?controller=student&action=index">Danh sách học viên</a></td>
                    </tr>
                    <tr>
                        <td scope="col"><a href="index.php?controller=faculty&action=index">Danh sách KHOA</a></td>
                    </tr>
                    <tr>
                        <td scope="col"><a href="index.php?controller=student&action=create">Thêm mới</a> </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-10">
                <!--  -->
                <div class="mt-3 mb-3">
                    <!-- Modal create -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#_Code</th>
                                <th scope="col">Name</th>

                                <th scope="col">Faculty</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Addres</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($results) > 0) :
                                foreach ($results as $student) : ?>
                                    <tr>
                                        <td><?php echo $student['id_student'] ?></td>
                                        <td><?php echo $student['name'] ?></td>

                                        <td><?php echo $student['name_faculty'] ?></td>
                                        <td><?php echo $student['phone'] ?></td>
                                        <td><?php echo $student['email'] ?></td>
                                        <td><?php echo $student['addres'] ?></td>
                                        <td>
                                            <a href="index.php?controller=student&action=edit&id_student=<?php echo $student['id_student']; ?>&id_faculty=<?php echo $_GET['id_faculty']; ?>" class="btn btn-primary">Sửa</a>


                                            <a href="index.php?controller=student&action=delete&id_student=<?php echo $student['id_student']; ?>&id_faculty=<?php echo $_GET['id_faculty']; ?>" class="btn btn-danger" onclick=" return confirm('Press a button!')">Xóa</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            else : ?>
                                <td>0 result</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>