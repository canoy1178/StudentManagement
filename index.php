<?php
include 'vendor/autoload.php';

use Canoy\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 2024624001;
$student->fullname = "John Paul Canoy";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();