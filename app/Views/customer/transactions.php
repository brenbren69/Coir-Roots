<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History | Coir Roots PH</title>
    <style>
        :root {
            --surface: #fffdf8;
            --surface-soft: rgba(255, 251, 244, 0.88);
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
        .container { width: min(1180px, calc(100% - 2rem)); margin: 0 auto; }
        .site-header {
            position: sticky; top: 0; z-index: 1000; backdrop-filter: blur(16px);
            background: rgba(251, 247, 240, 0.92); border-bottom: 1px solid rgba(111, 75, 45, 0.08);
        }
        .nav-wrap { display:flex; justify-content:space-between; align-items:center; gap:1rem; padding:1rem 0; }
        .brand { display:inline-flex; align-items:center; gap:.85rem; color:var(--primary-deep); font-weight:700; }
        .brand-mark {
            width:44px; height:44px; border-radius:14px;
            background: url("<?= base_url('assets/coir-logo.svg') ?>") center/contain no-repeat;
            flex-shrink: 0;
        }
        .brand-copy { display:flex; flex-direction:column; line-height:1.05; }
        .brand-copy span { font-size:.78rem; color:var(--muted); text-transform:uppercase; letter-spacing:.08em; }
        .nav-actions { display:flex; flex-wrap:wrap; gap:.65rem; }
        .nav-actions a { padding:.8rem 1rem; border-radius:var(--radius-pill); font-weight:700; }
        .nav-link-soft { color:var(--muted); background:rgba(111,143,73,.1); }
        .nav-link-strong { color:#fffdf8; background:linear-gradient(135deg, var(--primary), #8c6442); }
        main { padding: 2rem 0 4rem; }
        .page-head { margin-bottom: 1.5rem; }
        .page-head span {
            display:inline-flex; padding:.45rem .8rem; border-radius:var(--radius-pill); background:rgba(111,143,73,.12);
            color:var(--accent); text-transform:uppercase; letter-spacing:.12em; font-size:.76rem; font-weight:700; margin-bottom:1rem;
        }
        .page-head h1 { margin:0; font-family: Georgia, "Times New Roman", serif; font-size: clamp(2.2rem, 4vw, 3.5rem); color:var(--primary-deep); }
        .page-head p { max-width:60ch; color:var(--muted); }
        .flash {
            margin-bottom:1rem; padding:1rem 1.2rem; border-radius:18px; background:#edf7e6; color:#2f5a22; border:1px solid #cfe4c1;
        }
        .history-grid { display:grid; gap:1.2rem; }
        .transaction-card {
            background: var(--surface-soft); border:1px solid var(--line); border-radius:var(--radius-lg);
            box-shadow: var(--shadow); overflow:hidden;
        }
        .transaction-head {
            display:flex; justify-content:space-between; gap:1rem; flex-wrap:wrap; padding:1.3rem 1.4rem;
            border-bottom:1px solid rgba(111,75,45,.1);
        }
        .transaction-head h2 { margin:0; color:var(--primary-deep); font-size:1.2rem; }
        .transaction-head p { margin:.35rem 0 0; color:var(--muted); }
        .status-badge, .meta-badge {
            display:inline-flex; align-items:center; padding:.5rem .85rem; border-radius:var(--radius-pill); font-weight:700; font-size:.84rem;
        }
        .status-badge { background:rgba(111,143,73,.12); color:var(--accent); }
        .meta-badge { background:#f2e8d8; color:var(--primary); }
        .transaction-body { display:grid; grid-template-columns: minmax(0, 1fr) 280px; gap:1rem; padding:1.4rem; }
        .items-list { display:grid; gap:1rem; }
        .item-card {
            padding:1rem; border-radius:var(--radius-md); background:var(--surface); border:1px solid rgba(111,75,45,.1);
        }
        .item-card h3 { margin:0 0 .35rem; color:var(--primary-deep); font-size:1.05rem; }
        .item-card p { margin:.2rem 0; color:var(--muted); }
        .summary-box {
            padding:1rem; border-radius:var(--radius-md); background:var(--surface); border:1px solid rgba(111,75,45,.1); height:fit-content;
        }
        .summary-box h3 { margin:0 0 .8rem; color:var(--primary-deep); }
        .summary-row {
            display:flex; justify-content:space-between; gap:1rem; padding:.7rem 0; border-top:1px solid rgba(111,75,45,.08); color:var(--muted);
        }
        .summary-row:first-of-type { border-top:0; padding-top:0; }
        .summary-row strong { color:var(--primary-deep); }
        .empty-state {
            padding:1.5rem; border-radius:var(--radius-lg); background:var(--surface-soft); border:1px solid var(--line); color:var(--muted);
        }
        @media (max-width: 900px) {
            .transaction-body { grid-template-columns:1fr; }
        }
        @media (max-width: 680px) {
            .container { width:min(1180px, calc(100% - 1.2rem)); }
            .nav-wrap { display:grid; grid-template-columns:1fr; }
            .nav-actions { justify-content:center; }
            .nav-actions a { width:100%; }
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
            <a class="brand" href="<?= site_url('/') ?>">
                <span class="brand-mark" aria-hidden="true"></span>
                <span class="brand-copy">
                    <strong>Coir Roots PH</strong>
                    <span>Sustainable Coconut Fiber</span>
                </span>
            </a>
            <nav class="nav-actions" aria-label="Customer navigation">
                <a class="nav-link-soft" href="<?= site_url('customer/products') ?>">Products</a>
                <a class="nav-link-soft" href="<?= site_url('customer/checkout') ?>">Checkout</a>
                <a class="nav-link-soft" href="<?= site_url('profile') ?>">Profile</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-head">
                <span>Transaction History</span>
                <h1>Review your past purchases and order details.</h1>
                <p>Every completed order is stored here so users can check their payment method, pickup or delivery choice, and purchased products.</p>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <?php if (empty($transactions)): ?>
                <div class="empty-state">
                    No transactions yet. Once you place an order from the products page, it will appear here.
                </div>
            <?php else: ?>
                <div class="history-grid">
                    <?php foreach ($transactions as $transaction): ?>
                        <article class="transaction-card">
                            <div class="transaction-head">
                                <div>
                                    <h2><?= esc($transaction['transaction_code']) ?></h2>
                                    <p><?= esc(date('F j, Y g:i A', strtotime($transaction['created_at']))) ?></p>
                                </div>
                                <div>
                                    <span class="status-badge"><?= esc($transaction['status']) ?></span>
                                    <span class="meta-badge"><?= esc($transaction['fulfillment_method']) ?></span>
                                </div>
                            </div>

                            <div class="transaction-body">
                                <div class="items-list">
                                    <?php foreach ($transaction['items'] as $item): ?>
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
                                    <div class="summary-row"><span>Contact</span><strong><?= esc($transaction['contact_name']) ?></strong></div>
                                    <div class="summary-row"><span>Phone</span><strong><?= esc($transaction['contact_number']) ?></strong></div>
                                    <div class="summary-row"><span>Payment</span><strong><?= esc($transaction['payment_method']) ?></strong></div>
                                    <div class="summary-row"><span>Receive By</span><strong><?= esc($transaction['fulfillment_method']) ?></strong></div>
                                    <div class="summary-row"><span>Total</span><strong>PHP <?= number_format((float) $transaction['subtotal'], 2) ?></strong></div>
                                    <?php if (! empty($transaction['delivery_address'])): ?>
                                        <div class="summary-row"><span>Address</span><strong><?= esc($transaction['delivery_address']) ?></strong></div>
                                    <?php endif; ?>
                                    <?php if (! empty($transaction['notes'])): ?>
                                        <div class="summary-row"><span>Notes</span><strong><?= esc($transaction['notes']) ?></strong></div>
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
