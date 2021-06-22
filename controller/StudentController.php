<?php
require_once './models/Student.php';
require_once './models/Faculty.php';
class StudentController
{
    private $student;
    public function __construct()
    {
        $this->student = new Student();
        $this->faculty = new Faculty();
    }
    public function index()
    {
        $results = $this->student->index();
        require('./views/students/index.php');
    }
    public function view()
    {
        $id_faculty = $_GET['id_faculty'];
        $results = $this->student->view($id_faculty);

        require('./views/students/view.php');
    }
    public function create(){
        $results = $this->faculty->faculty();
        require('./views/students/create.php');
    }
    public function edit(){
        $id = $_GET['id_student'];
        $results = $this->faculty->faculty();
        $result = $this->student->view($id);
        require_once('./views/students/edit.php');
    }
    public function update()
    {
        $id_faculty=$_GET['id_faculty'];
        $data = $_POST;
        $id = $_GET['id_student'];
        $result = $this->student->update($data, $id);
        if($result)
        {
            header('location:index.php?controller=student&action=index&id_faculty='.$id_faculty);
        }
        
    }
    public function store(){
        //$id_faculty=$_GET['id_faculty'];
        $data = $_POST;
        $result = $this->student->create($data);
        if($result){
            header('location:index.php?controller=student&action=index');
        }
    }
    public function delete(){
        $id=$_GET['id_student'];
        $results = $this->student->delete($id);
        
        if ($results) {
            if (isset($_GET['id_faculty']))
            {
                header('location:index.php?controller=student&action=view&id_faculty='.$_GET['id_faculty']);
            } else
            {
                header('location:index.php?controller=student&action=index');
            }
        }
    }
}
