<?php
namespace Canoy\StudentManagement\Model;
use Canoy\StudentManagement\Core\Crud;

class StudentModel implements Crud {
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct(){
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }

    public function displayInfo(){
        echo "id: " . $this->id."\n";
        echo "Name: " . $this->fullname."\n";
        echo "Year Level: " . $this->yearlevel."\n";
        echo "course: " . $this->course."\n";
        echo "section: " . $this->section."\n";
    }

    public function create(){
     
    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}