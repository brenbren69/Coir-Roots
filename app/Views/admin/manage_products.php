<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products | Coir Roots PH</title>
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
                url("https://images.unsplash.com/photo-1516253593875-bd7ba052fbc5?auto=format&fit=crop&w=1600&q=80") center/cover;
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

        .panel {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 1.5rem;
        }

        .panel-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }

        .panel-head h2 {
            margin: 0;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .panel-head p {
            margin: 0.35rem 0 0;
            color: var(--muted);
        }

        .button-primary,
        .button-warning,
        .button-danger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1rem;
            border-radius: var(--radius-pill);
            font-weight: 700;
        }

        .button-primary {
            color: #fffdf8;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            box-shadow: 0 12px 24px rgba(111, 75, 45, 0.18);
        }

        .button-warning {
            color: #fffdf8;
            background: linear-gradient(135deg, #b37a36, #8d5f2b);
        }

        .button-danger {
            color: #fffdf8;
            background: linear-gradient(135deg, #b24c3b, #8b3e31);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 760px;
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

        .stock-badge {
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

            .nav-actions a,
            .button-primary {
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
                    <span>Product Management</span>
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
                <span>Admin Product Control</span>
                <h1>Organize and maintain your product catalog.</h1>
                <p>Review coconut coir product records, update pricing and stock, and keep the catalog ready for customers and checkout.</p>
            </section>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="flash error"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <section class="panel">
                <div class="panel-head">
                    <div>
                        <h2>Product Records</h2>
                        <p>Add, edit, or remove products from the admin catalog.</p>
                    </div>
                    <a class="button-primary" href="<?= site_url('admin/add_product') ?>">Add New Product</a>
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $p): ?>
                                <tr>
                                    <td><strong><?= esc($p['id']) ?></strong></td>
                                    <td><?= esc($p['name']) ?></td>
                                    <td>PHP <?= number_format((float) $p['price'], 2) ?></td>
                                    <td><span class="stock-badge"><?= esc($p['stock']) ?> available</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="button-warning" href="<?= site_url('admin/edit_product/' . $p['id']) ?>">Edit</a>
                                            <a class="button-danger" href="<?= site_url('admin/delete_product/' . $p['id']) ?>" onclick="return confirm('Delete this product?')">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
