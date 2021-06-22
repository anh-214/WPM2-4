<?php 

    require_once './models/Faculty.php';
    class FacultyController
    {
        private $faculty;
        public function __construct()
        {
            $this->faculty = new Faculty();
        }

        public function index()
        {
            require './views/faculty/index.php';
        }
        public function faculty()
        {   
            if(
                isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
                strcasecmp($_SERVER['HTTP_X_REQUESTED_WITH'], 'xmlhttprequest') == 0
            ) 
            {
                $faculties = $this->faculty->faculty();
                return require('views/faculty/data.php');
                
            }   
        }
        // public function viewfaculty()
        // {   
        //     $id_faculty = $_GET['id_faculty'];
        //     $faculty = $this->student->viewfaculty($id_faculty);
        //     require('./views/student/view.php');
                
        // }
    }