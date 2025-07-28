<?php
namespace Canoy\StudentManagement\Model;
use Canoy\StudentManagement\Core\Crud;
use Canoy\StudentManagement\Core\Database;

Class StudentModel extends Database implements Crud {
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct()
    { 
        parent::__construct();
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }

    public function displayInfo(){
        echo "Id: " . $this->id."\n";
        echo "Name: " . $this->fullname."\n";
        echo "Year Level: " . $this->yearLevel."\n";
        echo "Course: " . $this->course."\n";
        echo "Section: " . $this->section."\n";
    }

    public function create(){
        try {
            $sql = "INSERT INTO students (id, fullname, yearLevel, course, section) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt-> bind_param("ssss", $this->id, $this->fullname, $this->yearLevel, $this->course, $this->section);
            if ($stmt->execute()) {
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function read(){
        try{
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);             
            return $results->fetch_all(MYSQLI_ASSOC);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public function update(){
        try{
            $sql = "UPDATE students SET fullname=?, yearLevel=?, course=?, section=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt-> bind_param("ssss", $this->fullname, $this->yearLevel, $this->course, $this->section, $this->id,);
            if ($stmt->execute()) {
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function delete(){
        try {
            $sql = "DELETE FROM students WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt-> bind_param("i", $this->id,);
            if ($stmt->execute()) {
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}