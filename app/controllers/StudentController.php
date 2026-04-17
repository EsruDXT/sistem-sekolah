<?php
namespace App\Controllers;

require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';
use App\Core\Controller;
use App\Core\Student;
class StudentController extends Controller
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getStudents();
        $this->view('students.index', ['students' => $students]);
    }
    public function create()
    {
        $this->view('students.create');
    }
    public function show($id)
    {
        $this->view('students.show');
    }
    public function edit($id)
    {
        $this->view('students.edit');
    }
}
