<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Annapurna Packers and Movers</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome link for real icons -->
    <link rel="stylesheet" href="https://cloudflare.com">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            line-height: 1.6;
        }

        /* Premium Navigation Bar matching main theme */
        .navbar {
            background-color: #004085;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo-text {
            font-size: 22px;
            font-weight: 800;
            color: #FFF;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .logo-text span {
            color: #ff6600;
        }

        .nav-links a {
            color: #b0c4de;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #ffffff;
        }

        .nav-links a.active,
        .nav-links a:hover,
        a.active {
            color: #ffffff !important;
        }

        /* --- IMAGE MATCHED HERO BANNER --- */
        .about-hero {
            background: linear-gradient(90deg, rgba(2, 28, 54, 0.92) 45%, rgba(2, 28, 54, 0.6) 100%),
                url('img/truck-banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 60px;
            color: #fff;
            min-height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-title {
            font-size: 72px;
            font-weight: 800;
            margin-bottom: 5px;
            color: #ffffff;
            letter-spacing: 1px;
        }

        /* Orange line below 'About Us' */
        .title-divider {
            width: 120px;
            height: 3px;
            background-color: #ff6600;
            margin-bottom: 25px;
        }

        .hero-subtitle {
            font-size: 22px;
            color: #cbd5e1;
            margin-bottom: 45px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* Hero Icons Container Layout */
        .hero-icons-grid {
            display: flex;
            gap: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            max-width: 600px;
        }

        .hero-icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hero-icon-item:last-child {
            border-right: none;
        }

        .icon-circle {
            width: 65px;
            height: 65px;
            border: 2px solid rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            font-size: 24px;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .hero-icon-item:hover .icon-circle {
            border-color: #ff6600;
            color: #ff6600;
            background: rgba(255, 102, 0, 0.1);
        }

        .icon-label {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            color: #ff6600;
        }

        /* General Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        /* Section 1: About Owner & Company */
        .about-section {
            display: flex;
            gap: 50px;
            align-items: center;
            margin-bottom: 60px;
        }

        .about-content {
            flex: 1;
        }

        .sub-title {
            color: #ff6600;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .main-title {
            color: #002244;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .about-text {
            font-size: 16px;
            color: #556270;
            margin-bottom: 15px;
            text-align: justify;
        }

        .about-image-wrapper {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .owner-img {
            width: 100%;
            max-width: 450px;
            border-radius: 8px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .experience-badge {
            position: absolute;
            bottom: 20px;
            left: 40px;
            background: #ff6600;
            color: #fff;
            padding: 15px 25px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 0 10px 15px rgba(255, 102, 0, 0.3);
        }

        /* Section 2: Vision & Mission */
        .vision-mission-section {
            background-color: #fff;
            padding: 60px 0;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .cards-grid {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }

        .card {
            flex: 1;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        .card h3 {
            color: #002244;
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* Section 3: Services Grid */
        .services-section {
            margin-top: 60px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .service-box {
            background: #fff;
            padding: 30px 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            border-bottom: 3px solid #e2e8f0;
        }

        .service-box:hover {
            transform: translateY(-5px);
            border-bottom-color: #ff6600;
        }

        .service-box h4 {
            color: #002244;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .service-box p {
            font-size: 14px;
            color: #64748b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .about-section,
            .cards-grid {
                flex-direction: column;
            }

            .hero-icons-grid {
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .hero-icon-item {
                border-right: none;
                width: 45%;
            }

            .navbar {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links a {
                margin: 0 10px;
            }

            .hero-title {
                font-size: 48px;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- --- HERO BANNER SECTION MATCHING USER IMAGE --- -->
    <div class="about-hero">
        <h1 class="hero-title">About Us</h1>
        <div class="title-divider"></div>
        <p class="hero-subtitle">Packers & Movers, Home, Office & Vehicle Relocation Services</p>

        <!-- Exact Icons Grid Layout -->
        <div class="hero-icons-grid">
            <div class="hero-icon-item">
                <div class="icon-circle"><i class="fa-solid fa-house"></i></div>
                <div class="icon-label">Home</div>
            </div>
            <div class="hero-icon-item">
                <div class="icon-circle"><i class="fa-solid fa-building"></i></div>
                <div class="icon-label">Office</div>
            </div>
            <div class="hero-icon-item">
                <div class="icon-circle"><i class="fa-solid fa-car"></i></div>
                <div class="icon-label">Vehicle</div>
            </div>
            <div class="hero-icon-item">
                <div class="icon-circle"><i class="fa-solid fa-globe"></i></div>
                <div class="icon-label">International</div>
            </div>
        </div>
    </div>


    <!-- Rest of the Content in English -->
    <div class="container">
        <!-- Section 1: About Owner & Company -->
        <div class="about-section">
            <div class="about-content">
                <div class="sub-title">INTERNATIONAL PACKERS AND MOVERS</div>
                <h2 class="main-title">Annapurna Packers & Movers</h2>
                <p class="about-text"><strong>Most Trusted and Secure Packing & Moving Services in Visakhapatnam.</strong></p>
                <p class="about-text">Annapurna Packers & Movers is a leading relocation service provider in Vizag and across India. We specialize in household shifting, office relocation, and vehicle transportation. Ensuring the safety, reliability, and timely delivery of your valuable goods is our topmost priority.</p>
                <p class="about-text">With over 30 years of extensive experience and a team of highly skilled professionals, we handle every relocation with utmost care. Using high-quality packing materials and our own fleet of transport vehicles, we deliver completely stress-free moving solutions without any damage.</p>
            </div>
            <div class="about-image-wrapper">
                <img src="img/owner-profile.jpg" alt="Owner Profile" class="owner-img">
                <div class="experience-badge">30+ Years Exp.</div>
            </div>
        </div>
    </div>

    <!-- Section 2: Vision & Mission -->
    <div class="vision-mission-section">
        <div class="container" style="padding: 0 20px;">
            <div class="sub-title" style="text-align: center;">OUR COMMITMENT</div>
            <h2 class="main-title" style="text-align: center; margin-bottom: 40px;">Our Vision & Mission</h2>
            <div class="cards-grid">
                <div class="card">
                    <h3>Our Vision</h3>
                    <p>To become India's most trusted and preferred packers and movers company by continuously implementing advanced technology, logistics infrastructure, and premium packing standards.</p>
                </div>
                <div class="card">
                    <h3>Our Mission</h3>
                    <p>To provide custom, affordable, and stress-free shifting services tailored to customer needs, ensuring seamless transitions and complete customer satisfaction on every single move.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Services Grid -->
    <!-- Section 3: Services Grid -->
    <div class="container">
        <div class="services-section">
            <div class="sub-title" style="text-align: center;">OUR SERVICES</div>
            <h2 class="main-title" style="text-align: center; margin-bottom: 40px;">Complete Moving Solutions</h2>

            <div class="cards-grid">
                <!-- Card 1: International Household Moving -->
                <div class="card" style="text-align: center; padding: 20px;">
                    <div class="icon" style="font-size: 40px; margin-bottom: 15px;">🏠</div>
                    <h3 style="font-size: 20px; margin-bottom: 10px;">International Household Moving</h3>
                    <p style="color: #666; font-size: 14px;">Safe relocation services for household goods to worldwide destinations with optimal safety measures.</p>
                </div>

                <!-- Card 2: Air & Sea Freight -->
                <div class="card" style="text-align: center; padding: 20px;">
                    <div class="icon" style="font-size: 40px; margin-bottom: 15px;">✈️</div>
                    <h3 style="font-size: 20px; margin-bottom: 10px;">Air & Sea Freight</h3>
                    <p style="color: #666; font-size: 14px;">Fast, cost-effective ocean and air transportation solutions for global commercial shipping.</p>
                </div>

                <!-- Card 3: Customs Clearance -->
                <div class="card" style="text-align: center; padding: 20px;">
                    <div class="icon" style="font-size: 40px; margin-bottom: 15px;">📋</div>
                    <h3 style="font-size: 20px; margin-bottom: 10px;">Customs Clearance</h3>
                    <p style="color: #666; font-size: 14px;">Professional custom brokerage services for seamless import and export documentation worldwide.</p>
                </div>

                <!-- Card 4: Door-to-Door Global Relocation -->
                <div class="card" style="text-align: center; padding: 20px;">
                    <div class="icon" style="font-size: 40px; margin-bottom: 15px;">🌐</div>
                    <h3 style="font-size: 20px; margin-bottom: 10px;">Door-to-Door Global Relocation</h3>
                    <p style="color: #666; font-size: 14px;">Complete end-to-end relocation management from packing and shipping to final door delivery.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>