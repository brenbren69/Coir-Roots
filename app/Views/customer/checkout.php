<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Coir Roots PH</title>
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
                radial-gradient(circle at top right, rgba(185, 207, 149, 0.25), transparent 30%),
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
        .nav-actions a {
            padding:.8rem 1rem; border-radius:var(--radius-pill); font-weight:700;
        }
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
        .flash, .validation {
            margin-bottom:1rem; padding:1rem 1.2rem; border-radius:18px; background:#fff1ee; color:#8b3e31; border:1px solid #efc6be;
        }
        .checkout-grid { display:grid; grid-template-columns: minmax(0, 1fr) minmax(320px, 380px); gap:1.5rem; align-items:start; }
        .card {
            background: var(--surface-soft); border:1px solid var(--line); border-radius:var(--radius-lg);
            box-shadow: var(--shadow);
        }
        .order-form { padding:1.6rem; }
        .order-form h2, .summary h2 {
            margin:0 0 1rem; font-family: Georgia, "Times New Roman", serif; color:var(--primary-deep);
        }
        .field-grid { display:grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap:1rem; }
        .field { margin-bottom:1rem; }
        .field.full { grid-column:1 / -1; }
        label { display:block; margin-bottom:.45rem; font-size:.92rem; font-weight:700; color:var(--primary-deep); }
        input, select, textarea {
            width:100%; padding:.95rem 1rem; border-radius:16px; border:1px solid rgba(111,75,45,.16);
            background:var(--surface); color:var(--text); font:inherit;
        }
        textarea { resize: vertical; min-height: 120px; }
        .helper-text { color:var(--muted); font-size:.88rem; margin-top:.35rem; }
        .button-row { display:flex; gap:.8rem; flex-wrap:wrap; margin-top:.5rem; }
        .button-soft, .button-strong {
            display:inline-flex; justify-content:center; align-items:center; padding:.95rem 1.2rem; border-radius:var(--radius-pill); font-weight:700; border:0;
        }
        .button-soft { color:var(--accent); background:rgba(111,143,73,.12); }
        .button-strong { color:#fffdf8; background:linear-gradient(135deg, var(--primary), #8c6442); cursor:pointer; box-shadow:0 12px 24px rgba(111,75,45,.18); }
        .summary { padding:1.4rem; position:sticky; top:5.8rem; }
        .summary-image { width:100%; height:220px; object-fit:cover; border-radius:22px; }
        .summary .product-name { margin:.9rem 0 .35rem; font-size:1.3rem; color:var(--primary-deep); }
        .summary .product-meta, .summary .product-description { color:var(--muted); }
        .summary-list { list-style:none; padding:0; margin:1rem 0 0; display:grid; gap:.8rem; }
        .summary-list li {
            display:flex; justify-content:space-between; gap:1rem; color:var(--muted); padding-top:.8rem; border-top:1px solid rgba(111,75,45,.1);
        }
        .summary-list strong { color:var(--primary-deep); }
        @media (max-width: 900px) {
            .checkout-grid { grid-template-columns:1fr; }
            .summary { position:static; }
        }
        @media (max-width: 680px) {
            .container { width:min(1180px, calc(100% - 1.2rem)); }
            .nav-wrap { display:grid; grid-template-columns:1fr; }
            .nav-actions { justify-content:center; }
            .nav-actions a, .button-soft, .button-strong { width:100%; }
            .field-grid { grid-template-columns:1fr; }
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
                <a class="nav-link-soft" href="<?= site_url('customer/transactions') ?>">Transaction History</a>
                <a class="nav-link-soft" href="<?= site_url('profile') ?>">Profile</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-head">
                <span>Checkout</span>
                <h1>Choose your payment method and how you want to receive your order.</h1>
                <p>Review the selected product, choose pickup or delivery, then complete the order so it appears in your transaction history.</p>
            </div>

            <?php if (session()->getFlashdata('validation')): ?>
                <div class="validation"><?= session()->getFlashdata('validation')->listErrors() ?></div>
            <?php endif; ?>

            <div class="checkout-grid">
                <section class="card order-form">
                    <h2>Order Details</h2>
                    <form action="<?= site_url('customer/checkout/place-order') ?>" method="post">
                        <div class="field-grid">
                            <div class="field">
                                <label for="contact_name">Contact Name</label>
                                <input id="contact_name" type="text" name="contact_name" value="<?= esc(old('contact_name', session()->get('username'))) ?>" required>
                            </div>

                            <div class="field">
                                <label for="contact_number">Contact Number</label>
                                <input id="contact_number" type="text" name="contact_number" value="<?= esc(old('contact_number')) ?>" placeholder="09XXXXXXXXX" required>
                            </div>

                            <div class="field">
                                <label for="payment_method">Payment Method</label>
                                <select id="payment_method" name="payment_method" required>
                                    <option value="">Select payment method</option>
                                    <?php foreach (['Cash on Delivery', 'Gcash', 'Bank Transfer', 'Pay at Pickup'] as $method): ?>
                                        <option value="<?= esc($method) ?>" <?= old('payment_method') === $method ? 'selected' : '' ?>><?= esc($method) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="field">
                                <label for="fulfillment_method">Receive Order By</label>
                                <select id="fulfillment_method" name="fulfillment_method" required>
                                    <option value="">Select option</option>
                                    <?php foreach (['Pickup', 'Delivery'] as $method): ?>
                                        <option value="<?= esc($method) ?>" <?= old('fulfillment_method') === $method ? 'selected' : '' ?>><?= esc($method) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="helper-text">Pickup keeps address optional. Delivery requires a full address.</div>
                            </div>

                            <div class="field full">
                                <label for="delivery_address">Delivery Address</label>
                                <textarea id="delivery_address" name="delivery_address" placeholder="House number, street, barangay, city, province"><?= esc(old('delivery_address')) ?></textarea>
                            </div>

                            <div class="field full">
                                <label for="notes">Order Notes</label>
                                <textarea id="notes" name="notes" placeholder="Optional instructions for pickup, delivery, or payment"><?= esc(old('notes')) ?></textarea>
                            </div>
                        </div>

                        <div class="button-row">
                            <a class="button-soft" href="<?= site_url('customer/products') ?>">Back to Products</a>
                            <button class="button-strong" type="submit">Place Order</button>
                        </div>
                    </form>
                </section>

                <aside class="card summary">
                    <h2>Order Summary</h2>
                    <img class="summary-image" src="<?= esc($item['image']) ?>" alt="<?= esc($item['name']) ?>">
                    <h3 class="product-name"><?= esc($item['name']) ?></h3>
                    <p class="product-meta"><?= esc($item['category']) ?> • <?= esc($item['unit']) ?></p>
                    <p class="product-description"><?= esc($item['description']) ?></p>

                    <ul class="summary-list">
                        <li><span>Price</span><strong>PHP <?= number_format((float) $item['price'], 2) ?></strong></li>
                        <li><span>Quantity</span><strong><?= esc((string) $item['quantity']) ?></strong></li>
                        <li><span>Subtotal</span><strong>PHP <?= number_format((float) $item['total'], 2) ?></strong></li>
                    </ul>
                </aside>
            </div>
        </div>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
