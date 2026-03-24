<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders | Coir Roots PH</title>
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

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Trebuchet MS", "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(185, 207, 149, 0.25), transparent 30%),
                linear-gradient(180deg, #fbf7f0 0%, #f4ecdf 52%, #f7f2e8 100%);
        }

        a { color: inherit; text-decoration: none; }

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

        .order-grid {
            display: grid;
            gap: 1.2rem;
        }

        .order-card {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .order-head {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            padding: 1.3rem 1.5rem;
            border-bottom: 1px solid rgba(111, 75, 45, 0.1);
        }

        .order-head h2 {
            margin: 0;
            color: var(--primary-deep);
            font-size: 1.2rem;
        }

        .order-head p {
            margin: 0.35rem 0 0;
            color: var(--muted);
        }

        .order-badges {
            display: flex;
            gap: 0.55rem;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 0.85rem;
            border-radius: var(--radius-pill);
            font-size: 0.84rem;
            font-weight: 700;
        }

        .badge-status {
            background: rgba(111, 143, 73, 0.12);
            color: var(--accent);
        }

        .badge-method {
            background: #ede0d2;
            color: #8b5124;
        }

        .order-body {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
            gap: 1rem;
            padding: 1.5rem;
        }

        .items-list {
            display: grid;
            gap: 0.9rem;
        }

        .item-card {
            padding: 1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .item-card h3 {
            margin: 0 0 0.35rem;
            color: var(--primary-deep);
        }

        .item-card p {
            margin: 0.25rem 0;
            color: var(--muted);
        }

        .summary-box {
            padding: 1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
            height: fit-content;
        }

        .summary-box h3 {
            margin: 0 0 0.8rem;
            color: var(--primary-deep);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.75rem 0;
            border-top: 1px solid rgba(111, 75, 45, 0.08);
            color: var(--muted);
        }

        .summary-row:first-of-type {
            border-top: 0;
            padding-top: 0;
        }

        .summary-row strong {
            color: var(--primary-deep);
            text-align: right;
        }

        .empty-state {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 1.5rem;
            color: var(--muted);
        }

        .site-footer {
            text-align: center;
            padding: 0 1rem 1.75rem;
            color: var(--muted);
            font-size: 0.9rem;
        }

        @media (max-width: 900px) {
            .order-body {
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
                    <span>Order Records</span>
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
                <span>Admin Order Monitoring</span>
                <h1>View all placed orders after checkout.</h1>
                <p>This page shows completed orders, customer details, payment methods, and whether the customer chose pickup or delivery.</p>
            </section>

            <?php if (empty($orders)): ?>
                <div class="empty-state">No orders have been placed yet.</div>
            <?php else: ?>
                <div class="order-grid">
                    <?php foreach ($orders as $order): ?>
                        <article class="order-card">
                            <div class="order-head">
                                <div>
                                    <h2><?= esc($order['transaction_code']) ?></h2>
                                    <p><?= esc(date('F j, Y g:i A', strtotime($order['created_at']))) ?></p>
                                </div>

                                <div class="order-badges">
                                    <span class="badge badge-status"><?= esc($order['status']) ?></span>
                                    <span class="badge badge-method"><?= esc($order['fulfillment_method']) ?></span>
                                </div>
                            </div>

                            <div class="order-body">
                                <div class="items-list">
                                    <?php foreach ($order['items'] as $item): ?>
                                        <div class="item-card">
                                            <h3><?= esc($item['name']) ?></h3>
                                            <p><?= esc($item['description']) ?></p>
                                            <p>Quantity: <?= esc((string) $item['quantity']) ?></p>
                                            <p>Unit Price: PHP <?= number_format((float) $item['price'], 2) ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <aside class="summary-box">
                                    <h3>Order Summary</h3>
                                    <div class="summary-row"><span>Customer</span><strong><?= esc($order['user']['username'] ?? 'Unknown User') ?></strong></div>
                                    <div class="summary-row"><span>Email</span><strong><?= esc($order['user']['email'] ?? 'Not available') ?></strong></div>
                                    <div class="summary-row"><span>Contact Name</span><strong><?= esc($order['contact_name']) ?></strong></div>
                                    <div class="summary-row"><span>Phone</span><strong><?= esc($order['contact_number']) ?></strong></div>
                                    <div class="summary-row"><span>Payment</span><strong><?= esc($order['payment_method']) ?></strong></div>
                                    <div class="summary-row"><span>Receive By</span><strong><?= esc($order['fulfillment_method']) ?></strong></div>
                                    <div class="summary-row"><span>Total</span><strong>PHP <?= number_format((float) $order['subtotal'], 2) ?></strong></div>
                                    <?php if (! empty($order['delivery_address'])): ?>
                                        <div class="summary-row"><span>Address</span><strong><?= esc($order['delivery_address']) ?></strong></div>
                                    <?php endif; ?>
                                    <?php if (! empty($order['notes'])): ?>
                                        <div class="summary-row"><span>Notes</span><strong><?= esc($order['notes']) ?></strong></div>
                                    <?php endif; ?>
                                </aside>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
