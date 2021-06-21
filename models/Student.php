<?php
    require_once 'model.php';
    class Student extends Model
    {
        public function faculty()
        {
            $sql = "SELECT * FROM tbl_faculty";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }