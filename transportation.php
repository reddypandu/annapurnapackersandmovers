<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation Services &amp; Fleet | Annapurna Packers and Movers</title>
    <meta name="description" content="Explore Annapurna Packers and Movers transportation services, truck options, safety practices, service hubs, and intercity route coordination.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/transportation.php">
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

        .transport-intro {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 40px;
            align-items: center;
        }

        .transport-intro-copy p {
            color: var(--text-muted);
        }

        .transport-intro-image {
            width: 100%;
            max-height: 360px;
            object-fit: cover;
            border-radius: var(--radius-lg);
        }

        .fleet-types-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(245px, 1fr));
            gap: 20px;
        }

        .fleet-type-card {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            padding: 22px;
            box-shadow: var(--shadow-sm);
        }

        .fleet-type-card>i {
            color: var(--accent-orange);
            font-size: 1.5rem;
            margin-bottom: 14px;
        }

        .fleet-type-card h3 {
            font-size: 1.08rem;
            margin-bottom: 8px;
        }

        .fleet-type-card p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .fleet-capacity {
            border-top: 1px solid var(--border-color);
            padding-top: 12px;
            margin: 0;
            font-size: 0.84rem;
            font-weight: 600;
            color: var(--primary-navy);
        }

        .fleet-stats {
            background: linear-gradient(135deg, var(--navy-dark), var(--primary-navy));
            color: #FFFFFF;
            padding: 34px 0;
        }

        .fleet-stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .fleet-stat {
            text-align: center;
            padding: 8px;
        }

        .fleet-stat strong {
            display: block;
            color: #FFFFFF;
            font-size: 1.35rem;
            margin-bottom: 5px;
        }

        .fleet-stat span {
            color: #CBD5E1;
            font-size: 0.88rem;
        }

        .brand-chips {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .brand-chip {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            border: 1px solid var(--border-color);
            background: #FFFFFF;
            padding: 12px 17px;
            border-radius: var(--radius-sm);
            color: var(--primary-navy);
            font-weight: 600;
        }

        .brand-chip i {
            color: var(--accent-orange);
        }

        .transport-steps {
            grid-template-columns: repeat(5, 1fr);
        }

        .coverage-summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 26px;
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
        }

        .coverage-summary p {
            color: var(--text-muted);
            margin: 0;
        }

        .safety-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .safety-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            min-height: 142px;
            padding: 22px 18px;
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .safety-item:hover {
            border-color: var(--accent-orange);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        .safety-item i {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            color: var(--accent-orange);
            background: var(--orange-light);
            border-radius: var(--radius-sm);
            font-size: 1rem;
        }

        .safety-item p {
            color: var(--text-muted);
            font-size: 0.88rem;
            line-height: 1.6;
            margin: 0;
        }

        .safety-item strong {
            display: block;
            color: var(--primary-navy);
            font-size: 0.96rem;
            line-height: 1.35;
            margin-bottom: 6px;
        }

        .safety-item br {
            display: none;
        }

        @media (max-width: 991px) {
            .safety-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .city-grid {
                grid-template-columns: 1fr;
            }

            .transport-intro {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .fleet-stats-grid,
            .safety-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .transport-steps {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .coverage-summary {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 420px) {

            .fleet-stats-grid,
            .safety-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Premium Hero Section Banner -->
    <section class="inner-hero" style="background: linear-gradient(135deg, rgba(10, 28, 46, 0.95) 0%, rgba(16, 42, 67, 0.88) 100%), url('img/transporatation-banner.png') center/cover no-repeat;">
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

    <section class="section section-bg-white" id="about-transportation">
        <div class="container transport-intro">
            <div class="transport-intro-copy">
                <span class="badge-tag">About Transportation</span>
                <h2 style="margin: 14px 0;">Planned transport for vehicles, household moves, and business cargo</h2>
                <p>Annapurna Packers and Movers coordinates pickup, loading, road transport, and delivery across local and intercity routes. The fleet includes sealed container trucks and vehicle-transport options, with route coordination and GPS tracking available for supported journeys.</p>
                <p>Trained moving teams use suitable packing and load-securing practices. Truck assignment, tracking arrangements, permits, and transit-cover terms are confirmed against each booking.</p>
            </div>
            <img class="transport-intro-image" src="img/transportation-about.png" alt="Sealed container truck used for transportation" loading="lazy" width="700" height="460">
        </div>
    </section>

    <section class="section section-bg-light" id="vehicle-types">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Fleet Options</span>
                <h2>Vehicle Types We Transport</h2>
                <p>Choose a vehicle category to start your request. Final assignment and payload are confirmed for the route and date.</p>
            </div>
            <div class="fleet-types-grid">
                <article class="fleet-type-card"><i class="fas fa-truck-pickup"></i>
                    <h3>Mini Truck</h3>
                    <p>For smaller local deliveries, compact household loads, and limited-volume moves, subject to availability.</p>
                    <p class="fleet-capacity">Payload: Confirmed for assigned vehicle</p>
                </article>
                <article class="fleet-type-card"><i class="fas fa-truck"></i>
                    <h3>14 ft Container Truck</h3>
                    <p>For compact household moves and smaller consignments needing an enclosed body.</p>
                    <p class="fleet-capacity">Payload: Confirmed for assigned vehicle</p>
                </article>
                <article class="fleet-type-card"><i class="fas fa-truck-moving"></i>
                    <h3>17 ft Container Truck</h3>
                    <p>A mid-size option for household or commercial cargo that benefits from covered transit.</p>
                    <p class="fleet-capacity">Payload: Confirmed for assigned vehicle</p>
                </article>
                <article class="fleet-type-card"><i class="fas fa-truck-moving"></i>
                    <h3>19 ft Container Truck</h3>
                    <p>For larger consignments requiring an enclosed truck and coordinated loading.</p>
                    <p class="fleet-capacity">Payload: Confirmed for assigned vehicle</p>
                </article>
                <article class="fleet-type-card"><i class="fas fa-truck-moving"></i>
                    <h3>22 ft / 32 ft Container Trucks</h3>
                    <p>Higher-volume moves and commercial loads, with size selected after reviewing cargo and access.</p>
                    <p class="fleet-capacity">Payload: Confirmed for assigned vehicle</p>
                </article>
                <article class="fleet-type-card"><i class="fas fa-car-side"></i>
                    <h3>Enclosed Car Carrier</h3>
                    <p>For transporting cars between cities with vehicle-specific loading and transit coordination.</p>
                    <p class="fleet-capacity">Capacity: Vehicle and carrier availability confirmed at booking</p>
                </article>
            </div>
        </div>
    </section>

    <section class="fleet-stats" aria-label="Transportation fleet information">
        <div class="container fleet-stats-grid">
            <div class="fleet-stat"><strong>Multiple sizes</strong><span>Fleet count confirmed when you enquire</span></div>
            <div class="fleet-stat"><strong>Vehicle-rated</strong><span>Maximum payload confirmed for assigned truck</span></div>
            <div class="fleet-stat"><strong>GPS tracking</strong><span>Availability and update schedule confirmed per trip</span></div>
            <div class="fleet-stat"><strong>Intercity routes</strong><span>Route coverage confirmed for your locations</span></div>
        </div>
    </section>

    <section class="section section-bg-white" id="truck-brands">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Fleet Information</span>
                <h2>Truck Brands We Operate</h2>
                <p>Manufacturer names are confirmed with the assigned vehicle. We avoid listing unverified make names; ask our team for the available truck details for your booking.</p>
            </div>
            <div class="brand-chips" aria-label="Fleet make information">
                <span class="brand-chip"><i class="fas fa-truck"></i> Make confirmed at assignment</span>
                <span class="brand-chip"><i class="fas fa-box"></i> Sealed container body</span>
                <span class="brand-chip"><i class="fas fa-car-side"></i> Carrier option by request</span>
            </div>
        </div>
    </section>

    <section class="section section-bg-light" id="transport-process">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">The Process</span>
                <h2>How Transportation Works</h2>
                <p>From your first enquiry through delivery, each trip is planned around the consignment and route.</p>
            </div>
            <div class="process-grid transport-steps">
                <div class="process-step"><span class="step-num">1</span>
                    <div class="step-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Enquiry</h3>
                    <p>Share the cargo, locations, vehicle type, and preferred date.</p>
                </div>
                <div class="process-step"><span class="step-num">2</span>
                    <div class="step-icon"><i class="fas fa-truck"></i></div>
                    <h3>Vehicle Assigned</h3>
                    <p>Confirm truck size, availability, route, and quote details.</p>
                </div>
                <div class="process-step"><span class="step-num">3</span>
                    <div class="step-icon"><i class="fas fa-boxes-stacked"></i></div>
                    <h3>Pickup &amp; Loading</h3>
                    <p>Coordinate the pickup, condition check, and secure loading.</p>
                </div>
                <div class="process-step"><span class="step-num">4</span>
                    <div class="step-icon"><i class="fas fa-location-dot"></i></div>
                    <h3>In-Transit Updates</h3>
                    <p>Tracking and progress updates are arranged for supported trips.</p>
                </div>
                <div class="process-step"><span class="step-num">5</span>
                    <div class="step-icon"><i class="fas fa-house-circle-check"></i></div>
                    <h3>Delivery</h3>
                    <p>Coordinate arrival and unloading at the agreed destination.</p>
                </div>
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
                        <span class="route-badge">Transport Office</span>
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
                        <span class="route-badge">ODC & JCB Vehicles</span>
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

    <section class="section section-bg-light" id="safety-handling">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Care in Transit</span>
                <h2>Safety &amp; Handling</h2>
                <p>We plan handling around the cargo type, chosen vehicle, and journey requirements.</p>
            </div>
            <div class="safety-grid">
                <div class="safety-item"><i class="fas fa-cloud-rain"></i>
                    <p><strong>Weather protection</strong><br>Sealed containers help shield goods from rain and road dust.</p>
                </div>
                <div class="safety-item"><i class="fas fa-link"></i>
                    <p><strong>Load securing</strong><br>Loading arrangements are planned to reduce shifting during transit.</p>
                </div>
                <div class="safety-item"><i class="fas fa-user-check"></i>
                    <p><strong>Trained moving teams</strong><br>Pickup and handling are coordinated with experienced relocation staff.</p>
                </div>
                <div class="safety-item"><i class="fas fa-file-shield"></i>
                    <p><strong>Transit cover terms</strong><br>Ask for the applicable insurance or liability terms and have them confirmed in your quote.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="section section-bg-light" id="transport-faqs">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Transportation FAQs</span>
                <h2>Common Questions</h2>
                <p>Confirm trip-specific timing and terms with our team when you request your quote.</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>How early should I book a truck?</span><span class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Book as early as you can, especially for intercity trips or preferred dates. Availability depends on the route, truck size, and schedule; our team will confirm the earliest suitable slot.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Are interstate permits included?</span><span class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Permit and route requirements depend on the vehicle, cargo, and journey. Share both locations when requesting a quote so our team can confirm the applicable documentation and charges.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Is transit insurance or liability coverage included?</span><span class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Coverage depends on the booking terms. Ask for the available insurance or liability options and have the coverage, exclusions, and charges confirmed in writing before dispatch.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>Can I track the vehicle during transit?</span><span class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">GPS tracking is available for supported fleet journeys. Confirm the tracking method and update schedule with the coordinator when your vehicle is assigned.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button type="button" class="faq-question" onclick="toggleFaq(this)">
                        <span>What if I need to cancel or reschedule?</span><span class="faq-icon-wrapper"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Contact the team as soon as your plans change. Cancellation or rescheduling charges depend on the confirmed booking terms, vehicle assignment, and how close the change is to pickup.</div>
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
                    <h2>Ready to Plan Your Transportation?</h2>
                    <p>Call our team at <a href="tel:+919966031259" style="color: #FFFFFF; font-weight: 700;">+91 99660 31259</a> to check routes, fleet availability, and booking terms.</p>
                </div>
                <div class="final-cta-actions">
                    <button type="button" class="btn btn-primary" onclick="openQuoteModal()"><i class="fas fa-truck"></i> Book Now</button>
                    <a href="tel:+919966031259" class="btn btn-outline-white"><i class="fas fa-phone"></i> Call Us</a>
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