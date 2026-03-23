<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User Role | TechParts Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #0d1117; 
            color: #f8f9fa; 
        }
        .card { 
            background-color: #161b22; 
            border: 1px solid #30363d; 
            color: #f0f6fc; 
        }
        h3, p, label, option, select, b {
            color: #ffffff; 
        }
        .form-select {
            background-color: #21262d; 
            color: #ffffff;
            border: 1px solid #30363d;
        }
        .form-select:focus {
            background-color: #161b22;
            border-color: #58a6ff;
            box-shadow: 0 0 0 0.2rem rgba(88,166,255,0.25);
        }
        .btn-success {
            background-color: #238636;
            border-color: #2ea043;
        }
        .btn-success:hover {
            background-color: #2ea043;
            border-color: #3fb950;
        }
        .btn-secondary {
            background-color: #30363d;
            border-color: #484f58;
        }
        .btn-secondary:hover {
            background-color: #484f58;
            border-color: #6e7681;
        }
    </style>
</head>
<body class="p-4">
<div class="container col-md-6">
    <div class="card p-4 shadow">
        <h3 class="mb-3">🛠️ Edit User Role</h3>
        <p><b>Username:</b> <?= esc($user['username']) ?></p>
        <p><b>Email:</b> <?= esc($user['email']) ?></p>

        <form action="/admin/update/<?= esc($user['id']) ?>" method="post">
            <label class="form-label">Role:</label>
            <select name="role" class="form-select mb-3">
                <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            </select>
            <button type="submit" class="btn btn-success me-2">Update Role</button>
            <a href="/admin" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
</body>
</html>
