
<?php 

class Model
{   
    protected $conn;

    public function __construct()
    { 
        $this->conn = mysqli_connect('localhost','root','','db_manager_student');
        mysqli_set_charset($this->conn, 'utf8mb4');

        if (!$this->conn){
            die('kết nối không thành công');
        }
    }
}   
?>

