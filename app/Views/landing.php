<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coir Roots PH | Sustainable Coconut Coir Solutions</title>
    <style>
        :root {
            --bg: #f7f2e8;
            --surface: #fffdf8;
            --surface-alt: #efe4d1;
            --text: #2f2418;
            --muted: #6f604f;
            --primary: #6f4b2d;
            --primary-deep: #4f341f;
            --accent: #6f8f49;
            --accent-soft: #dbe6cf;
            --line: rgba(111, 75, 45, 0.14);
            --shadow: 0 18px 45px rgba(79, 52, 31, 0.12);
            --radius-lg: 28px;
            --radius-md: 18px;
            --radius-sm: 999px;
            --max-width: 1180px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Trebuchet MS", "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(185, 207, 149, 0.25), transparent 34%),
                linear-gradient(180deg, #fbf7f0 0%, #f4ecdf 50%, #f7f2e8 100%);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(var(--max-width), calc(100% - 2rem));
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
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1rem 0;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            color: var(--primary-deep);
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            background: url("<?= base_url('assets/coir-logo.svg') ?>") center/contain no-repeat;
            flex-shrink: 0;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.05;
        }

        .brand-text strong {
            font-size: 1rem;
        }

        .brand-text span {
            font-size: 0.78rem;
            color: var(--muted);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .nav-links,
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a,
        .nav-actions a {
            padding: 0.75rem 1rem;
            border-radius: var(--radius-sm);
            transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
        }

        .nav-links a {
            color: var(--muted);
            font-weight: 600;
        }

        .nav-links a:hover,
        .nav-links a:focus-visible {
            background: rgba(111, 143, 73, 0.12);
            color: var(--primary-deep);
        }

        .nav-actions .login-link {
            color: var(--primary);
            font-weight: 700;
        }

        .nav-actions .register-link,
        .button-primary,
        .button-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            border-radius: var(--radius-sm);
            font-weight: 700;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        .nav-actions .register-link,
        .button-primary {
            color: #fffdf8;
            background: linear-gradient(135deg, var(--primary), #8c6442);
            box-shadow: 0 14px 30px rgba(111, 75, 45, 0.22);
        }

        .nav-actions .register-link:hover,
        .button-primary:hover,
        .button-secondary:hover,
        .login-link:hover {
            transform: translateY(-2px);
        }

        .button-primary,
        .button-secondary {
            padding: 0.95rem 1.4rem;
        }

        .button-secondary {
            color: var(--primary-deep);
            background: rgba(255, 253, 248, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 12px 26px rgba(47, 36, 24, 0.12);
        }

        .hero {
            position: relative;
            overflow: hidden;
            padding: 5rem 0 4rem;
        }

        .hero-shell {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(280px, 0.85fr);
            gap: 2rem;
            align-items: stretch;
            min-height: 620px;
            padding: 2rem;
            border-radius: 34px;
            background:
                linear-gradient(rgba(48, 36, 24, 0.56), rgba(48, 36, 24, 0.56)),
                linear-gradient(135deg, rgba(102, 76, 42, 0.92), rgba(83, 118, 61, 0.82)),
                url("https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?auto=format&fit=crop&w=1600&q=80") center/cover;
            box-shadow: var(--shadow);
        }

        .hero-shell::before,
        .hero-shell::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .hero-shell::before {
            width: 300px;
            height: 300px;
            top: -120px;
            right: -80px;
            background: rgba(255, 247, 235, 0.08);
        }

        .hero-shell::after {
            width: 220px;
            height: 220px;
            bottom: -70px;
            left: 48%;
            background: rgba(201, 221, 177, 0.12);
        }

        .hero-copy,
        .hero-panel {
            position: relative;
            z-index: 1;
        }

        .hero-copy {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem;
            color: #fff9f1;
        }

        .eyebrow {
            display: inline-flex;
            width: fit-content;
            padding: 0.45rem 0.85rem;
            border-radius: var(--radius-sm);
            background: rgba(255, 249, 241, 0.16);
            border: 1px solid rgba(255, 249, 241, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.76rem;
            font-weight: 700;
            margin-bottom: 1.25rem;
        }

        .hero h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.8rem, 5vw, 4.9rem);
            line-height: 1.04;
            max-width: 11ch;
        }

        .hero p {
            max-width: 62ch;
            margin: 1.5rem 0 0;
            font-size: 1.06rem;
            color: rgba(255, 249, 241, 0.9);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .hero-panel {
            align-self: end;
            padding: 1.5rem;
            border-radius: 26px;
            background: rgba(255, 251, 245, 0.12);
            border: 1px solid rgba(255, 251, 245, 0.18);
            backdrop-filter: blur(10px);
            color: #fff9f1;
        }

        .hero-panel h2 {
            margin-top: 0;
            margin-bottom: 0.75rem;
            font-size: 1.2rem;
            font-family: Georgia, "Times New Roman", serif;
        }

        .hero-panel p {
            margin: 0;
            font-size: 0.97rem;
        }

        .hero-highlights {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.9rem;
            margin-top: 1.25rem;
        }

        .hero-highlights div {
            padding: 1rem;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.08);
        }

        .hero-highlights strong {
            display: block;
            font-size: 1.05rem;
            margin-bottom: 0.25rem;
        }

        .flash-stack {
            padding-top: 1.25rem;
        }

        .flash-message {
            margin-bottom: 0.75rem;
            padding: 1rem 1.15rem;
            border-radius: 16px;
            border: 1px solid transparent;
            box-shadow: 0 10px 24px rgba(47, 36, 24, 0.08);
        }

        .flash-success {
            background: #edf7e6;
            color: #2f5a22;
            border-color: #cfe4c1;
        }

        .flash-error {
            background: #fff1ee;
            color: #8b3e31;
            border-color: #efc6be;
        }

        .flash-warning {
            background: #fff7ea;
            color: #8b6731;
            border-color: #e8d2a6;
        }

        section {
            padding: 4.75rem 0;
        }

        .section-heading {
            max-width: 680px;
            margin-bottom: 2.2rem;
        }

        .section-heading .kicker {
            display: inline-block;
            margin-bottom: 0.75rem;
            color: var(--accent);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.76rem;
        }

        .section-heading h2 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2rem, 3vw, 3rem);
            line-height: 1.15;
            color: var(--primary-deep);
        }

        .section-heading p {
            margin: 1rem 0 0;
            color: var(--muted);
            font-size: 1.02rem;
        }

        .about-grid,
        .industry-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            align-items: stretch;
        }

        .content-card {
            background: rgba(255, 253, 248, 0.82);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: 0 14px 34px rgba(79, 52, 31, 0.08);
        }

        .content-card h3 {
            margin-top: 0;
            margin-bottom: 0.85rem;
            font-size: 1.35rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }

        .content-card p {
            margin: 0;
            color: var(--muted);
        }

        .content-card ul {
            margin: 1rem 0 0;
            padding-left: 1.1rem;
            color: var(--muted);
        }

        .content-card li + li {
            margin-top: 0.55rem;
        }

        .products-band {
            background: linear-gradient(180deg, rgba(219, 230, 207, 0.36), rgba(255, 253, 248, 0));
        }

        .product-grid,
        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .product-card,
        .benefit-card {
            padding: 1.6rem;
            border-radius: 22px;
            background: var(--surface);
            border: 1px solid var(--line);
            box-shadow: 0 12px 28px rgba(79, 52, 31, 0.08);
        }

        .product-card span,
        .benefit-card span {
            display: inline-flex;
            width: 48px;
            height: 48px;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .product-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.55rem;
            margin-bottom: 1rem;
        }

        .product-badges span {
            width: auto;
            height: auto;
            margin: 0;
            padding: 0.45rem 0.8rem;
            border-radius: var(--radius-sm);
            font-size: 0.78rem;
            line-height: 1;
        }

        .badge-new {
            background: #e6f4d6;
            color: #5d8f1e;
        }

        .badge-trending {
            background: #f8e4cc;
            color: #b56b1f;
        }

        .badge-bestseller {
            background: #ede0d2;
            color: #8b5124;
        }

        .badge-featured {
            background: #dbe6cf;
            color: #5a7b33;
        }

        .product-card h3,
        .benefit-card h3 {
            margin: 0 0 0.65rem;
            color: var(--primary-deep);
            font-size: 1.2rem;
        }

        .product-card p,
        .benefit-card p {
            margin: 0;
            color: var(--muted);
        }

        .site-footer {
            padding: 2.25rem 0 2.75rem;
            border-top: 1px solid var(--line);
            background: rgba(255, 252, 245, 0.88);
        }

        .footer-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
            align-items: center;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            color: var(--muted);
            font-weight: 600;
        }

        .footer-note {
            color: var(--muted);
            margin: 0;
        }

        .footer-disclaimer {
            width: 100%;
            margin: 0.75rem 0 0;
            color: var(--muted);
            font-size: 0.9rem;
            text-align: center;
        }

        @media (max-width: 980px) {
            .nav-wrap {
                flex-wrap: wrap;
            }

            .nav-links,
            .nav-actions {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero-shell,
            .about-grid,
            .industry-grid,
            .product-grid,
            .benefit-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 3rem;
            }

            .hero-shell {
                min-height: auto;
            }
        }

        @media (max-width: 640px) {
            .container {
                width: min(var(--max-width), calc(100% - 1.2rem));
            }

            .nav-links a,
            .nav-actions a {
                width: 100%;
                text-align: center;
            }

            .hero-shell {
                padding: 1.2rem;
                border-radius: 28px;
            }

            .hero h1 {
                max-width: none;
            }

            .hero-highlights {
                grid-template-columns: 1fr;
            }

            .button-primary,
            .button-secondary {
                width: 100%;
            }

            .content-card,
            .product-card,
            .benefit-card {
                padding: 1.35rem;
            }

            section {
                padding: 3.75rem 0;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="#home">
                <span class="brand-mark" aria-hidden="true"></span>
                <span class="brand-text">
                    <strong>Coir Roots PH</strong>
                    <span>Sustainable Coconut Fiber</span>
                </span>
            </a>

            <nav class="nav-links" aria-label="Primary navigation">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#products">Products</a>
                <a href="#benefits">Benefits</a>
                <a href="#contact">Contact</a>
            </nav>

            <div class="nav-actions">
                <a class="login-link" href="<?= site_url('login') ?>">Login</a>
                <a class="register-link" href="<?= site_url('register') ?>">Register</a>
            </div>
        </div>
    </header>

    <div class="container flash-stack">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="flash-message flash-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="flash-message flash-error"><?= esc(session()->getFlashdata('error')) ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('validation')): ?>
            <div class="flash-message flash-warning">
                <?php foreach (session()->getFlashdata('validation') as $error): ?>
                    <div><?= esc($error) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <main>
        <section class="hero" id="home">
            <div class="container hero-shell">
                <div class="hero-copy">
                    <span class="eyebrow">Philippine Coconut Coir Initiative</span>
                    <h1>Natural fiber for a cleaner and more sustainable future.</h1>
                    <p>
                        Coconut coir, also known as coconut fiber, is a natural fiber derived from the outer husk of coconuts. It is the fibrous material found between the hard internal shell and the outer coat of the coconut. In the Philippines, utilizing this fiber to create eco-friendly products used in construction, gardening, and other industries is still in its infancy as a soon-to-be successful industry.
                    </p>
                    <div class="hero-actions">
                        <a class="button-primary" href="#products">Explore Products</a>
                        <a class="button-secondary" href="#about">Learn More</a>
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Highlights">
                    <h2>Built from what nature already provides</h2>
                    <p>
                        Coconut coir turns agricultural byproducts into useful materials that support greener manufacturing, resilient farming practices, and responsible local enterprise.
                    </p>
                    <div class="hero-highlights">
                        <div>
                            <strong>Outer Husk Fiber</strong>
                            <span>Recovered from the coconut shell's natural protective layer.</span>
                        </div>
                        <div>
                            <strong>Growing Potential</strong>
                            <span>An emerging opportunity for sustainable industries in the Philippines.</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="section-heading">
                    <span class="kicker">About Coconut Coir</span>
                    <h2>A practical natural material rooted in the coconut's outer husk.</h2>
                    <p>
                        Coconut coir is a durable plant-based fiber that comes from the fibrous layer between the coconut's hard shell and outer coat. Instead of being discarded, this material can be transformed into valuable eco-friendly products for daily and industrial use.
                    </p>
                </div>

                <div class="about-grid">
                    <article class="content-card">
                        <h3>What coconut coir is</h3>
                        <p>
                            Coir is known for its strength, texture, and natural ability to retain moisture while staying breathable. These qualities make it suitable for products that need both performance and environmental responsibility.
                        </p>
                    </article>

                    <article class="content-card">
                        <h3>Why it matters</h3>
                        <p>
                            As a renewable material from an abundant local crop, coconut coir supports sustainable production while helping reduce agricultural waste. It offers a cleaner alternative to synthetic materials in many applications.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="industry">
            <div class="container">
                <div class="section-heading">
                    <span class="kicker">Industry Potential</span>
                    <h2>An emerging Philippine industry with room to grow.</h2>
                    <p>
                        Coconut coir product development in the Philippines is still growing, but its potential is clear. With stronger investment, awareness, and innovation, coir can contribute to a more sustainable economy across multiple sectors.
                    </p>
                </div>

                <div class="industry-grid">
                    <article class="content-card">
                        <h3>Applications across eco-friendly sectors</h3>
                        <ul>
                            <li>Construction materials such as boards, insulation, and erosion-control solutions</li>
                            <li>Gardening and agriculture products like grow media, liners, and soil conditioners</li>
                            <li>Landscaping, packaging, and other alternatives to synthetic materials</li>
                        </ul>
                    </article>

                    <article class="content-card">
                        <h3>A promising local resource</h3>
                        <p>
                            Because coconuts are deeply connected to Philippine agriculture, coir represents a sustainable local resource that can create more value from existing harvests while supporting rural livelihoods and greener enterprise.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="products-band" id="products">
            <div class="container">
                <div class="section-heading">
                    <span class="kicker">Products</span>
                    <h2>Eco-friendly coconut coir products for practical use.</h2>
                    <p>
                        Coconut coir can be shaped into professional-grade solutions that meet the needs of homes, farms, gardens, and infrastructure projects, with featured options for different customer needs.
                    </p>
                </div>

                <div class="product-grid">
                    <article class="product-card">
                        <div class="product-badges">
                            <span class="badge-new">New</span>
                            <span class="badge-trending">Trending</span>
                        </div>
                        <h3>Coir Grow Media</h3>
                        <p>Moisture-retentive planting material for nurseries, urban gardens, and large-scale agriculture.</p>
                    </article>

                    <article class="product-card">
                        <div class="product-badges">
                            <span class="badge-bestseller">Best Seller</span>
                        </div>
                        <h3>Coir Mats</h3>
                        <p>Hardwearing natural-fiber mats suited for landscaping, pathways, and erosion management.</p>
                    </article>

                    <article class="product-card">
                        <div class="product-badges">
                            <span class="badge-featured">Featured</span>
                            <span class="badge-trending">Trending</span>
                        </div>
                        <h3>Coir Logs</h3>
                        <p>Natural containment products that support slope stabilization and environmental restoration projects.</p>
                    </article>

                    <article class="product-card">
                        <div class="product-badges">
                            <span class="badge-new">New</span>
                            <span class="badge-bestseller">Best Seller</span>
                        </div>
                        <h3>Coir Fiber Fill</h3>
                        <p>Versatile fiber material for brushes, cushioning, horticulture use, and eco-conscious manufacturing.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="benefits">
            <div class="container">
                <div class="section-heading">
                    <span class="kicker">Benefits</span>
                    <h2>Why coconut coir is worth investing in.</h2>
                    <p>
                        Coconut coir supports environmental goals while offering practical advantages for product developers, growers, and communities.
                    </p>
                </div>

                <div class="benefit-grid">
                    <article class="benefit-card">
                        <span>E</span>
                        <h3>Eco-friendly</h3>
                        <p>Transforms coconut byproducts into useful goods instead of letting them go to waste.</p>
                    </article>

                    <article class="benefit-card">
                        <span>B</span>
                        <h3>Biodegradable</h3>
                        <p>Breaks down naturally over time, making it a strong alternative to many synthetic materials.</p>
                    </article>

                    <article class="benefit-card">
                        <span>V</span>
                        <h3>Versatile Applications</h3>
                        <p>Useful in construction, gardening, agriculture, erosion control, and other green industries.</p>
                    </article>

                    <article class="benefit-card">
                        <span>L</span>
                        <h3>Sustainable Local Resource</h3>
                        <p>Builds value from a widely available Philippine crop while supporting local livelihoods.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contact">
        <div class="container footer-wrap">
            <p class="footer-note">&copy; <?= date('Y') ?> Coir Roots PH. Promoting sustainable coconut coir solutions in the Philippines.</p>
            <nav class="footer-links" aria-label="Footer navigation">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#products">Products</a>
                <a href="#benefits">Benefits</a>
                <a href="<?= site_url('login') ?>">Login</a>
                <a href="<?= site_url('register') ?>">Register</a>
            </nav>
            <p class="footer-disclaimer">For educational purposes only, and no copyright infringement is intended.</p>
        </div>
    </footer>
</body>
</html>
