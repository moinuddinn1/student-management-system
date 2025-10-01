<?php
class Student {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Fetch all students
    public function getAll() {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $result = $this->conn->query($sql);
        $students = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }
        return $students;
    }

    // Fetch student by ID
    public function getById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM students WHERE id=$id LIMIT 1";
        $result = $this->conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    // Add student
    public function create($name, $email, $course) {
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
        $course = $this->conn->real_escape_string($course);
        $sql = "INSERT INTO students (name, email, course) VALUES ('$name','$email','$course')";
        return $this->conn->query($sql);
    }

    // Update student
    public function update($id, $name, $email, $course) {
        $id = (int)$id;
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
        $course = $this->conn->real_escape_string($course);
        $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Delete student
    public function delete($id) {
        $id = (int)$id;
        $sql = "DELETE FROM students WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Fetch students for a specific page (pagination)
    public function getByPage($limit, $offset) {
        $stmt = $this->conn->prepare("SELECT * FROM students ORDER BY id DESC LIMIT ? OFFSET ?");
        $stmt->bind_param("ii", $limit, $offset);
        $stmt->execute();
        $result = $stmt->get_result();
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        $stmt->close();
        return $students;
    }

    // Get total number of students
    public function getTotalCount() {
        $result = $this->conn->query("SELECT COUNT(*) AS total FROM students");
        $row = $result->fetch_assoc();
        return $row['total'] ?? 0;
    }
}
