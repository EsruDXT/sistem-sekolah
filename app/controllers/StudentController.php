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
        $id = intval($id);
        $studentModel = new Student();
        $student = $studentModel->getStudentById($id);
        $this->view('students.show', ['student' => $student]);
        
    }
    public function edit($id)
    {
        $studentModel = new Student();
        $student = $studentModel->getStudentById($id);
        $this->view('students.edit', ['student' => $student]);
    }
    public function store()
    {
        $studentModel = new Student();
        $result = $studentModel->insert($_POST);
        if ($result) {
            header("Location: /students");
            exit();
        } else {
            echo "Gagal menambahkan siswa.";
        }
}
}
?>