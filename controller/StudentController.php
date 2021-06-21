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
    public function create(){
        $results = $this->student->faculty();
        require('./views/students/create.php');
    }
    public function edit(){
        $id = $_GET['id_student'];
        $results = $this->student->faculty();
        $result = $this->student->view($id);
        require_once('./views/students/edit.php');
    }
    public function update()
    {
        $idfaculty=$_GET['id_faculty'];
        $data = $_POST;
        $id = $_GET['id_student'];

        
        $result = $this->student->update($data, $id);
        
        if($result){

            header('location:index.php?controller=student&action=index&id_faculty='.$idfaculty);
        }
         
        
    }
    public function store(){
        $idfaculty=$_GET['id_faculty'];
        $data = $_POST;
        $result = $this->employee->create($data);
        if($result){
            header('location:index.php?controller=student&action=index&id_faculty='.$idfaculty);
        }
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
