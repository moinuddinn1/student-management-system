<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $studentModel;

    public function __construct($conn) {
        $this->studentModel = new Student($conn);
    }

    public function getAllStudents() {
        return $this->studentModel->getAll();
    }

    public function getStudentById($id) {
        return $this->studentModel->getById($id);
    }

    public function addStudent($name, $email, $course) {
        return $this->studentModel->create($name, $email, $course);
    }

    public function updateStudent($id, $name, $email, $course) {
        return $this->studentModel->update($id, $name, $email, $course);
    }

    public function deleteStudent($id) {
        return $this->studentModel->delete($id);
    }

    // New: fetch students for pagination
    public function getStudentsByPage($limit, $offset) {
        return $this->studentModel->getByPage($limit, $offset);
    }

    // New: get total number of students
    public function getTotalStudents() {
        return $this->studentModel->getTotalCount();
    }
}
