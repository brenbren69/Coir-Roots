<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Coir Roots PH</title>
    <style>
        :root {
            --surface: #fffdf8;
            --surface-soft: rgba(255, 251, 244, 0.86);
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
            position: sticky; top: 0; z-index: 1000;
            backdrop-filter: blur(16px);
            background: rgba(251, 247, 240, 0.92);
            border-bottom: 1px solid rgba(111, 75, 45, 0.08);
        }
        .nav-wrap {
            display: flex; justify-content: space-between; align-items: center; gap: 1rem; padding: 1rem 0;
        }
        .brand { display: inline-flex; align-items: center; gap: .85rem; color: var(--primary-deep); font-weight: 700; }
        .brand-mark {
            width: 44px; height: 44px; border-radius: 14px;
            background: url("<?= base_url('assets/coir-logo.svg') ?>") center/contain no-repeat;
            flex-shrink: 0;
        }
        .brand-copy { display: flex; flex-direction: column; line-height: 1.05; }
        .brand-copy span { font-size: .78rem; color: var(--muted); text-transform: uppercase; letter-spacing: .08em; }
        .nav-actions { display: flex; flex-wrap: wrap; gap: .65rem; }
        .nav-actions a {
            padding: .8rem 1rem; border-radius: var(--radius-pill); font-weight: 700;
            transition: transform .2s ease, background .2s ease;
        }
        .nav-link-soft { color: var(--muted); background: rgba(111, 143, 73, 0.1); }
        .nav-link-strong { color: #fffdf8; background: linear-gradient(135deg, var(--primary), #8c6442); box-shadow: 0 12px 24px rgba(111, 75, 45, 0.18); }
        .nav-actions a:hover { transform: translateY(-2px); }
        .hero { padding: 3rem 0 2rem; }
        .hero-shell {
            position: relative; overflow: hidden; display: grid; grid-template-columns: minmax(0, 1.15fr) minmax(280px, .85fr); gap: 1.5rem;
            padding: 2rem; min-height: 420px; border-radius: 34px;
            background:
                linear-gradient(rgba(48, 36, 24, 0.56), rgba(48, 36, 24, 0.62)),
                linear-gradient(135deg, rgba(102, 76, 42, 0.9), rgba(83, 118, 61, 0.82)),
                url("https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=1600&q=80") center/cover;
            box-shadow: var(--shadow);
        }
        .hero-copy, .hero-aside { position: relative; z-index: 1; color: #fff8f0; }
        .eyebrow {
            display: inline-flex; width: fit-content; padding: .45rem .85rem; border-radius: var(--radius-pill);
            background: rgba(255, 249, 241, 0.14); border: 1px solid rgba(255, 249, 241, 0.2);
            text-transform: uppercase; letter-spacing: .12em; font-size: .76rem; font-weight: 700; margin-bottom: 1rem;
        }
        .hero-copy h1 {
            margin: 0; max-width: 11ch; font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.6rem, 5vw, 4.6rem); line-height: 1.05;
        }
        .hero-copy p { max-width: 60ch; margin: 1.25rem 0 0; color: rgba(255, 248, 240, 0.9); }
        .hero-meta { display: flex; flex-wrap: wrap; gap: .85rem; margin-top: 1.5rem; }
        .hero-meta span {
            padding: .7rem 1rem; border-radius: var(--radius-pill); background: rgba(255,255,255,.1);
            border: 1px solid rgba(255,255,255,.14); font-weight: 700;
        }
        .hero-aside {
            align-self: end; padding: 1.4rem; border-radius: 26px; background: rgba(255, 251, 245, 0.12);
            border: 1px solid rgba(255, 251, 245, 0.18); backdrop-filter: blur(10px);
        }
        .hero-aside h2 { margin: 0 0 .75rem; font-size: 1.2rem; font-family: Georgia, "Times New Roman", serif; }
        .catalog { padding: 1rem 0 4rem; }
        .flash {
            margin-bottom: 1rem; padding: 1rem 1.2rem; border-radius: 18px; border: 1px solid transparent;
            background: #fff7ea; color: #8b6731; border-color: #e8d2a6;
        }
        .flash.success { background: #edf7e6; color: #2f5a22; border-color: #cfe4c1; }
        .catalog-tools {
            display: flex; flex-wrap: wrap; justify-content: space-between; gap: 1rem; align-items: center;
            margin-bottom: 1.75rem; padding: 1.2rem; border-radius: 24px; background: var(--surface-soft);
            border: 1px solid var(--line); box-shadow: 0 14px 30px rgba(79, 52, 31, 0.08);
        }
        .catalog-tools strong { display:block; color: var(--primary-deep); font-size: 1.05rem; }
        .catalog-tools span { color: var(--muted); font-size: .94rem; }
        .search-box {
            width: min(360px,100%); border: 1px solid rgba(111, 75, 45, 0.16); border-radius: var(--radius-pill);
            padding: .95rem 1.1rem; background: var(--surface); color: var(--text); font: inherit;
        }
        .product-grid { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 1.35rem; }
        .product-card {
            display: flex; flex-direction: column; overflow: hidden; border-radius: var(--radius-lg);
            background: var(--surface); border: 1px solid var(--line); box-shadow: 0 16px 36px rgba(79, 52, 31, 0.08);
            transition: transform .25s ease, box-shadow .25s ease;
        }
        .product-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(79, 52, 31, 0.12); }
        .product-image { position: relative; height: 230px; overflow: hidden; background: linear-gradient(135deg, #dac4a8, #b0c28f); }
        .product-image img { width:100%; height:100%; object-fit: cover; transition: transform .35s ease; }
        .product-card:hover .product-image img { transform: scale(1.06); }
        .product-tag {
            position:absolute; top:1rem; left:1rem; padding:.45rem .8rem; border-radius: var(--radius-pill);
            background: rgba(255,252,246,.92); color: var(--primary-deep); font-size:.78rem; font-weight:700;
        }
        .card-body { display:flex; flex-direction:column; gap:.95rem; padding:1.4rem; flex:1; }
        .product-title { margin:0; font-size:1.28rem; color: var(--primary-deep); }
        .product-description { margin:0; color: var(--muted); flex:1; }
        .spec-list { display:grid; gap:.55rem; margin:0; padding:0; list-style:none; color:var(--muted); font-size:.93rem; }
        .spec-list li { padding-top:.55rem; border-top:1px solid rgba(111,75,45,.1); }
        .purchase-form { display:grid; gap:.85rem; margin-top:auto; }
        .card-footer { display:flex; justify-content:space-between; gap:.75rem; align-items:center; }
        .product-price strong { display:block; color:var(--primary-deep); font-size:1.45rem; line-height:1; }
        .product-price span { color:var(--accent); font-size:.88rem; font-weight:700; }
        .button-soft, .button-strong {
            display:inline-flex; align-items:center; justify-content:center; padding:.82rem 1rem; border-radius:var(--radius-pill);
            font-weight:700; border:0; font:inherit;
        }
        .button-soft { background: rgba(111,143,73,.12); color: var(--accent); }
        .button-strong { color:#fffdf8; background: linear-gradient(135deg, var(--primary), #8c6442); box-shadow:0 12px 24px rgba(111,75,45,.18); cursor:pointer; }
        .button-strong:hover, .button-soft:hover { transform: translateY(-2px); }
        .select-product {
            width: 100%;
            margin-top: .2rem;
        }
        .empty-state {
            display:none; margin-top:1rem; padding:1.3rem; border-radius:22px; background:rgba(255,251,244,.82);
            border:1px solid var(--line); color:var(--muted);
        }
        .modal-backdrop {
            position: fixed;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background: rgba(47, 36, 24, 0.55);
            backdrop-filter: blur(6px);
            z-index: 1200;
        }
        .modal-backdrop.active { display: flex; }
        .modal-card {
            width: min(460px, 100%);
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 28px;
            box-shadow: var(--shadow);
            padding: 1.5rem;
        }
        .modal-card h2 {
            margin: 0 0 .5rem;
            color: var(--primary-deep);
            font-family: Georgia, "Times New Roman", serif;
        }
        .modal-card p {
            margin: 0;
            color: var(--muted);
        }
        .modal-summary {
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 20px;
            background: var(--surface-soft);
            border: 1px solid rgba(111,75,45,.1);
        }
        .modal-summary strong {
            display: block;
            color: var(--primary-deep);
            font-size: 1.1rem;
            margin-bottom: .25rem;
        }
        .quantity-picker {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .8rem;
            margin: 1.2rem 0;
        }
        .qty-button {
            width: 46px;
            height: 46px;
            border: 0;
            border-radius: 50%;
            background: rgba(111,143,73,.12);
            color: var(--accent);
            font-size: 1.4rem;
            font-weight: 700;
            cursor: pointer;
        }
        .qty-input {
            width: 110px;
            text-align: center;
            border: 1px solid rgba(111,75,45,.16);
            border-radius: 18px;
            padding: .85rem;
            background: var(--surface);
            font: inherit;
            font-weight: 700;
            color: var(--primary-deep);
        }
        .modal-actions {
            display: flex;
            gap: .8rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }
        .modal-close {
            background: rgba(111,143,73,.12);
            color: var(--accent);
            cursor: pointer;
        }
        @media (max-width: 980px) {
            .nav-wrap, .hero-shell { display:grid; grid-template-columns:1fr; }
            .nav-actions { justify-content:center; }
            .product-grid { grid-template-columns: repeat(2, minmax(0,1fr)); }
        }
        @media (max-width: 680px) {
            .container { width:min(1180px, calc(100% - 1.2rem)); }
            .nav-actions a, .search-box, .button-strong { width:100%; }
            .product-grid { grid-template-columns:1fr; }
            .hero-shell, .catalog-tools, .product-card { border-radius:24px; }
            .hero-shell { padding:1.3rem; }
            .hero-copy h1 { max-width:none; }
            .card-footer, .modal-actions { flex-direction:column; align-items:stretch; }
            .qty-input, .qty-button, .modal-actions .button-soft, .modal-actions .button-strong { width:100%; }
            .quantity-picker { flex-direction: column; }
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
                <a class="nav-link-soft" href="<?= site_url('customer/support') ?>">Support</a>
                <a class="nav-link-strong" href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-shell">
                <div class="hero-copy">
                    <span class="eyebrow">Coir Product Catalog</span>
                    <h1>Natural products shaped from coconut coir.</h1>
                    <p>Explore practical coconut coir solutions for gardening, agriculture, landscaping, and environmental projects, then move directly into checkout when you're ready to place an order.</p>
                    <div class="hero-meta">
                        <span>Eco-Friendly Materials</span>
                        <span>Pickup or Delivery</span>
                        <span>Track Past Transactions</span>
                    </div>
                </div>

                <aside class="hero-aside">
                    <h2>From husk to high-value use</h2>
                    <p>Coconut coir starts as the fibrous outer husk of the coconut, then becomes useful products that help growers, builders, and communities choose more responsible materials.</p>
                </aside>
            </div>
        </section>

        <section class="catalog">
            <div class="container">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="flash"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="flash success"><?= esc(session()->getFlashdata('success')) ?></div>
                <?php endif; ?>

                <div class="catalog-tools">
                    <div>
                        <strong>Browse Coconut Coir Products</strong>
                        <span>Search the collection and start a checkout from any product card.</span>
                    </div>
                    <input class="search-box" type="text" placeholder="Search products, uses, or features..." aria-label="Search products">
                </div>

                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <article
                            class="product-card"
                            data-product-slug="<?= esc($product['slug']) ?>"
                            data-product-name="<?= esc($product['name']) ?>"
                            data-product-price="<?= esc(number_format((float) $product['price'], 2)) ?>"
                            data-product-unit="<?= esc($product['unit']) ?>"
                        >
                            <div class="product-image">
                                <span class="product-tag"><?= esc($product['category']) ?></span>
                                <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>">
                            </div>
                            <div class="card-body">
                                <h2 class="product-title"><?= esc($product['name']) ?></h2>
                                <p class="product-description"><?= esc($product['description']) ?></p>
                                <ul class="spec-list">
                                    <?php foreach ($product['specs'] as $spec): ?>
                                        <li><?= esc($spec) ?></li>
                                    <?php endforeach; ?>
                                </ul>

                                <form class="purchase-form" action="<?= site_url('customer/checkout/start') ?>" method="post">
                                    <input type="hidden" name="product_slug" value="<?= esc($product['slug']) ?>">
                                    <div class="card-footer">
                                        <div class="product-price">
                                            <strong>PHP <?= number_format((float) $product['price'], 2) ?></strong>
                                            <span>Available <?= esc($product['unit']) ?></span>
                                        </div>
                                        <a class="button-soft" href="<?= site_url('customer/transactions') ?>">History</a>
                                    </div>
                                    <button class="button-strong select-product" type="button">Select Quantity</button>
                                </form>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="empty-state" id="emptyState">
                    No products matched your search. Try a keyword like "gardening", "fiber", "mat", or "delivery".
                </div>
            </div>
        </section>
    </main>

    <div class="modal-backdrop" id="productModal" aria-hidden="true">
        <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
            <h2 id="modalTitle">Select Quantity</h2>
            <p>Choose how many items you want before continuing to checkout.</p>

            <div class="modal-summary">
                <strong id="modalProductName"></strong>
                <span id="modalProductMeta"></span>
            </div>

            <form action="<?= site_url('customer/checkout/start') ?>" method="post" id="modalCheckoutForm">
                <input type="hidden" name="product_slug" id="modalProductSlug">

                <div class="quantity-picker">
                    <button class="qty-button" type="button" id="decreaseQty" aria-label="Decrease quantity">-</button>
                    <input class="qty-input" id="modalQuantity" type="number" name="quantity" min="1" value="1">
                    <button class="qty-button" type="button" id="increaseQty" aria-label="Increase quantity">+</button>
                </div>

                <div class="modal-actions">
                    <button class="button-soft modal-close" type="button" id="closeModal">Cancel</button>
                    <button class="button-strong" type="submit">Proceed to Checkout</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const searchInput = document.querySelector('.search-box');
        const cards = document.querySelectorAll('.product-card');
        const emptyState = document.getElementById('emptyState');
        const modal = document.getElementById('productModal');
        const modalProductName = document.getElementById('modalProductName');
        const modalProductMeta = document.getElementById('modalProductMeta');
        const modalProductSlug = document.getElementById('modalProductSlug');
        const modalQuantity = document.getElementById('modalQuantity');
        const closeModalButton = document.getElementById('closeModal');
        const decreaseQtyButton = document.getElementById('decreaseQty');
        const increaseQtyButton = document.getElementById('increaseQty');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase().trim();
            let visibleCount = 0;

            cards.forEach(function (card) {
                const text = card.textContent.toLowerCase();
                const show = text.includes(searchTerm);
                card.style.display = show ? '' : 'none';

                if (show) {
                    visibleCount += 1;
                }
            });

            emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        });

        function openModal(card) {
            modalProductName.textContent = card.dataset.productName;
            modalProductMeta.textContent = 'PHP ' + card.dataset.productPrice + ' • ' + card.dataset.productUnit;
            modalProductSlug.value = card.dataset.productSlug;
            modalQuantity.value = 1;
            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
        }

        function closeModal() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
        }

        cards.forEach(function (card) {
            const selectButton = card.querySelector('.select-product');

            selectButton.addEventListener('click', function () {
                openModal(card);
            });

            card.querySelector('.product-image').addEventListener('click', function () {
                openModal(card);
            });

            card.querySelector('.product-title').addEventListener('click', function () {
                openModal(card);
            });
        });

        decreaseQtyButton.addEventListener('click', function () {
            const current = Math.max(1, parseInt(modalQuantity.value || '1', 10) - 1);
            modalQuantity.value = current;
        });

        increaseQtyButton.addEventListener('click', function () {
            const current = Math.max(1, parseInt(modalQuantity.value || '1', 10) + 1);
            modalQuantity.value = current;
        });

        modalQuantity.addEventListener('input', function () {
            if (! this.value || parseInt(this.value, 10) < 1) {
                this.value = 1;
            }
        });

        closeModalButton.addEventListener('click', closeModal);

        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
    </script>
    <footer class="site-footer">For educational purposes only, and no copyright infringement is intended.</footer>
</body>
</html>
