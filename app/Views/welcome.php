<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | TechParts Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #0d1117; color: #e6edf3; text-align: center; margin-top: 10%; }
        .btn { background-color: #00b894; border: none; }
    </style>
</head>
<body>
    <h2>Welcome, <?= esc($username) ?>! 👋</h2>
    <p>You’ve successfully logged in as a <b>user</b>.</p>
    <a href="/logout" class="btn btn-danger mt-3">Logout</a>
</body>
</html>
