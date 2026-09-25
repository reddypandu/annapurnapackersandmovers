<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Packers and Movers in Visakhapatnam | Annapurna Packers</title>
    <meta name="description" content="Annapurna Packers and Movers provides dependable home shifting, office relocation, vehicle transportation, packing, and safe storage in Visakhapatnam & across India.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/">
    <link rel="icon" href="img/favicon.png" type="image/png">

    <!-- Google Fonts & Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Schema.org JSON-LD Structured Data with Verified Details -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MovingCompany",
            "name": "Annapurna Packers and Movers",
            "image": "https://annapurnapackersandmovers.com/img/main-logo.png",
            "url": "https://annapurnapackersandmovers.com/",
            "telephone": "+91-9966031259",
            "email": "annapurnapackersandmovers@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Shop No. 9, Sector-4, MVP Colony, Beside Prathibha Bharat Gas Company",
                "addressLocality": "Visakhapatnam",
                "addressRegion": "Andhra Pradesh",
                "postalCode": "530017",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 17.7431,
                "longitude": 83.3364
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                "opens": "07:00",
                "closes": "22:00"
            }
        }
    </script>
</head>

<body>

    <!-- Header Inclusion -->
    <?php include 'header.php'; ?>

    <!-- 1. Hero Section -->
    <section class="hero-section" id="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <span class="badge-tag" style="background: rgba(249, 115, 22, 0.2); color: #FFEDD5; border-color: rgba(249, 115, 22, 0.4);">
                        <i class="fas fa-shield-alt"></i> Trusted Relocation Partner
                    </span>
                    <h1>Professional Packers &amp; Movers for a <span>Stress-Free Move</span></h1>
                    <p class="hero-subtitle">
                        Reliable household shifting, corporate office relocation, vehicle transportation, and safe warehousing managed by experienced logistics specialists in Visakhapatnam and pan-India.
                    </p>
                    <div class="hero-ctas">
                        <button type="button" class="btn btn-primary" onclick="openQuoteModal()">
                            <i class="fas fa-calculator"></i> Get Free Quote
                        </button>
                        <a href="tel:+919966031259" class="btn btn-outline-white">
                            <i class="fas fa-phone"></i> Call +91 99660 31259
                        </a>
                    </div>
                    <div class="hero-features">
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> Multi-Layer Packing</div>
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> On-Time Delivery</div>
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> Nationwide Network</div>
                    </div>
                </div>

                <!-- Compact Hero Quote Form -->
                <div class="hero-quote-card">
                    <h3>Get An Instant Quote</h3>
                    <p>Enter moving details to get our competitive pricing directly on WhatsApp.</p>
                    <form id="heroQuoteForm" onsubmit="submitQuoteForm(event, 'hero')">
                        <div class="quote-form-grid">
                            <div class="form-group">
                                <label for="h_name">Your Name *</label>
                                <input type="text" id="h_name" name="name" class="form-control" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="h_phone">Mobile Number *</label>
                                <input type="tel" id="h_phone" name="phone" class="form-control" placeholder="Enter 10-digit number" pattern="[0-9]{10}" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="h_pickup">Moving From *</label>
                                    <input type="text" id="h_pickup" name="pickup" class="form-control" placeholder="From City / Area" required>
                                </div>
                                <div class="form-group">
                                    <label for="h_drop">Moving To *</label>
                                    <input type="text" id="h_drop" name="drop" class="form-control" placeholder="To City / Area" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="h_service">Relocation Type *</label>
                                <select id="h_service" name="service" class="form-control" required>
                                    <option value="Home Relocation">Home Relocation</option>
                                    <option value="Office Relocation">Office Relocation</option>
                                    <option value="Vehicle Transportation">Vehicle Transportation</option>
                                    <option value="Packing & Moving">Packing &amp; Moving</option>
                                    <option value="Storage & Warehousing">Storage &amp; Warehousing</option>
                                    <option value="International Relocation">International Relocation</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 6px;">
                                <i class="fas fa-arrow-right"></i> Request Free Quote
                            </button>
                        </div>
                        <div id="heroFormStatus" style="margin-top: 10px; font-size: 0.85rem; text-align: center; display: none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Trust Highlights (Verified Facts Only) -->
    <div class="container">
        <div class="trust-bar">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-boxes"></i></div>
                    <div>
                        <h4>Dedicated Packing</h4>
                        <p>Multi-layer protective bubble &amp; corrugated wrapping</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-truck"></i></div>
                    <div>
                        <h4>Verified Closed Fleet</h4>
                        <p>Weatherproof container vehicles for safe transit</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <div>
                        <h4>Pan-India Network</h4>
                        <p>Visakhapatnam hub serving major routes nationwide</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-headset"></i></div>
                    <div>
                        <h4>Direct Coordinator</h4>
                        <p>Dedicated supervisor support from pickup to unloading</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Six Service Cards -->
    <section class="section section-bg-light" id="services">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Comprehensive Services</span>
                <h2>Tailored Relocation Solutions</h2>
                <p>Every move is planned with care, modern packaging materials, and dedicated transport to safeguard your valuable belongings.</p>
            </div>

            <div class="services-grid">
                <!-- Service 1: Home Relocation -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/home-relocation.png.jpeg" alt="Home Relocation and Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag">Household</span>
                    </div>
                    <div class="service-body">
                        <h3>Home Relocation</h3>
                        <p>Complete household shifting including careful disassembly, protective wrapping of furniture and appliances, and safe arrangement at your new residence.</p>
                        <a href="services.php#home-relocation" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Office Relocation -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/office-relocation.jpeg" alt="Corporate Office Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag">Commercial</span>
                    </div>
                    <div class="service-body">
                        <h3>Office Relocation</h3>
                        <p>Organized office moving solutions designed to minimize operational downtime, safely transporting IT hardware, workstation furniture, and vital archives.</p>
                        <a href="services.php#office-relocation" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Vehicle Transportation -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/car-transport.jpg" alt="Car and Bike Transportation" loading="lazy" width="380" height="220">
                        <span class="service-tag">Automotive</span>
                    </div>
                    <div class="service-body">
                        <h3>Vehicle Transportation</h3>
                        <p>Specialized enclosed car carriers and secured two-wheeler crating services delivering cars and bikes safely across Indian cities with door-to-door transit.</p>
                        <a href="services.php#vehicle-transportation" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4: International Relocation -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/international-transporation.png" alt="International Cargo and Moving" loading="lazy" width="380" height="220">
                        <span class="service-tag">Global</span>
                    </div>
                    <div class="service-body">
                        <h3>International Relocation</h3>
                        <p>Cross-border relocation support with sea and air freight coordination, robust export-grade packing, and customs documentation guidance.</p>
                        <a href="services.php#international-relocation" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Packing & Moving -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/pack20.jpg" alt="Professional Packing and Moving" loading="lazy" width="380" height="220">
                        <span class="service-tag">Specialized Packing</span>
                    </div>
                    <div class="service-body">
                        <h3>Packing &amp; Moving</h3>
                        <p>Expert packing utilizing corrugated rolls, bubble sheets, heavy-duty cartons, and stretch film handled by trained packaging crews.</p>
                        <a href="services.php#packing-moving" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6: Storage & Warehousing -->
                <div class="service-card">
                    <div class="service-img-wrapper">
                        <img src="img/warehousing-and-storage.png" alt="Warehouse and Safe Storage" loading="lazy" width="380" height="220">
                        <span class="service-tag">Warehousing</span>
                    </div>
                    <div class="service-body">
                        <h3>Storage &amp; Warehousing</h3>
                        <p>Clean, secure, and monitored short-term and long-term storage facilities for residential household goods and commercial consignments in Visakhapatnam.</p>
                        <a href="services.php#storage-warehousing" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. About Annapurna Packers and Movers -->
    <section class="section section-bg-white" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-img-gallery">
                    <div class="about-main-img">
                        <img src="img/teams.png" alt="Annapurna Packers and Movers Team" loading="lazy" width="550" height="380" style="object-fit: cover; width: 100%;">
                    </div>
                    <div class="about-badge-exp">
                        <div class="exp-years">Visakhapatnam</div>
                        <div class="exp-text">Headquartered &amp; Serving India</div>
                    </div>
                </div>
                <div class="about-content">
                    <span class="badge-tag">Company Background</span>
                    <h2>Annapurna Packers and Movers</h2>
                    <p>
                        Headquartered in Visakhapatnam, Andhra Pradesh, <strong>Annapurna Packers and Movers</strong> has established a dependable reputation for delivering reliable, safe, and transparent relocation services.
                    </p>
                    <p>
                        Our team operates with disciplined packing standards, using high-quality materials to protect fragile items, bulky furniture, electrical appliances, and sensitive equipment. With our own transport coordination and trusted partner network, we ensure reliable delivery schedules.
                    </p>
                    <ul class="about-checklist">
                        <li><i class="fas fa-check-circle"></i> Systematic Item Inventory</li>
                        <li><i class="fas fa-check-circle"></i> Skilled Loading &amp; Unloading</li>
                        <li><i class="fas fa-check-circle"></i> Clear, Transparent Pricing</li>
                        <li><i class="fas fa-check-circle"></i> Pan-India Transit Network</li>
                    </ul>
                    <div>
                        <a href="aboutus.php" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i> Read Our Full Story
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Verified Corporate Associations / Client Presence -->
    <section style="background: #FFFFFF; padding: 30px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <p style="text-align: center; font-size: 0.85rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
                Verified Logistics &amp; Industrial Moves Handled Across Visakhapatnam Industrial Corridors
            </p>
            <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap; opacity: 0.85;">
                <img src="img/hpcl.png" alt="HPCL" style="height: 42px; object-fit: contain;">
                <img src="img/bhel.png" alt="BHEL" style="height: 42px; object-fit: contain;">
                <img src="img/pfizer.png" alt="Pfizer" style="height: 38px; object-fit: contain;">
                <img src="img/lt.png" alt="L&T" style="height: 38px; object-fit: contain;">
            </div>
        </div>
    </section>

    <!-- 5. Why Choose Us -->
    <section class="section section-bg-light" id="why-us">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Our Strengths</span>
                <h2>Why Choose Annapurna Packers</h2>
                <p>Relocation can be stressful without experienced professionals. Here is what we deliver on every single assignment.</p>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-people-carry"></i></div>
                    <h3>Professional Handling</h3>
                    <p>Our experienced packing and loading crew understands how to handle delicate chinaware, glassware, and bulky furniture without scuffs or damage.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-shield-virus"></i></div>
                    <h3>Careful Packing</h3>
                    <p>We use heavy-gauge corrugated cartons, protective foam sheets, bubble wraps, and moisture-resistant stretch film tailored to each item.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-route"></i></div>
                    <h3>Tailored Relocation Planning</h3>
                    <p>From pre-move surveys to specialized transit routes and vehicle choices, moves are structured around your timeline and destination requirements.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-comments"></i></div>
                    <h3>Continuous Support</h3>
                    <p>Direct communication with our moving supervisor ensures you stay updated from pickup through to delivery and unloading.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Our Moving Process -->
    <section class="section section-bg-white" id="process">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Seamless Execution</span>
                <h2>Our 4-Step Moving Process</h2>
                <p>A structured approach ensures that every relocation is executed safely, on schedule, and without confusion.</p>
            </div>

            <div class="process-grid">
                <div class="process-step">
                    <div class="step-num">1</div>
                    <div class="step-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Request a Quote</h3>
                    <p>Contact us via phone, WhatsApp, or our online quote form with your origin, destination, and approximate volume of goods.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">2</div>
                    <div class="step-icon"><i class="fas fa-clipboard-check"></i></div>
                    <h3>Plan Your Move</h3>
                    <p>We assess moving requirements, recommend appropriate vehicle sizes, and finalize the moving schedule with a transparent estimate.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">3</div>
                    <div class="step-icon"><i class="fas fa-box-open"></i></div>
                    <h3>Packing &amp; Transportation</h3>
                    <p>Our trained packers arrive with packing materials, pack your belongings securely, load them with care, and commence transit.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">4</div>
                    <div class="step-icon"><i class="fas fa-home"></i></div>
                    <h3>Delivery &amp; Unloading</h3>
                    <p>Upon arrival at your new destination, our crew unloads goods, verifies items against your checklist, and assists with initial placement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Service Locations -->
    <!-- 7. Service Locations -->
    <style>
        #locations .hub-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 22px;
            max-width: 980px;
            margin: 0 auto;
        }

        #locations .hub-card {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 26px 24px;
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        #locations .hub-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent-orange);
            box-shadow: var(--shadow-xl);
        }

        #locations .hub-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--orange-light);
            color: var(--accent-orange);
            font-size: 1rem;
        }

        #locations .hub-card h4 {
            margin: 0;
            padding-bottom: 8px;
            color: var(--navy-dark);
            font-size: 1.05rem;
            position: relative;
            display: inline-block;
        }

        /* Dashed route-line underline — same motif used across the site */
        #locations .hub-card h4::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            border-bottom: 2px dashed var(--accent-orange);
        }

        #locations .hub-card p {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        #locations .hub-card a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
            color: var(--accent-orange);
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
        }

        #locations .hub-card a:hover {
            text-decoration: underline;
        }
    </style>

    <section class="section section-bg-light" id="locations">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Coverage Area</span>
                <h2>Packers and Movers Locations</h2>
                <p>Operating from our Visakhapatnam headquarters, we connect Andhra Pradesh with key business centers and metropolitan cities across India.</p>
            </div>

            <div class="hub-grid">
                <div class="hub-card">
                    <div class="hub-icon"><i class="fas fa-warehouse"></i></div>
                    <h4>Vizag (Aganampudi)</h4>
                    <p>Aganampudi Hub, Visakhapatnam - 530053</p>
                    <a href="https://share.google/g6T2ohr6RRSykyA2T" target="_blank" rel="noopener">
                        View on Map <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                    </a>
                </div>

                <div class="hub-card">
                    <div class="hub-icon"><i class="fas fa-map-pin"></i></div>
                    <h4>Hyderabad</h4>
                    <p>Devi Krupa Residency, Shaikpet, Hyderabad - 500104</p>
                    <a href="https://maps.app.goo.gl/Mu2oyxfdt1vzT2v77?g_st=aw" target="_blank" rel="noopener">
                        View on Map <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                    </a>
                </div>

                <div class="hub-card">
                    <div class="hub-icon"><i class="fas fa-map-pin"></i></div>
                    <h4>Mumbai</h4>
                    <p>Swadeshi Mill Complex, Kurla East, Mumbai - 400024</p>
                    <a href="https://maps.app.goo.gl/gm9pwz7bCKDTVn5B8" target="_blank" rel="noopener">
                        View on Map <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Actual Project Gallery -->
    <section class="section section-bg-white" id="gallery">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Real Work Samples</span>
                <h2>On-Site Packing &amp; Shifting Gallery</h2>
                <p>Authentic photographs of our crew at work, vehicle loading, and careful wrapping of furniture and fragile household items.</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="img/pack1.jpg" alt="Household packing process" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Protective Furniture Wrapping</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/pack3.jpg" alt="Multi-layer carton boxing" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Carton Packaging</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/pack6.jpg" alt="Kitchen chinaware packing" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Kitchen Items Wrapping</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/pack10.jpg" alt="Loading into moving container" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Secure Truck Loading</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/annapurna-bike-shifting-loading.jpg" alt="Two-wheeler bike shifting loading" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Two-Wheeler Loading</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/annapurna-car-shifting-loading.jpg" alt="Car carrier ramp loading" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Car Transportation</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/pack13.jpg" alt="Bubble wrapping electronics" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Electronics Protection</span></div>
                </div>
                <div class="gallery-item">
                    <img src="img/pack18.jpg" alt="Warehouse and consignment storage" loading="lazy" width="280" height="240">
                    <div class="gallery-overlay"><span>Organized Unloading</span></div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <a href="gallery.php" class="btn btn-secondary">
                    <i class="fas fa-images"></i> Explore Full Photo Gallery
                </a>
            </div>
        </div>
    </section>

    <!-- 10. Frequently Asked Questions (Accordion) -->
    <section class="section section-bg-light" id="faqs">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Got Questions?</span>
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about relocation planning, quotes, packing materials, and delivery timelines.</p>
            </div>

            <div class="faq-container">
                <div class="faq-item active">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>How early should I book Annapurna Packers and Movers before my move?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer" style="max-height: 200px;">
                        <div class="faq-answer-inner">
                            For local shifting within Visakhapatnam, giving 2 to 3 days notice is generally sufficient. For intercity moves across state borders or during peak month-end weekends, booking 5 to 7 days in advance helps secure your preferred moving slot and dedicated transport container.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>What packing materials do you use for fragile and electronic items?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            We use multiple protective layers including high-density bubble wrap, heavy-duty 5-ply and 7-ply corrugated cartons, foam sheets, thermocol corner protectors, and moisture-resistant stretch film. Fragile kitchen chinaware and delicate decor receive individual wrapping.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Do you provide door-to-door car and two-wheeler transport?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            Yes. We provide door-to-door vehicle transport using specialized enclosed car carriers and securely strapped motorcycle crates to prevent scratches, weather damage, or transit wear.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Are there any hidden costs beyond the initial quote?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            No. Annapurna Packers and Movers provides transparent quotes outlining packing materials, labor, vehicle hire, loading, and unloading. Any special requirements such as crane lifting, high-floor stair carry where elevators are absent, or long-term warehousing are discussed upfront.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Can I store my goods temporarily if my new residence is not ready?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            Yes. We offer safe short-term and long-term warehousing at our storage facility in Visakhapatnam. Goods remain packed in weatherproof conditions until you are ready for final delivery.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================================================================
     Brand Summary / SEO Block
     Self-contained: works even if var(--navy-dark) etc. aren't defined,
     since fallback hex values are given for every custom property use.
     ========================================================================== -->
    <style>
        .brand-summary {
            max-width: 980px;
            margin: 0 auto;
            padding: 48px 40px;
            background: #FFFFFF;
            border-radius: var(--radius-lg, 16px);
            box-shadow: var(--shadow-sm, 0 2px 10px rgba(0, 0, 0, 0.06));
            text-align: center;
        }

        .brand-summary .summary-icon {
            font-size: 2.4rem;
            margin-bottom: 18px;
            line-height: 1;
        }

        .brand-summary h2 {
            margin: 0 0 22px;
            color: var(--navy-dark, #0f1c30);
            font-size: 1.9rem;
            line-height: 1.35;
        }

        .brand-summary p {
            margin: 0 0 26px;
            color: var(--text-muted, #5b6472);
            font-size: 1.02rem;
            line-height: 1.75;
        }

        .brand-summary p strong {
            color: var(--navy-dark, #0f1c30);
        }

        .brand-summary .serve-bar {
            margin: 0 0 26px;
            padding: 18px 24px;
            background: var(--navy-dark, #0f1c30);
            border-radius: var(--radius-md, 10px);
            color: #FFFFFF;
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.7;
        }

        .brand-summary .serve-bar mark {
            background: rgba(255, 255, 255, 0.14);
            color: #FFFFFF;
            padding: 2px 4px;
            border-radius: 4px;
            box-decoration-break: clone;
            -webkit-box-decoration-break: clone;
        }

        @media (max-width: 640px) {
            .brand-summary {
                padding: 36px 22px;
            }

            .brand-summary h2 {
                font-size: 1.5rem;
            }
        }
    </style>

    <section class="section section-bg-light">
        <div class="container">
            <div class="brand-summary">
                <div class="summary-icon">🚚</div>
                <h2>Annapurna Packers and Movers | Packers &amp; Movers, Home, Office &amp; Vehicle Relocation Services Across India</h2>
                <p>
                    Annapurna Packers and Movers provides professional <strong>Packers &amp; Movers</strong> services including
                    <strong>Home Relocation</strong>, <strong>Office Shifting</strong>, <strong>Vehicle Transportation</strong>,
                    <strong>International Relocation</strong>, <strong>Warehouse &amp; Storage Solutions</strong>,
                    <strong>Air &amp; Sea Cargo Services</strong>, and <strong>Industrial Moving</strong> with safe packing,
                    secure transportation, and on-time delivery.
                </p>

                <div class="serve-bar">
                    We proudly serve
                    <mark>Visakhapatnam, Vijayawada, Guntur, Rajahmundry, Kakinada, Tirupati, Nellore, Hyderabad, Chennai, Bengaluru, Mumbai, Pune, Delhi, Kolkata and all major cities across India.</mark>
                </div>

                <p>
                    Whether you're relocating your home, office, vehicle or planning an international move, our experienced
                    team ensures professional packing, careful handling, secure transportation and hassle-free relocation
                    at affordable prices.
                </p>
            </div>
        </div>
    </section>
    <!-- 11. Final Strong Quote Request CTA -->
    <section class="final-cta-section">
        <div class="container">
            <div class="final-cta-box">
                <div>
                    <h2>Ready for a Safe, Smooth Relocation?</h2>
                    <p>Speak directly with our moving coordinators in Visakhapatnam for competitive quotes and dedicated scheduling.</p>
                </div>
                <div class="final-cta-actions">
                    <button type="button" class="btn btn-primary" onclick="openQuoteModal()">
                        <i class="fas fa-file-invoice"></i> Get Free Moving Quote
                    </button>
                    <a href="tel:+919966031259" class="btn btn-outline-white">
                        <i class="fas fa-phone"></i> Call +91 99660 31259
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. Footer Inclusion -->
    <?php include 'footer.php'; ?>

</body>

</html>