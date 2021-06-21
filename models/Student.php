<?php
require './models/model.php';
class Student extends Model
{
    public function index($idfaculty)
    {
        $sql = "SELECT * FROM tbl_faculty,tbl_student where tbl_faculty.id_faculty=tbl_student.id_faculty and tbl_student.id_faculty=$idfaculty";

        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function create($data){
        $sql="insert `tbl_student`( `id_faculty`, `name`, `email`, `phone`, `addres`, `status`) values('{$data['name']}','{$data['faculty']}','{$data['phone']}','{$data['email']}','{$data['addres']}','{$data['status']}')";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function view($idstudent){
        $sql="select * from tbl_student where id_student= $idstudent";
        $result=$this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function update($data,$id){
        $sql= "update student set name='{$data['name']}',id_faculty='{$data['faculty']}',phone='{$data['gender']}',email='{$data['email']}',addres='{$data['addres']}',status='{$data['status']}' where id_student=$id";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function delete($id)
    {

        $sql = "delete from tbl_student where id_student=$id";

        $results = $this->conn->query($sql);
        return $results;
    }
    public function faculty()
    {
        $sql = "SELECT * FROM tbl_faculty";
        $results = $this->conn->query($sql);
        return $results->fetch_all(MYSQLI_ASSOC);
    }
}
