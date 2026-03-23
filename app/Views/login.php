<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Coir Roots PH</title>
    <style>
        :root {
            --bg: #f7f2e8;
            --surface: rgba(255, 252, 246, 0.9);
            --surface-strong: #fffdf8;
            --text: #2f2418;
            --muted: #6f604f;
            --primary: #6f4b2d;
            --primary-deep: #4f341f;
            --accent: #6f8f49;
            --accent-soft: #dbe6cf;
            --line: rgba(111, 75, 45, 0.14);
            --shadow: 0 24px 60px rgba(79, 52, 31, 0.14);
            --danger-bg: #fff1ee;
            --danger-text: #8b3e31;
            --danger-line: #efc6be;
            --success-bg: #edf7e6;
            --success-text: #2f5a22;
            --success-line: #cfe4c1;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Trebuchet MS", "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(185, 207, 149, 0.28), transparent 30%),
                linear-gradient(160deg, rgba(111, 75, 45, 0.08), rgba(111, 143, 73, 0.05)),
                linear-gradient(180deg, #fbf7f0 0%, #f4ecdf 100%);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            width: min(1120px, calc(100% - 2rem));
            margin: 0 auto;
            min-height: 100vh;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, 460px);
            gap: 2rem;
            align-items: center;
            padding: 2rem 0;
        }

        .showcase {
            position: relative;
            min-height: 640px;
            border-radius: 34px;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #fff8f0;
            overflow: hidden;
            background:
                linear-gradient(rgba(48, 36, 24, 0.54), rgba(48, 36, 24, 0.68)),
                linear-gradient(135deg, rgba(102, 76, 42, 0.9), rgba(83, 118, 61, 0.82)),
                url("https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?auto=format&fit=crop&w=1600&q=80") center/cover;
            box-shadow: var(--shadow);
        }

        .showcase::before {
            content: "";
            position: absolute;
            inset: auto auto -70px -60px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: rgba(255, 248, 240, 0.08);
        }

        .showcase > * {
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            width: fit-content;
            padding: 0.45rem 0.8rem;
            border-radius: 999px;
            border: 1px solid rgba(255, 248, 240, 0.2);
            background: rgba(255, 248, 240, 0.12);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.76rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .showcase h1 {
            margin: 0;
            max-width: 10ch;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.7rem, 5vw, 4.7rem);
            line-height: 1.04;
        }

        .showcase p {
            max-width: 56ch;
            color: rgba(255, 248, 240, 0.88);
            margin: 1.25rem 0 0;
            font-size: 1rem;
        }

        .showcase-points {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .showcase-points article {
            padding: 1rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.09);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .showcase-points strong {
            display: block;
            margin-bottom: 0.25rem;
        }

        .auth-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 30px;
            padding: 2rem;
            box-shadow: var(--shadow);
            backdrop-filter: blur(14px);
        }

        .brand-link {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
            font-weight: 700;
            color: var(--primary-deep);
            margin-bottom: 1.5rem;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            background: url("<?= base_url('assets/coir-logo.svg') ?>") center/contain no-repeat;
            flex-shrink: 0;
        }

        .brand-copy {
            display: flex;
            flex-direction: column;
            line-height: 1.05;
        }

        .brand-copy span {
            font-size: 0.76rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .auth-card h2 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 2rem;
            color: var(--primary-deep);
        }

        .auth-card > p {
            margin: 0.75rem 0 1.5rem;
            color: var(--muted);
        }

        .alert {
            padding: 0.9rem 1rem;
            border-radius: 16px;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            font-size: 0.95rem;
        }

        .alert-danger {
            background: var(--danger-bg);
            color: var(--danger-text);
            border-color: var(--danger-line);
        }

        .alert-success {
            background: var(--success-bg);
            color: var(--success-text);
            border-color: var(--success-line);
        }

        .field {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.45rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--primary-deep);
        }

        input {
            width: 100%;
            border: 1px solid rgba(111, 75, 45, 0.16);
            border-radius: 16px;
            padding: 0.95rem 1rem;
            background: var(--surface-strong);
            color: var(--text);
            font: inherit;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: rgba(111, 143, 73, 0.8);
            box-shadow: 0 0 0 4px rgba(111, 143, 73, 0.14);
        }

        .submit-button {
            width: 100%;
            margin-top: 0.5rem;
            border: 0;
            border-radius: 999px;
            padding: 1rem 1.3rem;
            font: inherit;
            font-weight: 700;
            color: #fffdf8;
            cursor: pointer;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            box-shadow: 0 14px 28px rgba(111, 75, 45, 0.22);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 30px rgba(111, 75, 45, 0.24);
        }

        .helper-row {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 1.25rem;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .helper-row a,
        .back-home {
            color: var(--accent);
            font-weight: 700;
        }

        .back-home {
            display: inline-block;
            margin-top: 1.5rem;
        }

        @media (max-width: 960px) {
            .page {
                grid-template-columns: 1fr;
            }

            .showcase {
                min-height: 420px;
            }
        }

        @media (max-width: 640px) {
            .page {
                width: min(1120px, calc(100% - 1.2rem));
                padding: 1rem 0;
            }

            .showcase,
            .auth-card {
                border-radius: 26px;
                padding: 1.35rem;
            }

            .showcase-points {
                grid-template-columns: 1fr;
            }

            .showcase h1 {
                max-width: none;
            }
        }

        .site-footer {
            text-align: center;
            padding: 0 1rem 1.5rem;
            color: var(--muted);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="showcase" aria-label="Coconut coir overview">
            <span class="eyebrow">Sustainable Philippine Fiber</span>
            <h1>Return to a cleaner kind of growth.</h1>
            <p>
                Coconut coir transforms the outer husk of coconuts into useful, eco-friendly materials for gardening, construction, and other emerging industries in the Philippines.
            </p>

            <div class="showcase-points">
                <article>
                    <strong>Natural Origin</strong>
                    <span>Made from coconut husk fiber that would otherwise go unused.</span>
                </article>
                <article>
                    <strong>Practical Value</strong>
                    <span>Supports sustainable products with real agricultural and industrial applications.</span>
                </article>
            </div>
        </section>

        <section class="auth-card" aria-label="Login form">
            <a class="brand-link" href="<?= site_url('/') ?>">
                <span class="brand-mark" aria-hidden="true"></span>
                <span class="brand-copy">
                    <strong>Coir Roots PH</strong>
                    <span>Coconut Fiber Initiative</span>
                </span>
            </a>

            <h2>Welcome back</h2>
            <p>Log in to continue exploring sustainable coconut coir opportunities and products.</p>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <form action="<?= site_url('auth') ?>" method="post">
                <div class="field">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" placeholder="you@example.com" value="<?= esc(set_value('email')) ?>" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Enter your password" required>
                </div>

                <button class="submit-button" type="submit">Login</button>
            </form>

            <div class="helper-row">
                <span>Need an account? <a href="<?= site_url('register') ?>">Register here</a></span>
                <span><a href="<?= site_url('/') ?>">Back to Home</a></span>
            </div>
        </section>
    </main>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
