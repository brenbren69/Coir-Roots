<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'TechParts Hub') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #0d1117; color: #e6edf3; }
        .navbar { background: linear-gradient(90deg, #0b132b, #1c2541); }
        a { color: #58a6ff; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .btn-sm { margin-right: 5px; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mb-4 px-3">
    <a class="navbar-brand" href="<?= session()->get('role') === 'admin' ? '/admin' : '/customer/home' ?>">
        💻 TechParts Hub
    </a>
    <div class="ms-auto">
        <?php if(session()->get('role') === 'admin'): ?>
            <a href="/admin" class="btn btn-outline-info btn-sm">Dashboard</a>
            <a href="/admin/manage_products" class="btn btn-outline-primary btn-sm">Products</a>
        <?php else: ?>
            <a href="/customer/products" class="btn btn-outline-info btn-sm">Shop</a>
            <a href="/profile" class="btn btn-outline-light btn-sm">Profile</a>
            <a href="/customer/support" class="btn btn-primary btn-sm">Customer Support</a>
        <?php endif; ?>
        <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>
<div class="container">
