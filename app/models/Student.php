<?php
namespace App\Core;
require_once '../app/core/Database.php';

use App\Core\Database;
class Student extends Database
{
    protected $table = 'students';
    // Tampilkan daftar siswa
    public function getStudents()
    {
        $students = [];
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();
        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
        return $students;

    }
}

?>