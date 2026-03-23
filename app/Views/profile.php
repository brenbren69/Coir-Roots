<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Coir Roots PH</title>
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
                radial-gradient(circle at top left, rgba(185, 207, 149, 0.25), transparent 30%),
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

        .page-head {
            margin-bottom: 1.5rem;
        }

        .page-head span {
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

        .page-head h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.2rem, 4vw, 3.5rem);
            color: var(--primary-deep);
        }

        .page-head p {
            max-width: 60ch;
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

        .profile-grid {
            display: grid;
            grid-template-columns: minmax(300px, 360px) minmax(0, 1fr);
            gap: 1.5rem;
            align-items: start;
        }

        .card {
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
        }

        .profile-summary {
            padding: 1.5rem;
            text-align: center;
        }

        .profile-image-wrap {
            width: 170px;
            height: 170px;
            margin: 0 auto 1rem;
            padding: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(111, 75, 45, 0.18), rgba(111, 143, 73, 0.22));
        }

        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            background: #f3eadc;
            border: 4px solid rgba(255, 253, 248, 0.9);
        }

        .profile-summary h2 {
            margin: 0 0 0.4rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .profile-summary p {
            margin: 0;
            color: var(--muted);
        }

        .profile-stats {
            display: grid;
            gap: 0.9rem;
            margin-top: 1.4rem;
            text-align: left;
        }

        .stat-item {
            padding: 1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .stat-item span {
            display: block;
            color: var(--muted);
            font-size: 0.86rem;
            margin-bottom: 0.3rem;
        }

        .stat-item strong {
            color: var(--primary-deep);
            font-size: 1rem;
        }

        .profile-details {
            padding: 1.6rem;
        }

        .profile-details h2 {
            margin: 0 0 0.9rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .profile-details > p {
            color: var(--muted);
            margin-top: 0;
        }

        .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 1.2rem;
        }

        .field-card {
            padding: 1rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .field-card span {
            display: block;
            color: var(--muted);
            font-size: 0.86rem;
            margin-bottom: 0.3rem;
        }

        .field-card strong {
            color: var(--primary-deep);
            word-break: break-word;
        }

        .upload-card {
            margin-top: 1.5rem;
            padding: 1.2rem;
            border-radius: var(--radius-md);
            background: var(--surface);
            border: 1px solid rgba(111, 75, 45, 0.1);
        }

        .upload-card h3 {
            margin: 0 0 0.5rem;
            color: var(--primary-deep);
        }

        .upload-card p {
            margin-top: 0;
            color: var(--muted);
        }

        label {
            display: block;
            margin-bottom: 0.45rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--primary-deep);
        }

        input[type="file"] {
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
        .button-strong,
        .button-danger {
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

        .button-danger {
            color: #fffdf8;
            background: linear-gradient(135deg, #b24c3b, #8b3e31);
        }

        @media (max-width: 900px) {
            .profile-grid {
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
            .button-strong,
            .button-danger {
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
                <a class="nav-link-soft" href="<?= site_url('customer/support') ?>">Support</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-head">
                <span>My Profile</span>
                <h1>Manage your account details in one place.</h1>
                <p>Review your account information, update your profile image, and keep your customer dashboard aligned with the rest of your sustainable coir experience.</p>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="flash error"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <div class="profile-grid">
                <section class="card profile-summary">
                    <div class="profile-image-wrap">
                        <img
                            src="<?= base_url('uploads/' . esc($profile_photo ?? 'default.png')) ?>"
                            alt="Profile Picture"
                            class="profile-img"
                        >
                    </div>

                    <h2><?= esc($username) ?></h2>
                    <p><?= esc($email) ?></p>

                    <div class="profile-stats">
                        <div class="stat-item">
                            <span>Account Type</span>
                            <strong>Customer</strong>
                        </div>
                        <div class="stat-item">
                            <span>Profile Status</span>
                            <strong>Active</strong>
                        </div>
                    </div>
                </section>

                <section class="card profile-details">
                    <h2>Account Details</h2>
                    <p>Your main account information is shown below, along with the option to upload a new profile picture.</p>

                    <div class="field-grid">
                        <div class="field-card">
                            <span>Username</span>
                            <strong><?= esc($username) ?></strong>
                        </div>
                        <div class="field-card">
                            <span>Email Address</span>
                            <strong><?= esc($email) ?></strong>
                        </div>
                        <div class="field-card">
                            <span>Mobile Number</span>
                            <strong><?= esc($mobile_number ?: 'Not provided') ?></strong>
                        </div>
                        <div class="field-card">
                            <span>Address</span>
                            <strong><?= esc($address ?: 'Not provided') ?></strong>
                        </div>
                    </div>

                    <div class="upload-card">
                        <h3>Update Profile Picture</h3>
                        <p>Upload a new image to personalize your account.</p>

                        <form action="<?= site_url('user/upload') ?>" method="post" enctype="multipart/form-data">
                            <label for="profile_image">Choose Image</label>
                            <input id="profile_image" type="file" name="profile_image" accept="image/*" required>

                            <div class="button-row">
                                <a class="button-soft" href="<?= site_url('customer/transactions') ?>">View Transactions</a>
                                <button class="button-strong" type="submit">Upload Image</button>
                                <a class="button-danger" href="<?= site_url('logout') ?>">Logout</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
