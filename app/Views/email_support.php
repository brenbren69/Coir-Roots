<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support | Coir Roots PH</title>
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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Trebuchet MS", "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top right, rgba(185, 207, 149, 0.25), transparent 30%),
                linear-gradient(180deg, #fbf7f0 0%, #f4ecdf 52%, #f7f2e8 100%);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1180px, calc(100% - 2rem));
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

        .page-grid {
            display: grid;
            grid-template-columns: minmax(320px, 420px) minmax(0, 1fr);
            gap: 1.5rem;
            align-items: start;
        }

        .card {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
        }

        .support-intro {
            padding: 1.6rem;
            color: var(--primary-deep);
        }

        .support-intro span {
            display: inline-flex;
            padding: 0.45rem 0.8rem;
            border-radius: var(--radius-pill);
            background: rgba(111, 143, 73, 0.12);
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.76rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .support-intro h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.1rem, 4vw, 3.2rem);
            line-height: 1.1;
        }

        .support-intro p {
            color: var(--muted);
            margin-top: 1rem;
        }

        .support-points {
            display: grid;
            gap: 0.9rem;
            margin-top: 1.5rem;
        }

        .support-point {
            padding: 1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .support-point strong {
            display: block;
            margin-bottom: 0.3rem;
        }

        .support-form {
            padding: 1.6rem;
        }

        .support-form h2 {
            margin: 0 0 0.75rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .support-form > p {
            margin-top: 0;
            color: var(--muted);
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

        .field {
            margin-bottom: 1rem;
        }

        .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 0.45rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--primary-deep);
        }

        input,
        textarea {
            width: 100%;
            padding: 0.95rem 1rem;
            border-radius: 16px;
            border: 1px solid rgba(111, 75, 45, 0.16);
            background: var(--surface);
            color: var(--text);
            font: inherit;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .button-row {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
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

        @media (max-width: 920px) {
            .page-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 680px) {
            .container {
                width: min(1180px, calc(100% - 1.2rem));
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

            .field-grid {
                grid-template-columns: 1fr;
            }

            .button-row {
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
                <a class="nav-link-soft" href="<?= site_url('customer/transactions') ?>">Transaction History</a>
                <a class="nav-link-soft" href="<?= site_url('profile') ?>">Profile</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container page-grid">
            <section class="card support-intro">
                <span>Customer Support</span>
                <h1>We're here to help with your coir product questions.</h1>
                <p>Send us your inquiry if you need assistance with products, orders, delivery concerns, or general information about coconut coir solutions.</p>

                <div class="support-points">
                    <div class="support-point">
                        <strong>Product Assistance</strong>
                        <p>Ask about coir grow media, mats, logs, liners, and other sustainable product options.</p>
                    </div>
                    <div class="support-point">
                        <strong>Order Concerns</strong>
                        <p>Get help with checkout, payment methods, pickup, delivery, and transaction follow-ups.</p>
                    </div>
                    <div class="support-point">
                        <strong>Responsive Support</strong>
                        <p>Share the details of your concern clearly so the team can respond more effectively.</p>
                    </div>
                </div>
            </section>

            <section class="card support-form">
                <h2>Send a Message</h2>
                <p>Fill out the form below and we'll review your request.</p>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="flash success"><?= esc(session()->getFlashdata('success')) ?></div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="flash error"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>

                <form action="<?= site_url('customer/support/send') ?>" method="post">
                    <div class="field-grid">
                        <div class="field">
                            <label for="name">Your Name</label>
                            <input id="name" type="text" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="field">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" name="email" placeholder="you@example.com" required>
                        </div>

                        <div class="field full">
                            <label for="subject">Subject</label>
                            <input id="subject" type="text" name="subject" placeholder="What do you need help with?" required>
                        </div>

                        <div class="field full">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
                        </div>
                    </div>

                    <div class="button-row">
                        <a class="button-soft" href="<?= site_url('customer/transactions') ?>">View Transactions</a>
                        <button class="button-strong" type="submit">Send Message</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
