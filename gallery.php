<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery | Annapurna Packers and Movers</title>
    <meta name="description" content="View authentic photos of Annapurna Packers and Movers in action: Household packing, furniture protection, car loading, container fleet, and safe unloading across Visakhapatnam.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/gallery.php">
    <link rel="icon" href="img/favicon.png" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .filter-nav {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 35px;
        }
        .filter-btn {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            padding: 9px 20px;
            border-radius: var(--radius-pill);
            font-family: var(--font-heading);
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary-navy);
            cursor: pointer;
            transition: var(--transition);
        }
        .filter-btn:hover,
        .filter-btn.active {
            background: var(--accent-orange);
            color: #FFFFFF;
            border-color: var(--accent-orange);
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
        }
        .gallery-card {
            border-radius: var(--radius-md);
            overflow: hidden;
            background: #FFFFFF;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }
        .gallery-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: var(--accent-orange);
        }
        .gallery-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .gallery-card:hover img {
            transform: scale(1.05);
        }
        .gallery-info {
            padding: 16px 20px;
        }
        .gallery-info h4 {
            font-size: 1.05rem;
            margin-bottom: 4px;
        }
        .gallery-info span {
            font-size: 0.82rem;
            color: var(--accent-orange);
            font-weight: 600;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Premium Hero Section Banner -->
    <section class="inner-hero" style="background: linear-gradient(135deg, rgba(10, 28, 46, 0.95) 0%, rgba(16, 42, 67, 0.88) 100%), url('img/gallery.png') center/cover no-repeat;">
        <div class="container">
            <span class="badge-tag" style="background: rgba(249, 115, 22, 0.2); color: #FFEDD5; border-color: rgba(249, 115, 22, 0.4);">
                <i class="fas fa-camera"></i> Authentic Work Samples
            </span>
            <h1 style="margin-top: 14px;">On-Site Relocation Gallery</h1>
            <p>Real photographs documenting our multi-layer packing techniques, container truck loading, and furniture care.</p>
            <div class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.75rem;"></i>
                <span>Gallery</span>
            </div>
        </div>
    </section>

    <!-- Gallery Section with Filters -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Visual Proof</span>
                <h2>Our Recent Shifting Operations</h2>
                <p>Browse through actual field photographs showing our dedicated packing crew, secured cargo strapping, and transport fleet.</p>
            </div>

            <!-- Category Filters -->
            <div class="filter-nav">
                <button type="button" class="filter-btn active" onclick="filterGallery('all', this)"><i class="fas fa-border-all"></i> All Projects</button>
                <button type="button" class="filter-btn" onclick="filterGallery('packing', this)"><i class="fas fa-box"></i> Packing &amp; Wrapping</button>
                <button type="button" class="filter-btn" onclick="filterGallery('loading', this)"><i class="fas fa-truck-loading"></i> Loading &amp; Transit</button>
                <button type="button" class="filter-btn" onclick="filterGallery('vehicles', this)"><i class="fas fa-car"></i> Vehicles Transport</button>
                <button type="button" class="filter-btn" onclick="filterGallery('household', this)"><i class="fas fa-home"></i> Home Relocation</button>
            </div>

            <div class="gallery-grid" id="galleryContainer" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
                <!-- 1 -->
                <div class="gallery-card" data-category="packing">
                    <img src="img/pack1.jpg" alt="Furniture multi-layer wrapping" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Packing &amp; Wrapping</span>
                        <h4>Corrugated Sofa Wrapping</h4>
                    </div>
                </div>

                <!-- 2 -->
                <div class="gallery-card" data-category="packing">
                    <img src="img/pack2.jpg" alt="Delicate items carton packing" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Packing &amp; Wrapping</span>
                        <h4>Heavy-Duty Cartons</h4>
                    </div>
                </div>

                <!-- 3 -->
                <div class="gallery-card" data-category="packing">
                    <img src="img/pack3.jpg" alt="Wardrobe and cabinet packing" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Packing &amp; Wrapping</span>
                        <h4>Wooden Wardrobe Protection</h4>
                    </div>
                </div>

                <!-- 4 -->
                <div class="gallery-card" data-category="household">
                    <img src="img/annapurna-house-shifting-loading.jpg" alt="Household shifting loading" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Home Relocation</span>
                        <h4>Household Move in Vizag</h4>
                    </div>
                </div>

                <!-- 5 -->
                <div class="gallery-card" data-category="vehicles">
                    <img src="img/annapurna-car-shifting-loading.jpg" alt="Car loading on transport carrier" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Vehicles Transport</span>
                        <h4>Car Carrier Ramp Loading</h4>
                    </div>
                </div>

                <!-- 6 -->
                <div class="gallery-card" data-category="vehicles">
                    <img src="img/annapurna-bike-shifting-loading.jpg" alt="Bike packing and strapping" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Vehicles Transport</span>
                        <h4>Motorcycle Foam Padding</h4>
                    </div>
                </div>

                <!-- 7 -->
                <div class="gallery-card" data-category="loading">
                    <img src="img/container-truck-services.jpeg" alt="Container truck fleet" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Loading &amp; Transit</span>
                        <h4>All-Weather Container Fleet</h4>
                    </div>
                </div>

                <!-- 8 -->
                <div class="gallery-card" data-category="loading">
                    <img src="img/loading-and-unloading.jpeg" alt="Trained crew loading cartons" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Loading &amp; Transit</span>
                        <h4>Careful Truck Loading</h4>
                    </div>
                </div>

                <!-- 9 -->
                <div class="gallery-card" data-category="packing">
                    <img src="img/pack6.jpg" alt="Kitchen glassware packing" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Packing &amp; Wrapping</span>
                        <h4>Fragile Chinaware Packing</h4>
                    </div>
                </div>

                <!-- 10 -->
                <div class="gallery-card" data-category="packing">
                    <img src="img/pack10.jpg" alt="Electronics bubble wrapping" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Packing &amp; Wrapping</span>
                        <h4>LED TV &amp; Electronics Wrap</h4>
                    </div>
                </div>

                <!-- 11 -->
                <div class="gallery-card" data-category="loading">
                    <img src="img/pack13.jpg" alt="Stacking cartons in truck" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Loading &amp; Transit</span>
                        <h4>Organized Transit Stacking</h4>
                    </div>
                </div>

                <!-- 12 -->
                <div class="gallery-card" data-category="household">
                    <img src="img/pack18.jpg" alt="Unloading at new residence" loading="lazy" width="300" height="240">
                    <div class="gallery-info">
                        <span>Home Relocation</span>
                        <h4>Destination Unloading</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta-section">
        <div class="container">
            <div class="final-cta-box">
                <div>
                    <h2>Want the Same Professional Care for Your Move?</h2>
                    <p>Request an inspection or send your inventory list on WhatsApp for an immediate quote.</p>
                </div>
                <div class="final-cta-actions">
                    <button type="button" class="btn btn-primary" onclick="openQuoteModal()">
                        <i class="fas fa-file-invoice"></i> Get Free Quote
                    </button>
                    <a href="https://wa.me/918333031259" target="_blank" rel="noopener" class="btn btn-outline-white">
                        <i class="fab fa-whatsapp"></i> WhatsApp Photos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
    function filterGallery(category, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const cards = document.querySelectorAll('#galleryContainer .gallery-card');
        cards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    </script>
</body>
</html>