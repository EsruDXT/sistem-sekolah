<?php
namespace App\Controllers;

require_once '../app/core/Controller.php';
use App\Core\Controller;
class StudentController extends Controller
{
    public function index()
    {
        $this->view('students.index');
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
