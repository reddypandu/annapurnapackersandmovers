<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Locations & Shifting Routes | Annapurna Packers and Movers</title>
    <meta name="description" content="Discover Annapurna Packers and Movers network hubs across India. Dedicated relocation routes connecting Visakhapatnam with Hyderabad, Bengaluru, Chennai, Odisha, Mumbai, and Kolkata.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/LocateUs.php">
    <link rel="icon" href="img/favicon.png" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .city-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
            gap: 30px;
        }

        .city-card {
            background: #FFFFFF;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .city-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: var(--accent-orange);
        }

        .city-card-header {
            background: linear-gradient(135deg, var(--navy-dark) 0%, var(--primary-navy) 100%);
            color: #FFFFFF;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .city-card-header h3 {
            color: #FFFFFF;
            font-size: 1.35rem;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
        }

        .city-card-header h3 i {
            color: var(--accent-orange);
        }

        .city-card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .city-features-list {
            list-style: none;
            margin: 16px 0 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .city-features-list li {
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .city-features-list li i {
            color: var(--accent-orange);
            margin-top: 3px;
        }

        .route-badge {
            background: var(--orange-light);
            color: var(--accent-orange);
            padding: 4px 10px;
            border-radius: var(--radius-pill);
            font-size: 0.8rem;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Premium Hero Section Banner -->
    <section class="inner-hero" style="background: linear-gradient(135deg, rgba(10, 28, 46, 0.95) 0%, rgba(16, 42, 67, 0.88) 100%), url('img/truck-banner.jpg') center/cover no-repeat;">
        <div class="container">
            <span class="badge-tag" style="background: rgba(249, 115, 22, 0.2); color: #FFEDD5; border-color: rgba(249, 115, 22, 0.4);">
                <i class="fas fa-truck-moving"></i> GPS-Tracked Fleet
            </span>
            <h1 style="margin-top: 14px;">Reliable Transportation &amp; Logistics Services</h1>
            <p>Safe, on-time vehicle and goods transportation powered by our own yards, container trucks, and dedicated loading points across Andhra Pradesh.</p>
            <div class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.75rem;"></i>
                <span>Transportation</span>
            </div>
        </div>
    </section>

    <!-- Locations & Major Routes -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Service Hubs</span>
                <h2>Verified Operating Corridors</h2>
                <p>Equipped with GPS-tracked container trucks and local unloading partners to deliver safe, on-time relocations.</p>
            </div>

            <div class="city-grid">
                <!-- 1. Bonangi Yard -->
                <div class="city-card" id="bonangi">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Bonangi Yard</h3>
                        <span class="route-badge">Loading &amp; Transit Yard</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Yard Address:</strong> Edulapaka, Bonangi, Andhra Pradesh.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Container loading &amp; unloading point</li>
                            <li><i class="fas fa-check"></i> Heavy vehicle parking &amp; staging area</li>
                            <li><i class="fas fa-check"></i> <a href="https://share.google/pTgh8VjW36MyYwBm7" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Bonangi Yard in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Bonangi')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Quote for Bonangi
                        </button>
                    </div>
                </div>

                <!-- 2. Lankelapalem -->
                <div class="city-card" id="lankelapalem">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Lankelapalem</h3>
                        <span class="route-badge">Service Point</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Landmark:</strong> Near Balark Tandoori, Lankelapalem, Visakhapatnam.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Local residential &amp; commercial shifting</li>
                            <li><i class="fas fa-check"></i> Easy pickup &amp; drop coordination</li>
                            <li><i class="fas fa-check"></i> <a href="https://share.google/fhMeoEeDPVAe7yBJ8" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Lankelapalem in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Lankelapalem')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Quote for Lankelapalem
                        </button>
                    </div>
                </div>

                <!-- 3. Sabbavaram Office -->
                <div class="city-card" id="sabbavaram">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Sabbavaram Office</h3>
                        <span class="route-badge">Registered Office</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Office Address:</strong> Iruvada, Drivers Rest Parking, Sabbavaram, Askapalli, Anakapalli District - 531035.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Customer support &amp; documentation</li>
                            <li><i class="fas fa-check"></i> Booking &amp; scheduling coordination</li>
                            <li><i class="fas fa-check"></i> <a href="https://www.google.com/maps/search/?api=1&query=Iruvada%2C%20Drivers%20Rest%20Parking%2C%20Sabbavaram%2C%20Askapalli%2C%20Anakapalli%20District%20-%20531035" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Sabbavaram Office in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Sabbavaram')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Quote for Sabbavaram
                        </button>
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
                    <h2>Moving to Another City Not Listed Here?</h2>
                    <p>We serve all major tier-1 and tier-2 cities across India. Contact our coordinators for specialized route planning.</p>
                </div>
                <div class="final-cta-actions">
                    <button type="button" class="btn btn-primary" onclick="openQuoteModal()">
                        <i class="fas fa-file-invoice"></i> Get Custom Route Quote
                    </button>
                    <a href="tel:+919966031259" class="btn btn-outline-white">
                        <i class="fas fa-phone"></i> Call +91 99660 31259
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        function openCityQuote(cityName) {
            openQuoteModal();
            const dropInput = document.getElementById('m_drop');
            const pickupInput = document.getElementById('m_pickup');
            if (dropInput && !dropInput.value) {
                dropInput.value = cityName;
            }
            if (pickupInput && !pickupInput.value) {
                pickupInput.value = 'Visakhapatnam';
            }
        }
    </script>
</body>

</html>