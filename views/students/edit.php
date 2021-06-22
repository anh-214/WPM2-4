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
            <table class="table table-bordered col-md-3">
                <thead>
                    <tr>
                        <th scope="col">Quản trị học viên</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">Danh sách học viên</td>
                    </tr>
                    <tr>
                        <td scope="col"><a href="index.php?controller=faculty&action=index">Danh sách KHOA</a></td>
                    </tr>
                    <tr>
                        <td scope="col"><a href="index.php?controller=student&action=create">Thêm mới</a> </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-9">
                <!--  -->
                <div class="mt-3 mb-3">
                    <form action="index.php?controller=student&action=update&id_student=<?php echo $_GET['id_student'] ?>&id_faculty=<?php echo $_GET['id_faculty']; ?>" method="POST" >
                        <div class=" form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $result['name']  ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Faculty</label>
                    <select name="faculty" class="form-control">
                        <option value="0">-----Chọn danh mục-----</option>
                        <?php
                        foreach ($results as $faculty) {
                        ?>
                            <option value="<?php echo $faculty['id_faculty'] ?>"><?php echo $faculty['name_faculty'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" value="<?php echo $result['phone']  ?>" name="phone" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="<?php echo $result['email']  ?>" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Addres</label>
                    <input type="text" value="<?php echo $result['addres']  ?>" name="addres" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" value="<?php echo $result['status']  ?>" name="status" class="form-control" />
                </div>
                <div class="btn-box">
                    <button class="btn btn-primary" name="submit" type="submit">Update</button>
                    <button type="button" class="btn btn-primary" onclick="history.go(-1)">Back</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>