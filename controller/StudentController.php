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
            require './views/students/index.php';
        }
        public function faculty()
        {   
            if(
                isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
                strcasecmp($_SERVER['HTTP_X_REQUESTED_WITH'], 'xmlhttprequest') == 0
            ) 
            {
                $faculties = $this->student->faculty();
                return require('views/students/data.php');
                
            }   
        }
        public function viewfaculty()
        {   
            $id_faculty = $_GET['id_faculty'];
            $faculty = $this->student->viewfaculty($id_faculty);
            require('./views/students/view.php');
                
        }
    }