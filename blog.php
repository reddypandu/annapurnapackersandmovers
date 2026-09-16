<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Annapurna Packers and Movers</title>

    <!-- CSS Dependencies from your server -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <style>
        /* ========================================================
           HARSHA STYLE LAYOUT - APPLIED FOR ANNAPURNA PACKERS
           ======================================================== */
        .harsha-layout-section {
            padding: 80px 0;
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
        }

        .harsha-layout-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .keyword-section {
            padding: 40px 20px;
            background-color: #f9fbff;
            text-align: center;
            clear: both;
        }

        .section-title {
            color: #ff6f00;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1.5px;
            margin-bottom: 35px;
            text-transform: uppercase;
        }

        .keyword-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .keyword-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            color: #0b2240;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            padding: 18px 12px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            min-height: 50px;
            border: 1px solid #edf2f9;
        }

        .keyword-btn:hover {
            background-color: #0b2240;
            color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(11, 34, 64, 0.15);
        }

        @media (max-width: 992px) {
            .keyword-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .keyword-grid {
                grid-template-columns: 1fr;
            }
        }

        .harsha-layout-title .sub-heading {
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            color: #d32f2f;
            /* Annapurna Red Color */
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .harsha-layout-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 15px 0;
        }

        .harsha-layout-title p {
            max-width: 750px;
            margin: 0 auto;
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        /* 3-Column Card Layout Container like Harsha Site */
        .harsha-card-grid {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .harsha-card-col {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 30px;
            box-sizing: border-box;
        }

        @media (min-width: 768px) {
            .harsha-card-col {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 992px) {
            .harsha-card-col {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        /* Modern Box Card Style */
        .harsha-style-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid #eef2f5;
        }

        .harsha-style-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .harsha-card-image {
            position: relative;
            width: 100%;
            height: 240px;
            background: #eaeaea;
            overflow: hidden;
        }

        .harsha-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .harsha-style-card:hover .harsha-card-image img {
            transform: scale(1.08);
        }

        /* Floating Date Badge Style like Harsha Movers */
        .harsha-style-date {
            position: absolute;
            left: 20px;
            bottom: 20px;
            width: 65px;
            height: 70px;
            background: #d32f2f;
            /* Annapurna Theme Color */
            color: #ffffff;
            text-align: center;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            z-index: 2;
        }

        .harsha-style-date span {
            font-size: 22px;
            line-height: 1;
            display: block;
            color: #fff !important;
        }

        .harsha-style-date small {
            font-size: 11px;
            text-transform: uppercase;
            display: block;
            margin-top: 2px;
            color: #fff !important;
        }

        .harsha-card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .harsha-card-cat {
            display: inline-block;
            font-size: 13px;
            font-weight: 600;
            color: #d32f2f;
            text-transform: uppercase;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }

        .harsha-card-body h3 {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0 0 12px 0;
            color: #1c2c52;
        }

        .harsha-card-body p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin: 0 0 20px 0;
        }

        .harsha-card-btn {
            font-size: 15px;
            font-weight: 600;
            color: #1c2c52;
            text-decoration: none;
            margin-top: auto;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s;
        }

        .harsha-card-btn i {
            margin-left: 8px;
            font-size: 13px;
            transition: transform 0.3s;
        }

        .harsha-card-btn:hover {
            color: #d32f2f;
            text-decoration: none;
        }

        .harsha-card-btn:hover i {
            transform: translateX(5px);
        }

        /* --- Popular Keywords Styling --- */
        .keyword-section {
            padding: 40px 20px;
            background-color: #f9fbff;
            text-align: center;
            clear: both;
        }

        .section-title {
            color: #ff6f00;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1.5px;
            margin-bottom: 35px;
            text-transform: uppercase;
        }

        .keyword-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .keyword-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            color: #0b2240;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            padding: 18px 12px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            min-height: 50px;
            border: 1px solid #edf2f9;
        }

        .keyword-btn:hover {
            background-color: #0b2240;
            color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(11, 34, 64, 0.15);
        }

        @media (max-width: 992px) {
            .keyword-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .keyword-grid {
                grid-template-columns: 1fr;
            }
        }

        /* --- Areas We Serve Styling --- */
        .areas-section {
            padding: 60px 20px;
            background-color: #f4f8ff;
            text-align: center;
        }

        .areas-badge {
            background-color: #ffb300;
            color: #ffffff;
            font-size: 13px;
            font-weight: bold;
            padding: 6px 20px;
            border-radius: 20px;
            display: inline-block;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .areas-title {
            color: #0d233a;
            font-size: 28px;
            font-weight: bold;
            max-width: 900px;
            margin: 0 auto 20px auto;
            line-height: 1.4;
        }

        .areas-desc {
            color: #555555;
            font-size: 15px;
            max-width: 850px;
            margin: 0 auto 40px auto;
            line-height: 1.6;
        }

        .areas-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .state-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            border: 1px solid #eef2f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .state-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .truck-icon {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .state-name {
            font-size: 13px;
            font-weight: 600;
            color: #333333;
        }

        @media (max-width: 992px) {
            .areas-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .areas-title {
                font-size: 22px;
            }
        }

        @media (max-width: 576px) {
            .areas-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .areas-title {
                font-size: 18px;
            }
        }

        .blog-hero {
            background: linear-gradient(90deg, rgba(2, 28, 54, 0.92) 45%, rgba(2, 28, 54, 0.6) 100%),
                url('img/blog.jpeg');
            background-size: fill;
            background-position: center;
            padding: 80px 60px;
            color: #fff;
            min-height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 36px;
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
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <div class="blog-hero">
        <h1 class="hero-title">Our Blog</h1>
        <div class="title-divider"></div>
    </div>
    <div class="page-wrapper">

        <section class="harsha-layout-section">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">

                <!-- Section Title (Harsha Style Layout) -->
                <div class="harsha-layout-title">
                    <h2>Latest Moving & Packing Tips</h2>
                    <p>Explore useful packing tips, home shifting guides, domestic moving advice, and expert insights from Annapurna Packers and Movers.</p>
                </div>

                <!-- 3-Column Box Grid Row -->
                <div class="harsha-card-grid">

                    <!-- BOX 1 -->
                    <div class="harsha-card-col">
                        <div class="harsha-style-card">
                            <div class="harsha-card-image">
                                <!-- Pulls Faster.jpg from your live server folder -->
                                <img src="img/Faster.jpg" alt="Annapurna House Shifting Guide">
                                <div class="harsha-style-date">
                                    <span>27</span>
                                    <small>Aug</small>
                                </div>
                            </div>
                            <div class="harsha-card-body">
                                <span class="harsha-card-cat">Home Shifting</span>
                                <h3>Top Tips for a Stress-Free House Shifting Experience</h3>
                                <p>Learn how professional local and domestic packers and movers can make your home relocation safe, organized, and completely hassle-free from packing to delivery.</p>
                                <a href="index.php#contact" class="harsha-card-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- BOX 2 -->
                    <div class="harsha-card-col">
                        <div class="harsha-style-card">
                            <div class="harsha-card-image">
                                <img src="img/Faster.jpg" alt="Annapurna Packing Tips">
                                <div class="harsha-style-date">
                                    <span>20</span>
                                    <small>Aug</small>
                                </div>
                            </div>
                            <div class="harsha-card-body">
                                <span class="harsha-card-cat">Packing Tips</span>
                                <h3>Essential Packing Materials for a Safe and Secured Move</h3>
                                <p>Discover practical packing tips using sturdy cardboard boxes and bubble wraps to protect fragile household items, electronics, and valuable belongings.</p>
                                <a href="index.php#contact" class="harsha-card-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- BOX 3 -->
                    <div class="harsha-card-col">
                        <div class="harsha-style-card">
                            <div class="harsha-card-image">
                                <img src="img/Faster.jpg" alt="Annapurna Relocation Guide">
                                <div class="harsha-style-date">
                                    <span>15</span>
                                    <small>Aug</small>
                                </div>
                            </div>
                            <div class="harsha-card-body">
                                <span class="harsha-card-cat">Relocation Guide</span>
                                <h3>How to Plan a Hassle-Free Domestic Home Relocation</h3>
                                <p>Planning a household move requires proper steps. Here is a complete guide to organizing your shifting schedule, safe loading, and secure transit options.</p>
                                <a href="index.php#contact" class="harsha-card-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="keyword-section">
            <div class="section-title">— POPULAR SEARCH KEYWORDS —</div>

            <div class="keyword-grid">
                <!-- Vizag Keywords -->
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Packers and Movers in Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Packers and Movers in Visakhapatnam</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Best Packers and Movers Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Home Shifting Services Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Office Relocation Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Local Shifting Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Household Shifting Vizag</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Furniture Relocation Vizag</a>

                <!-- Hyderabad Keywords -->
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Packers and Movers Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Best Packers and Movers Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Home Relocation Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Office Shifting Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Corporate Relocation Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Bike Transport Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Car Transport Hyderabad</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Warehouse Services Hyderabad</a>

                <!-- International Keywords -->
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Packers and Movers</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Relocation Services</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Household Moving</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Office Relocation</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Door to Door International Moving</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Overseas Relocation</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Cargo Services</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Sea Freight Services</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Air Freight Services</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Customs Clearance</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Car Shipping</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">International Bike Shipping</a>

                <!-- General Shifting Keywords -->
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Domestic Packers and Movers</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Household Relocation</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Office Moving Company</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Safe Packing Services</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Loading & Unloading</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Storage & Warehousing</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Professional Movers</a>
                <a href="https://annapurnapackersandmovers.com" class="keyword-btn">Affordable Relocation Services</a>
            </div>
        </div>
        <!-- --- Areas We Serve Section --- -->
        <div class="areas-section">
            <div class="areas-badge">📍 AREAS WE SERVE</div>
            <div class="areas-title">Annapurna Packers and Movers | Packers & Movers, Home, Office & Vehicle Relocation Services Across India</div>
            <p class="areas-desc">Annapurna Packers and Movers provides reliable household shifting, office relocation, vehicle transportation, warehouse storage, logistics, and international moving services across all states of India with professional packing, secure transportation, timely delivery, and complete customer satisfaction.</p>

            <div class="areas-grid">
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Andhra Pradesh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Arunachal Pradesh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Assam</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Bihar</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Chhattisgarh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Goa</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Gujarat</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Haryana</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Himachal Pradesh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Jharkhand</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Karnataka</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Kerala</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Madhya Pradesh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Maharashtra</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Manipur</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Meghalaya</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Mizoram</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Nagaland</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Odisha</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Punjab</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Rajasthan</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Sikkim</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Tamil Nadu</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Telangana</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Tripura</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Uttar Pradesh</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">Uttarakhand</span></div>
                <div class="state-card"><span class="truck-icon">🚚</span><span class="state-name">West Bengal</span></div>
            </div>
        </div>
        <?php include 'footer.php'; ?>