<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Coir Roots PH</title>
    <style>
        :root {
            --surface: #fffdf8;
            --surface-soft: rgba(255, 251, 244, 0.9);
            --text: #2f2418;
            --muted: #6f604f;
            --primary: #6f4b2d;
            --primary-deep: #4f341f;
            --accent: #6f8f49;
            --line: rgba(111, 75, 45, 0.14);
            --shadow: 0 20px 48px rgba(79, 52, 31, 0.12);
            --radius-lg: 30px;
            --radius-md: 22px;
            --radius-pill: 999px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Trebuchet MS", "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(185, 207, 149, 0.25), transparent 30%),
                linear-gradient(180deg, #fbf7f0 0%, #f4ecdf 52%, #f7f2e8 100%);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1240px, calc(100% - 2rem));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(16px);
            background: rgba(251, 247, 240, 0.92);
            border-bottom: 1px solid rgba(111, 75, 45, 0.08);
        }

        .nav-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1rem 0;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
            color: var(--primary-deep);
            font-weight: 700;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            background: url("<?= base_url('assets/coir-logo.svg') ?>") center/contain no-repeat;
            flex-shrink: 0;
        }

        .brand-copy {
            display: flex;
            flex-direction: column;
            line-height: 1.05;
        }

        .brand-copy span {
            font-size: 0.78rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .nav-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
        }

        .nav-actions a {
            padding: 0.8rem 1rem;
            border-radius: var(--radius-pill);
            font-weight: 700;
        }

        .nav-link-soft {
            color: var(--muted);
            background: rgba(111, 143, 73, 0.1);
        }

        .nav-link-strong {
            color: #fffdf8;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            box-shadow: 0 12px 24px rgba(111, 75, 45, 0.18);
        }

        main {
            padding: 2rem 0 4rem;
        }

        .hero {
            margin-bottom: 1.5rem;
            padding: 2rem;
            border-radius: var(--radius-lg);
            background:
                linear-gradient(rgba(48, 36, 24, 0.58), rgba(48, 36, 24, 0.62)),
                linear-gradient(135deg, rgba(102, 76, 42, 0.9), rgba(83, 118, 61, 0.82)),
                url("https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=1600&q=80") center/cover;
            color: #fff8f0;
            box-shadow: var(--shadow);
        }

        .hero span {
            display: inline-flex;
            padding: 0.45rem 0.8rem;
            border-radius: var(--radius-pill);
            background: rgba(255, 249, 241, 0.14);
            border: 1px solid rgba(255, 249, 241, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.76rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.3rem, 4vw, 3.8rem);
        }

        .hero p {
            margin: 1rem 0 0;
            max-width: 62ch;
            color: rgba(255, 248, 240, 0.9);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: minmax(280px, 340px) minmax(0, 1fr);
            gap: 1.5rem;
            align-items: start;
        }

        .card {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
        }

        .quick-actions,
        .user-panel {
            padding: 1.5rem;
        }

        .quick-actions h2,
        .user-panel h2 {
            margin: 0 0 0.75rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .quick-actions p,
        .user-panel p {
            color: var(--muted);
            margin-top: 0;
        }

        .action-list {
            display: grid;
            gap: 0.9rem;
            margin-top: 1.2rem;
        }

        .action-link {
            display: block;
            padding: 1rem 1.1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
            color: var(--primary-deep);
            font-weight: 700;
        }

        .action-link span {
            display: block;
            color: var(--muted);
            font-weight: 400;
            font-size: 0.92rem;
            margin-top: 0.25rem;
        }

        .flash {
            margin-bottom: 1rem;
            padding: 1rem 1.2rem;
            border-radius: 18px;
            border: 1px solid transparent;
        }

        .flash.success {
            background: #edf7e6;
            color: #2f5a22;
            border-color: #cfe4c1;
        }

        .flash.error {
            background: #fff1ee;
            color: #8b3e31;
            border-color: #efc6be;
        }

        .table-wrap {
            overflow-x: auto;
            margin-top: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 780px;
        }

        th,
        td {
            padding: 1rem 0.85rem;
            text-align: left;
            border-bottom: 1px solid rgba(111, 75, 45, 0.1);
            color: var(--muted);
        }

        th {
            color: var(--primary-deep);
            font-size: 0.88rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        td strong {
            color: var(--primary-deep);
        }

        .role-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.45rem 0.75rem;
            border-radius: var(--radius-pill);
            background: rgba(111, 143, 73, 0.12);
            color: var(--accent);
            font-size: 0.82rem;
            font-weight: 700;
        }

        .table-actions {
            display: flex;
            gap: 0.55rem;
            flex-wrap: wrap;
        }

        .button-soft,
        .button-warning,
        .button-danger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.65rem 0.9rem;
            border-radius: var(--radius-pill);
            font-weight: 700;
            font-size: 0.9rem;
        }

        .button-soft {
            color: var(--accent);
            background: rgba(111, 143, 73, 0.12);
        }

        .button-warning {
            color: #fffdf8;
            background: linear-gradient(135deg, #b37a36, #8d5f2b);
        }

        .button-danger {
            color: #fffdf8;
            background: linear-gradient(135deg, #b24c3b, #8b3e31);
        }

        .pagination-wrap {
            margin-top: 1.5rem;
        }

        .pagination-wrap nav {
            display: flex;
            justify-content: center;
        }

        .pagination-wrap .pagination {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .pagination-wrap .pagination li {
            margin: 0;
        }

        .pagination-wrap .pagination a,
        .pagination-wrap .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1rem;
            border-radius: var(--radius-pill);
            border: 1px solid rgba(111, 75, 45, 0.12);
            background: var(--surface);
            color: var(--muted);
            text-decoration: none;
        }

        .pagination-wrap .pagination li.active a {
            color: #fffdf8;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            border-color: transparent;
        }

        .pagination-wrap .pagination a:hover {
            background: rgba(111, 143, 73, 0.1);
            color: var(--primary-deep);
        }

        @media (max-width: 980px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 680px) {
            .container {
                width: min(1240px, calc(100% - 1.2rem));
            }

            .nav-wrap {
                display: grid;
                grid-template-columns: 1fr;
            }

            .nav-actions {
                justify-content: center;
            }

            .nav-actions a {
                width: 100%;
            }

            .table-actions {
                flex-direction: column;
            }
        }

        .site-footer {
            text-align: center;
            padding: 0 1rem 1.75rem;
            color: var(--muted);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= site_url('admin') ?>">
                <span class="brand-mark" aria-hidden="true"></span>
                <span class="brand-copy">
                    <strong>Coir Roots PH</strong>
                    <span>Admin Dashboard</span>
                </span>
            </a>

            <nav class="nav-actions" aria-label="Admin navigation">
                <a class="nav-link-soft" href="<?= site_url('admin') ?>">Dashboard</a>
                <a class="nav-link-soft" href="<?= site_url('admin/manage_products') ?>">Manage Products</a>
                <a class="nav-link-soft" href="<?= site_url('admin/orders') ?>">Orders</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="hero">
                <span>Administrator Panel</span>
                <h1>Manage users and keep the platform organized.</h1>
                <p>Review registered accounts, manage user records, and access core admin actions for your coconut coir platform from one cleaner dashboard.</p>
            </section>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="flash error"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <div class="dashboard-grid">
                <aside class="card quick-actions">
                    <h2>Quick Actions</h2>
                    <p>Use these shortcuts to move through the main admin tasks faster.</p>

                    <div class="action-list">
                        <a class="action-link" href="<?= site_url('admin/manage_products') ?>">
                            Manage Products
                            <span>Review, update, add, and remove product records.</span>
                        </a>
                        <a class="action-link" href="<?= site_url('admin') ?>">
                            User Accounts
                            <span>Monitor registered users and keep account information organized.</span>
                        </a>
                        <a class="action-link" href="<?= site_url('admin/orders') ?>">
                            View Orders
                            <span>See all checkout records, payment methods, and delivery choices.</span>
                        </a>
                    </div>
                </aside>

                <section class="card user-panel">
                    <h2>User Accounts</h2>
                    <p>Browse all user records, edit account details, or remove accounts when necessary.</p>

                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><strong><?= esc($user['id']) ?></strong></td>
                                        <td><?= esc($user['username']) ?></td>
                                        <td><?= esc($user['email']) ?></td>
                                        <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                                        <td><?= esc($user['created_at']) ?></td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="button-warning" href="<?= site_url('admin/edit/' . $user['id']) ?>">Edit</a>
                                                <a class="button-danger" href="<?= site_url('admin/delete/' . $user['id']) ?>" onclick="return confirm('Delete this user?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="pagination-wrap">
                        <?= $pager->links('users', 'default_full') ?>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
