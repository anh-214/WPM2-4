<?php
require_once './models/Student.php';
class StudentController
{
    private $student;
    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $idfaculty = $_GET['id_faculty'];
        $result = $this->student->index($idfaculty);
        require('./views/students/index.php');
    }
    public function delete(){
        $idfaculty=$_GET['id_faculty'];
       
        $id=$_GET['id_student'];
        $results = $this->student->delete($id);
        
        if ($results) {
            
            header('location:index.php?controller=student&action=index&id_faculty='.$idfaculty);
        }
    }
}
