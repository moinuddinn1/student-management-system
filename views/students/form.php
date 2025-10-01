<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4><?= isset($student) ? "Edit Student" : "Add New Student" ?></h4>
    </div>
    <div class="card-body">
        <form method="POST">
            <!-- Name field -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($student['name'] ?? '') ?>" class="form-control" required>
            </div>

            <!-- Email field -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($student['email'] ?? '') ?>" class="form-control" required>
            </div>

            <!-- Course field -->
            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" value="<?= htmlspecialchars($student['course'] ?? '') ?>" class="form-control" required>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-success"><?= isset($student) ? "Update" : "Save" ?></button>
            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
