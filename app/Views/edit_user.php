<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Role | Coir Roots PH</title>
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
            width: min(980px, calc(100% - 2rem));
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
            font-size: clamp(2.3rem, 4vw, 3.6rem);
        }

        .hero p {
            margin: 1rem 0 0;
            max-width: 60ch;
            color: rgba(255, 248, 240, 0.9);
        }

        .form-card {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 1.6rem;
        }

        .form-card h2 {
            margin: 0 0 0.75rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .form-card p {
            color: var(--muted);
            margin-top: 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-bottom: 1.4rem;
        }

        .info-card {
            padding: 1rem;
            border-radius: 22px;
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .info-card span {
            display: block;
            color: var(--muted);
            font-size: 0.86rem;
            margin-bottom: 0.3rem;
        }

        .info-card strong {
            color: var(--primary-deep);
            word-break: break-word;
        }

        label {
            display: block;
            margin-bottom: 0.45rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--primary-deep);
        }

        select {
            width: 100%;
            padding: 0.95rem 1rem;
            border-radius: 16px;
            border: 1px solid rgba(111, 75, 45, 0.16);
            background: var(--surface);
            color: var(--text);
            font: inherit;
        }

        .button-row {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .button-soft,
        .button-strong {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 0.95rem 1.2rem;
            border-radius: var(--radius-pill);
            font-weight: 700;
            border: 0;
            font: inherit;
            cursor: pointer;
        }

        .button-soft {
            color: var(--accent);
            background: rgba(111, 143, 73, 0.12);
        }

        .button-strong {
            color: #fffdf8;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            box-shadow: 0 12px 24px rgba(111, 75, 45, 0.18);
        }

        .site-footer {
            text-align: center;
            padding: 0 1rem 1.75rem;
            color: var(--muted);
            font-size: 0.9rem;
        }

        @media (max-width: 680px) {
            .container {
                width: min(980px, calc(100% - 1.2rem));
            }

            .nav-wrap {
                display: grid;
                grid-template-columns: 1fr;
            }

            .nav-actions {
                justify-content: center;
            }

            .nav-actions a,
            .button-soft,
            .button-strong {
                width: 100%;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .button-row {
                flex-direction: column;
            }
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
                    <span>Edit User Role</span>
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
                <span>Admin User Management</span>
                <h1>Update a user's account role.</h1>
                <p>Review the account details below and assign the appropriate role for platform access and administrative permissions.</p>
            </section>

            <section class="form-card">
                <h2>User Account Details</h2>
                <p>Confirm the account information first, then choose the role you want to assign.</p>

                <div class="info-grid">
                    <div class="info-card">
                        <span>Username</span>
                        <strong><?= esc($user['username']) ?></strong>
                    </div>
                    <div class="info-card">
                        <span>Email Address</span>
                        <strong><?= esc($user['email']) ?></strong>
                    </div>
                </div>

                <form action="<?= site_url('admin/update/' . $user['id']) ?>" method="post">
                    <label for="role">Role</label>
                    <select id="role" name="role">
                        <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
                        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                    </select>

                    <div class="button-row">
                        <a class="button-soft" href="<?= site_url('admin') ?>">Back to Dashboard</a>
                        <button class="button-strong" type="submit">Update Role</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
