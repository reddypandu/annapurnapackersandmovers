<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprehensive Logistics & Relocation Services | Annapurna Packers</title>
    <meta name="description" content="Explore full-spectrum relocation services by Annapurna Packers and Movers: Home shifting, office moving, vehicle transport, warehousing, and international moving from Visakhapatnam.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/services.php">
    <link rel="icon" href="img/favicon.png" type="image/png">

    <!-- Google Fonts & Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Premium Hero Section Banner -->
    <section class="inner-hero" style="background: linear-gradient(135deg, rgba(10, 28, 46, 0.95) 0%, rgba(16, 42, 67, 0.88) 100%), url('img/services.png') center/cover no-repeat;">
        <div class="container">
            <span class="badge-tag" style="background: rgba(249, 115, 22, 0.2); color: #FFEDD5; border-color: rgba(249, 115, 22, 0.4);">
                <i class="fas fa-boxes"></i> End-to-End Solutions
            </span>
            <h1 style="margin-top: 14px;">Professional Relocation Services</h1>
            <p>Reliable, damage-free shifting solutions engineered for households, corporates, and industries across India.</p>
            <div class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.75rem;"></i>
                <span>Our Services</span>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Service Portfolio</span>
                <h2>Specialized Logistics &amp; Shifting</h2>
                <p>Every assignment is executed by disciplined crews using protective wrapping, modern handling equipment, and closed-container vehicles.</p>
            </div>

            <div class="services-grid" id="servicesGrid">
                <!-- 1. Packing and Moving -->
                <div class="service-card" id="packing-moving">
                    <div class="service-img-wrapper">
                        <img src="img/packing-photo.jpg" alt="Professional Packing and Moving" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-box-open"></i> Full Packing</span>
                    </div>
                    <div class="service-body">
                        <h3>Packing &amp; Moving</h3>
                        <p>Multi-layered packing utilizing heavy 5-ply cartons, corrugated rolls, thermocol, and stretch film. Our skilled personnel systematically pack, code, and crate your valuable goods.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Packing & Moving')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Packing
                        </button>
                    </div>
                </div>

                <!-- 2. Home Relocation -->
                <div class="service-card" id="home-relocation">
                    <div class="service-img-wrapper">
                        <img src="img/home-relocation.png.jpeg" alt="Home Relocation and Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-house"></i> Household</span>
                    </div>
                    <div class="service-body">
                        <h3>Home Relocation</h3>
                        <p>Complete household shifting from single apartments to large bungalows. We handle delicate glassware, electronics, kitchen sets, wardrobes, and furniture with supreme care.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Home Relocation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Home Move
                        </button>
                    </div>
                </div>

                <!-- 3. Office Relocation -->
                <div class="service-card" id="office-relocation">
                    <div class="service-img-wrapper">
                        <img src="img/office-relocation.jpeg" alt="Corporate Office Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-building"></i> Commercial</span>
                    </div>
                    <div class="service-body">
                        <h3>Office Relocation</h3>
                        <p>Streamlined corporate moves scheduled on weekends or off-peak hours to minimize business downtime. Safe transport of server racks, workstations, confidential files, and conference furniture.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Office Relocation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Office Move
                        </button>
                    </div>
                </div>

                <!-- 4. Vehicle Transportation -->
                <div class="service-card" id="vehicle-transportation">
                    <div class="service-img-wrapper">
                        <img src="img/car-transport.jpg" alt="Car Transportation in Enclosed Carrier" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-car"></i> Car Carrier</span>
                    </div>
                    <div class="service-body">
                        <h3>Car Transportation</h3>
                        <p>Enclosed hydraulic car carrier trailers guaranteeing scratch-free door-to-door transit for sedans, SUVs, and luxury automobiles across intercity corridors.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Vehicle Transportation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Car Transport
                        </button>
                    </div>
                </div>

                <!-- 5. Bike Transportation -->
                <div class="service-card" id="bike-transportation">
                    <div class="service-img-wrapper">
                        <img src="img/bike-transport.jpg" alt="Two-Wheeler Bike Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-motorcycle"></i> Two-Wheeler</span>
                    </div>
                    <div class="service-body">
                        <h3>Bike Transportation</h3>
                        <p>Secure motorcycle shifting with protective foam wrapping, mirror and indicator padding, bubble wrap, and firm wooden-base strapping inside transit trucks.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Vehicle Transportation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Bike Transport
                        </button>
                    </div>
                </div>

                <!-- 6. Storage & Warehousing -->
                <div class="service-card" id="storage-warehousing">
                    <div class="service-img-wrapper">
                        <img src="img/warehousing-and-storage.png" alt="Warehouse and Safe Storage Facility" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-warehouse"></i> Storage Hub</span>
                    </div>
                    <div class="service-body">
                        <h3>Storage &amp; Warehousing</h3>
                        <p>Pest-controlled, 24/7 guarded warehousing in Visakhapatnam. Store excess household goods, corporate archives, or transitional shipments with monthly flexible terms.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Storage & Warehousing')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Storage
                        </button>
                    </div>
                </div>

                <!-- 7. International Relocation -->
                <div class="service-card" id="international-relocation">
                    <div class="service-img-wrapper">
                        <img src="img/international-transporation.png" alt="International Relocation Freight" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-plane-departure"></i> Global Cargo</span>
                    </div>
                    <div class="service-body">
                        <h3>International Relocation</h3>
                        <p>Air and sea cargo shipping with export-standard wooden crating, container stuffing, customs clearance coordination, and worldwide door delivery assistance.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('International Relocation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Global Move
                        </button>
                    </div>
                </div>

                <!-- 8. Loading & Unloading -->
                <div class="service-card" id="loading-unloading">
                    <div class="service-img-wrapper">
                        <img src="img/loading-and-unloading.jpeg" alt="Trained Crew Loading and Unloading" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-people-carry"></i> Manpower</span>
                    </div>
                    <div class="service-body">
                        <h3>Loading &amp; Unloading</h3>
                        <p>Physically fit, trained handlers equipped with trollies, ramps, and safety straps to load and unload heavy boxes without damaging walls, lifts, or staircases.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Packing & Moving')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Labor Crew
                        </button>
                    </div>
                </div>

                <!-- 9. Heavy Machinery Shifting -->
                <div class="service-card" id="heavy-machinery">
                    <div class="service-img-wrapper">
                        <img src="img/heavy-machinery-shifting.png" alt="Heavy Machinery and Industrial Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-cogs"></i> Industrial</span>
                    </div>
                    <div class="service-body">
                        <h3>Heavy Machinery Shifting</h3>
                        <p>Industrial machinery moving and factory relocation utilizing hydraulic jacks, cranes, heavy-duty trailers, and specialized rigging experts in Vizag industrial hubs.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Office Relocation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Machinery
                        </button>
                    </div>
                </div>

                <!-- 10. Container Truck Services -->
                <div class="service-card" id="container-trucks">
                    <div class="service-img-wrapper">
                        <img src="img/container-truck-services.jpeg" alt="Container Truck Services" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-truck"></i> Dedicated Fleet</span>
                    </div>
                    <div class="service-body">
                        <h3>Container Truck Services</h3>
                        <p>Dedicated sealed-container trucks (14ft, 17ft, 19ft, 22ft, 32ft) ensuring your cargo travels privately without mix-ups or exposure to rain and road grime.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Packing & Moving')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Container Truck
                        </button>
                    </div>
                </div>

                <!-- 11. Residential Relocation -->
                <div class="service-card" id="residential-relocation">
                    <div class="service-img-wrapper">
                        <img src="img/residential-relocation.png.webp" alt="Residential Shifting" loading="lazy" width="380" height="220">
                        <span class="service-tag"><i class="fas fa-door-open"></i> Full Setup</span>
                    </div>
                    <div class="service-body">
                        <h3>Residential Relocation</h3>
                        <p>Customized residential shifting packages including furniture assembly, basic electronics setup, and systematic unpacking so you can settle in immediately.</p>
                        <button type="button" class="btn btn-outline" onclick="openQuoteWithService('Home Relocation')" style="width: 100%; margin-top: auto;">
                            <i class="fas fa-paper-plane"></i> Enquire for Residential
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moving Process & Quality Standards -->
    <section class="section section-bg-white">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Execution Standard</span>
                <h2>How We Safeguard Your Consignment</h2>
                <p>Every step of our relocation cycle is monitored for absolute cargo protection.</p>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-layer-group"></i></div>
                    <h3>Multi-Tier Protective Layering</h3>
                    <p>Fragile items receive specialized micro-foam wrapping, corrugated cushions, and double-taped shock absorbers inside rigid cartons.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-truck-loading"></i></div>
                    <h3>Engineered Vehicle Weight Distribution</h3>
                    <p>Heavy furniture and appliances are base-anchored with industrial straps to eliminate shifts or tipping during highway maneuvers.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Itemized Consignment Note</h3>
                    <p>Every carton is marked with room destinations and cataloged on a verified inventory note signed prior to dispatch.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-clock"></i></div>
                    <h3>Punctual Delivery Guarantee</h3>
                    <p>Pre-planned transit routing avoids bottlenecks, ensuring arrival within the agreed delivery window.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section for Services -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Service FAQs</span>
                <h2>Frequently Asked Questions About Services</h2>
                <p>Quick answers to questions regarding packing standards, transit, and special items.</p>
            </div>

            <div class="faq-container">
                <div class="faq-item active">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Do you provide packing materials or should I arrange them?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer" style="max-height: 200px;">
                        <div class="faq-answer-inner">
                            Annapurna Packers brings all necessary packing materials, including 5-ply cartons, bubble wrap, stretch film, corrugated sheets, waterproof covers, and sealing tapes. You do not need to arrange anything.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>How are electronics such as LED TVs and refrigerators protected?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            LED TVs are wrapped in shock-absorbing foam, enclosed in custom-sized wooden or heavy corrugated LED boxes with corner buffers. Refrigerators are defrost-checked, secured with internal padding, and stretch-wrapped.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Can I transport plants or perishable food items?</span>
                        <div class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            For local moves within Visakhapatnam, potted plants can be accommodated. For intercity moves spanning multiple days, we advise against moving perishable foodstuffs or fragile potted plants due to enclosed vehicle temperature conditions.
                        </div>
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
                    <h2>Need a Custom Quote for Your Relocation?</h2>
                    <p>Call our Visakhapatnam customer desk or request a call back with full item assessment.</p>
                </div>
                <div class="final-cta-actions">
                    <button type="button" class="btn btn-primary" onclick="openQuoteModal()">
                        <i class="fas fa-calculator"></i> Get Free Quote
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
        function openQuoteWithService(serviceName) {
            openQuoteModal();
            const selectElem = document.getElementById('m_service');
            if (selectElem) {
                selectElem.value = serviceName;
            }
        }
    </script>
</body>

</html>