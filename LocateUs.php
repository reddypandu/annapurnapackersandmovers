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
                <i class="fas fa-map-marked-alt"></i> Pan-India Network
            </span>
            <h1 style="margin-top: 14px;">Our Network Cities &amp; Shifting Routes</h1>
            <p>Direct relocation corridors connecting our Visakhapatnam operational center with major commercial and residential hubs across India.</p>
            <div class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.75rem;"></i>
                <span>Locations</span>
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
                <!-- 1. Visakhapatnam (HQ & Aganampudi Hub) -->
                <div class="city-card" id="vizag">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Visakhapatnam (HQ)</h3>
                        <span class="route-badge">Main Base</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Head Office:</strong> Shop No. 9, Sector-4, MVP Colony, Visakhapatnam – 530017.</p>
                        <p style="margin-top: 6px;"><strong>Aganampudi Hub &amp; Yard:</strong> Industrial Corridor, Aganampudi, Visakhapatnam – 530053.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Same-day local residential shifting</li>
                            <li><i class="fas fa-check"></i> 24/7 warehouse storage facility</li>
                            <li><i class="fas fa-check"></i> <a href="https://share.google/g6T2ohr6RRSykyA2T" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Aganampudi Hub in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-primary" onclick="openCityQuote('Visakhapatnam')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Book Move in Vizag
                        </button>
                    </div>
                </div>

                <!-- 2. Vijayawada & Amaravati -->
                <div class="city-card" id="vijayawada">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Vijayawada &amp; Guntur</h3>
                        <span class="route-badge">Daily Route</span>
                    </div>
                    <div class="city-card-body">
                        <p>High-frequency transit corridor connecting Visakhapatnam with Vijayawada, Guntur, Mangalagiri, Rajahmundry, and Kakinada via NH-16.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Direct 24-hour turnaround on full loads</li>
                            <li><i class="fas fa-check"></i> Residential and commercial moves</li>
                            <li><i class="fas fa-check"></i> Enclosed vehicle carriers for cars &amp; bikes</li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Vijayawada')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Vijayawada Quote
                        </button>
                    </div>
                </div>

                <!-- 3. Hyderabad & Secunderabad -->
                <div class="city-card" id="hyderabad">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Hyderabad Branch</h3>
                        <span class="route-badge">Branch Office</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Branch Office:</strong> Devi Krupa Residency, 8-1-301/8, Lakshmi Nagar Colony, Shaikpet, Hyderabad – 500104.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Serving Hitech City, Gachibowli, Kondapur, Kukatpally, Secunderabad</li>
                            <li><i class="fas fa-check"></i> IT professional corporate relocation packages</li>
                            <li><i class="fas fa-check"></i> <a href="https://maps.app.goo.gl/Mu2oyxfdt1vzT2v77?g_st=aw" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Shaikpet Office in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Hyderabad')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Hyderabad Quote
                        </button>
                    </div>
                </div>

                <!-- 4. Bengaluru -->
                <div class="city-card" id="bengaluru">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Bengaluru</h3>
                        <span class="route-badge">Frequent Route</span>
                    </div>
                    <div class="city-card-body">
                        <p>Reliable interstate moving between Vizag and Bengaluru serving Whitefield, Electronic City, HSR Layout, Koramangala, Hebbal, and Yelahanka.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> High-grade packing for furniture &amp; appliances</li>
                            <li><i class="fas fa-check"></i> Scheduled delivery windows</li>
                            <li><i class="fas fa-check"></i> Professional unpacking support</li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Bengaluru')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Bengaluru Quote
                        </button>
                    </div>
                </div>

                <!-- 5. Chennai -->
                <div class="city-card" id="chennai">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Chennai</h3>
                        <span class="route-badge">Regular Coastal Route</span>
                    </div>
                    <div class="city-card-body">
                        <p>Coastal highway shifting connecting Vizag with Chennai, Nellore, and Ongole, covering OMR, Anna Nagar, Velachery, Guindy, and Tambaram.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Weather-sealed container trucks</li>
                            <li><i class="fas fa-check"></i> Complete household &amp; vehicle transit</li>
                            <li><i class="fas fa-check"></i> Transparent door-to-door pricing</li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Chennai')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Chennai Quote
                        </button>
                    </div>
                </div>

                <!-- 6. Bhubaneswar & All Odisha -->
                <div class="city-card" id="bhubaneswar">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Bhubaneswar &amp; Odisha</h3>
                        <span class="route-badge">Northern Route</span>
                    </div>
                    <div class="city-card-body">
                        <p>Fast transit connecting Visakhapatnam with Bhubaneswar, Cuttack, Berhampur, Sambalpur, and Rourkela along the eastern transport corridor.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Direct road transit with minimal transit time</li>
                            <li><i class="fas fa-check"></i> Expert packing of fragile glass and decor</li>
                            <li><i class="fas fa-check"></i> Industrial and corporate office moving</li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Bhubaneswar')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Odisha Quote
                        </button>
                    </div>
                </div>

                <!-- 7. Mumbai & Pune -->
                <div class="city-card" id="mumbai">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Mumbai Branch</h3>
                        <span class="route-badge">Branch Office</span>
                    </div>
                    <div class="city-card-body">
                        <p><strong>Branch Office:</strong> Swadeshi Mill Complex, Kurla East, Mumbai, Maharashtra – 400024.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Serving Navi Mumbai, Thane, Central &amp; Western Suburbs, Pune</li>
                            <li><i class="fas fa-check"></i> Multi-layer export packing standard</li>
                            <li><i class="fas fa-check"></i> <a href="https://maps.app.goo.gl/gm9pwz7bCKDTVn5B8" target="_blank" rel="noopener" style="color: var(--accent-orange); font-weight: bold;">View Mumbai Office in Google Maps &rarr;</a></li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Mumbai')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Mumbai Quote
                        </button>
                    </div>
                </div>

                <!-- 8. Kolkata & West Bengal -->
                <div class="city-card" id="kolkata">
                    <div class="city-card-header">
                        <h3><i class="fas fa-map-pin"></i> Kolkata</h3>
                        <span class="route-badge">Eastern Corridor</span>
                    </div>
                    <div class="city-card-body">
                        <p>Reliable relocation between Vizag and West Bengal, covering Kolkata, Howrah, Salt Lake, New Town, and Rajarhat.</p>
                        <ul class="city-features-list">
                            <li><i class="fas fa-check"></i> Safe transport of antique furniture &amp; artwork</li>
                            <li><i class="fas fa-check"></i> Moisture-barrier film wrapping</li>
                            <li><i class="fas fa-check"></i> Comprehensive inventory tagging</li>
                        </ul>
                        <button type="button" class="btn btn-outline" onclick="openCityQuote('Kolkata')" style="margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Get Kolkata Quote
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