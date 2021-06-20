<?php
class Model{
    protected $conn;
    public function __construct()
    {
        $this->conn=new mysqli('localhost','root','','db_manager_student');
    }
}