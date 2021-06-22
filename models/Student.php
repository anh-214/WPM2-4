<?php
require './models/model.php';
class Student extends Model
{   
    public function index()
    {
        $sql = "SELECT * FROM tbl_faculty, tbl_student where tbl_faculty.id_faculty=tbl_student.id_faculty";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function view($id_faculty)
    {
        $sql = "SELECT * FROM tbl_faculty,tbl_student where tbl_faculty.id_faculty=tbl_student.id_faculty and tbl_student.id_faculty=$id_faculty";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function create($data){
        $sql="INSERT INTO `tbl_student`(`id_student`, `id_faculty`, `name`, `email`, `phone`, `addres`, `status`) VALUES ('','{$data['faculty']}','{$data['name']}','{$data['email']}','{$data['phone']}','{$data['addres']}','{$data['status']}')";
        $result=$this->conn->query($sql);
        return $result;
    }
    // public function view($idstudent){
    //     $sql="select * from tbl_student where id_student= $idstudent";
    //     $result=$this->conn->query($sql);
    //     return $result->fetch_assoc();
    // }
    public function update($data,$id){
        $sql= "update tbl_student set name='{$data['name']}',id_faculty='{$data['faculty']}',phone='{$data['phone']}',email='{$data['email']}',addres='{$data['addres']}',status='{$data['status']}' where id_student=$id";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function delete($id)
    {

        $sql = "delete from tbl_student where id_student=$id";

        $results = $this->conn->query($sql);
        return $results;
    }
    
}
