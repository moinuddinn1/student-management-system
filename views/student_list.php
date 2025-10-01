<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Student List</h3>
    <a href="student_form.php" class="btn btn-success">+ Add New Student</a>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($students)): ?>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= htmlspecialchars($student['id']) ?></td>
                    <td><?= htmlspecialchars($student['name']) ?></td>
                    <td><?= htmlspecialchars($student['email']) ?></td>
                    <td><?= htmlspecialchars($student['course']) ?></td>
                    <td>
                        <a href="student_form.php?id=<?= $student['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete_student.php?id=<?= $student['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No students found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
