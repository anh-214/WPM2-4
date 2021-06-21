<?php
require './models/model.php';
class Student extends Model {
    public function index($idfaculty)
    {
        $sql = "SELECT * FROM tbl_faculty,tbl_student where tbl_faculty.id_faculty=tbl_student.id_faculty and tbl_student.id_faculty=$idfaculty";
        
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function delete($id){
        
        $sql="delete from tbl_student where id_student=$id";
        
        $results=$this->conn->query($sql);
        return $results;
    }
}