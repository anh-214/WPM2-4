<?php 

class Model
{   
    protected $conn;

    public function __construct()
    { 
        $this->conn = mysqli_connect('localhost','root','','db_manager_student');

        if (!$this->conn){
            die('kết nối không thành công');
        }
    }
}   
?>