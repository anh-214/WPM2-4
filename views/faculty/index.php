<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
                        <td scope="col"><a name="faculty">Danh sách KHOA</a></td>
                    </tr>
                    <tr>
                        <td scope="col">Thêm mới</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-1"></div>
            <table class="table table-bordered col-md-8" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên khoa</th>
                        <th>Mô tả</th>
                        <th>Thời gian thành lập</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody id="tbody1">
                </tbody>
            </table>
        </div>
    </div>    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#table1').hide();
            function faculty()
            {   $('#table1').show();
                return $.ajax({
                    url: 'index.php?controller=faculty&action=faculty',
                    method: 'GET',
                    //dataType: "json",   
                    success: function(res) {
                        $("#tbody1").html(res);
                        console.log(res);
                    },
                    error: function(err) {
                        console.log(err)
                    }
                });
            }
            $("a[name='faculty']").click(function() {
                faculty()
            });
        });
    </script>
</body>
</html>