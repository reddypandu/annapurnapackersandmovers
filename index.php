<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Packers and Movers In Visakhapatnam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f4f7f6;
        }

        header {
            background-color: #004085;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;

            /* Service Section Styling */
            .services-container {
                display: flex;
                justify-content: center;
                gap: 24px;
                flex-wrap: wrap;
                padding: 40px 10px;
                background-color: #fcfdfe;
            }

            .service-card {
                background: #ffffff;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
                padding: 35px 25px;
                width: 320px;
                text-align: center;
                border: 1px solid #f1f5f9;
                transition: all 0.3s ease;
            }

            .service-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            }

            .icon-circle {
                width: 65px;
                height: 65px;
                background: linear-gradient(135deg, #ffb703, #fb8500);
                border-radius: 50%;
                margin: 0 auto 25px auto;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .icon-circle img {
                width: 32px;
                height: 32px;
                object-fit: contain;
            }

            .service-card h3 {
                color: #03045e;
                font-family: Arial, sans-serif;
                font-size: 22px;
                font-weight: 600;
                margin-bottom: 12px;
            }

            .orange-line {
                height: 2px;
                width: 35px;
                background-color: #fb8500;
                margin: 0 auto 18px auto;
            }

            .service-card p {
                color: #64748b;
                font-size: 14px;
                line-height: 1.7;
            }

            z-index: 100;
        }

        header .logo img {
            height: 60px;
            width: auto;
            display: block;
        }

        header nav ul {
            list-style: none;
            display: flex;
            align-items: center;
        }

        header nav ul li {
            margin-left: 20px;
            position: relative;
            padding: 10px 0;

            /* --- GALLERY SECTION STYLES --- */
            .gallery-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                padding: 20px 0;
            }

            .gallery-item img {
                width: 100%;
                height: 250px;
                object-fit: cover;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .gallery-item img:hover {
                transform: scale(1.04);
            }
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* డ్రాప్‌డౌన్ మెనూ */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #0c2240;
            min-width: 240px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            list-style: none;
            padding: 0;
            border-top: 3px solid #ffc107;
        }

        .dropdown-menu li {
            margin: 0;
            padding: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dropdown-menu li a {
            display: block;
            padding: 12px 20px;
            color: white;
            font-weight: normal;
            font-size: 15px;
            transition: background 0.3s;
        }

        .dropdown-menu li a:hover {
            background-color: #112e56;
            color: #ffc107;
        }

        header nav ul li:hover .dropdown-menu {
            display: block;
        }

        .hero {
            background: linear-gradient(rgba(0, 34, 68, 0.65), rgba(0, 51, 102, 0.75)), url('img/annapurna-yard.jpg');
            background-size: cover;
            background-position: center;

            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background-color: #ffc107;
            color: #000;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            border: none;
        }

        .main-content {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
            text-align: center;
        }

        .main-content .icon-box {
            font-size: 50px;
            margin-bottom: 10px;
            color: #004085;
        }

        .main-content h2 {
            font-size: 32px;
            color: #004085;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .main-content p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }

        .city-badge-box {
            background-color: #004085;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            margin: 25px 0;
            display: inline-block;
            text-align: center;
        }

        #services {
            padding: 60px 20px;
            text-align: center;
            background-color: #fff;
        }

        #services h2 {
            color: #004085;
            margin-bottom: 40px;
            font-size: 32px;
        }

        /* 🌟 ఒకే వరుసలో 3 బాక్సులు సమానంగా సర్దే గ్రిడ్ లేఅవుట్ 🌟 */
        .service-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .box {
            background: #fff;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            text-align: left;
        }

        .box h3 {
            color: #004085;
            margin-bottom: 15px;
            border-left: 4px solid #ffc107;
            padding-left: 10px;
        }

        /* మొబైల్ స్క్రీన్స్ కోసం రెస్పాన్సివ్ డిజైన్ */
        @media (max-width: 900px) {
            .service-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .service-container {
                grid-template-columns: 1fr;
            }
        }

        #quote-form {
            padding: 50px 20px;
            background-color: #f4f7f6;
            text-align: center;
        }

        #quote-form h2 {
            color: #004085;
            margin-bottom: 20px;
        }

        .enquiry-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .enquiry-form input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #contact {
            background-color: #004085;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        #contact h2 {
            margin-bottom: 20px;
        }

        #contact p {
            margin-bottom: 10px;
            font-size: 18px;

            footer {
                background-color: #111;
                color: #ccc;
                text-align: center;
                padding: 20px;
                font-size: 14px;
            }

            .whatsapp-float {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #25d366;
                color: white;
                border-radius: 50px;
                padding: 10px 20px;
                display: flex;
                align-items: center;
                gap: 10px;
                text-decoration: none;
                font-weight: bold;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
                z-index: 1000;
            }

            .whatsapp-float:hover {
                background-color: #128c7e;
            }

            /* High Converting Premium Glass Quote Form */
            .premium-quote-box {
                background: rgba(10, 25, 47, 0.75);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 2px solid rgba(255, 255, 255, 0.15);
                padding: 35px 25px;
                border-radius: 12px;
                max-width: 520px;
                width: 100%;
                margin: 10px auto;
                font-family: 'Segoe UI', Roboto, sans-serif;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
                box-sizing: border-box;
                position: relative;
            }

            .premium-quote-box h2 {
                color: #ff3333;
                text-align: center;
                font-size: 26px;
                font-weight: 800;
                margin: 0 0 5px 0;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            }

            .premium-quote-box p {
                color: #ffffff;
                text-align: center;
                font-size: 14px;
                margin: 0 0 20px 0;
                font-weight: 500;
            }

            .form-grid-row {
                display: flex;
                gap: 12px;
                margin-bottom: 12px;
            }

            .form-input-block {
                width: 100%;
                margin-bottom: 12px;
            }

            .premium-quote-box input,
            .premium-quote-box select,
            .premium-quote-box textarea {
                width: 100%;
                padding: 13px;
                border: 1px solid rgba(255, 255, 255, 0.3);
                border-radius: 5px;
                background: #ffffff;
                color: #222222;
                font-size: 14px;
                font-weight: 500;
                box-sizing: border-box;
            }

            .btn-premium-submit {
                width: 100%;
                background: linear-gradient(135deg, #ff0000 0%, #cc0000 100%);
                color: #ffffff;
                border: none;
                padding: 15px;
                font-size: 16px;
                font-weight: bold;
                text-transform: uppercase;
                cursor: pointer;
                border-radius: 5px;
                margin-top: 5px;
                box-shadow: 0 4px 15px rgba(204, 0, 0, 0.4);
            }

            .live-counter-badge {
                background: rgba(46, 125, 50, 0.85);
                color: #ffffff;
                font-size: 12px;
                padding: 6px 12px;
                border-radius: 20px;
                display: inline-flex;
                align-items: center;
                gap: 6px;
                margin-bottom: 15px;
                font-weight: bold;
            }

            .live-dot {
                width: 8px;
                height: 8px;
                background: #00ff00;
                border-radius: 50%;
                display: inline-block;
                animation: blinker 1.5s linear infinite;
            }

            /* Achievements Section Styles */
            /* Achievements Section Styles - Option 1 */
            .achievements-container {
                background-color: #ffffff;
                /* వైట్ బ్యాక్‌గ్రౌండ్ */
                color: #333333;
                /* డార్క్ గ్రే టెక్స్ట్ */
                padding: 60px 20px;
                text-align: center;
                width: 100%;
            }

            .achievements-sub-title {
                color: #fca311;
                /* ఆరెంజ్ సబ్ టైటిల్ */
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .achievements-main-title {
                font-size: 36px;
                font-weight: 700;
                margin-bottom: 15px;
                color: #004085;
                /* మీ వెబ్‌సైట్ బ్లూ కలర్ */
            }

            .achievements-description {
                font-size: 14px;
                color: #666666;
                max-width: 800px;
                margin: 0 auto 40px auto;
                line-height: 1.6;
            }

            .achievements-stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 20px;
                max-width: 1200px;
                margin: 0 auto;
            }

            .achievements-stat-card {
                background-color: #003366;
                border-top: 5px solid #fca311;
                /* ఆరెంజ్ టాప్ బోర్డర్ */
                border-radius: 12px;
                padding: 30px 20px;
                text-align: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .achievements-stat-card:hover {
                transform: translateY(-5px);
            }

            .achievements-stat-number {
                font-size: 42px;
                font-weight: bold;
                margin-bottom: 10px;
                color: #ffffff;
                /* వైట్ నంబర్స్ */
            }

            .achievements-stat-label {
                font-size: 16px;
                color: #ffffff;
                /* వైట్ లేబుల్స్ */
                font-weight: 600;
                line-height: 1.4;
            }

            .site-footer {
                background-color: #003366 !important;
                color: #ffffff !important;
                padding: 40px 20px 20px 20px !important;
                text-align: center !important;
                width: 100% !important;
                margin-top: 40px !important;
                display: block !important;
            }

            .footer-content h3 {
                font-size: 24px !important;
                margin-bottom: 10px !important;
                color: #b10507 !important;
            }

            .footer-proprietor {
                font-size: 16px !important;
                margin-bottom: 15px !important;
                color: #ffffff !important;
            }

            .footer-address,
            .footer-contact {
                font-size: 15px !important;
                line-height: 1.8 !important;
                margin-bottom: 15px !important;
                color: #e0e0e0 !important;
            }

            .footer-bottom {
                margin-top: 30px !important;
                padding-top: 15px !important;
                border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
                font-size: 13px !important;
                color: #b0b0b0 !important;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

            /* Achievements Section Custom Design */
            .achievements-container {
                background-color: #0c1a40;
                padding: 80px 20px;
                text-align: center;
                font-family: 'Segoe UI', Roboto, Arial, sans-serif;
                clear: both;
                width: 100%;
                display: block;
                box-sizing: border-box;
            }

            .achievements-title-sub {
                color: #ffaa00;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                margin: 0 0 15px 0;
                font-size: 16px;
                font-weight: 700;
            }

            .achievements-title-main {
                color: #ffffff;
                margin: 0 0 20px 0;
                font-size: 42px;
                font-weight: 800;
                letter-spacing: 0.5px;
            }

            .achievements-desc {
                color: #a0aec0;
                margin: 0 0 60px 0;
                font-size: 18px;
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.7;
            }

            .achievements-grid {
                display: flex;
                justify-content: center;
                gap: 30px;
                flex-wrap: wrap;
                max-width: 1250px;
                margin: 0 auto;
            }

            .achievement-card {
                background-color: #0f2c7a;
                border-top: 6px solid #ffaa00;
                border-radius: 14px;
                padding: 50px 30px;
                width: 260px;
                color: white;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
                box-sizing: border-box;
                transition: transform 0.3s ease;
            }

            .achievement-card:hover {
                transform: translateY(-8px);
            }

            .achievement-card h3 {
                font-size: 48px;
                margin: 0 0 15px 0;
                font-weight: 800;
                color: #ffffff;
            }

            .achievement-card p {
                font-size: 18px;
                margin: 0;
                color: #e2e8f0;
                line-height: 1.5;
                font-weight: 600;
            }

            .testimonials-section {
                background-color: #003366 !important;
                padding: 60px 20px !important;
                width: 100% !important;
                display: block !important;
            }

            .testimonials-container {
                max-width: 1200px !important;
                margin: 0 auto !important;
                display: flex !important;
                flex-wrap: wrap !important;
                gap: 40px !important;
                align-items: center !important;
            }

            .testimonials-left {
                flex: 1 !important;
                min-width: 300px !important;
                text-align: left !important;
            }

            .testimonials-tag {
                color: #b10507 !important;
                text-transform: uppercase !important;
                font-size: 14px !important;
                font-weight: bold !important;
                letter-spacing: 2px !important;
                display: block !important;
                margin-bottom: 15px !important;
            }

            .testimonials-title {
                color: #ffffff !important;
                font-size: 36px !important;
                font-weight: bold !important;
                line-height: 1.3 !important;
                margin-bottom: 20px !important;
            }

            .testimonials-subtitle {
                color: #e0e0e0 !important;
                font-size: 15px !important;
                line-height: 1.6 !important;
            }

            .testimonials-right {
                flex: 2 !important;
                display: flex !important;
                flex-wrap: wrap !important;
                gap: 20px !important;
                min-width: 300px !important;
            }

            .testimonial-card {
                background-color: #ffffff !important;
                padding: 30px !important;
                border-radius: 8px !important;
                flex: 1 !important;
                min-width: 280px !important;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
                position: relative !important;
                text-align: left !important;
            }

            .quote-icon {
                color: #b10507 !important;
                font-size: 60px !important;
                font-family: sans-serif !important;
                line-height: 1 !important;
                display: block !important;
                margin-bottom: -10px !important;
            }

            .testimonial-text {
                color: #555555 !important;
                font-size: 14px !important;
                line-height: 1.6 !important;
                margin-bottom: 20px !important;
            }

            .testimonial-user {
                display: flex !important;
                align-items: center !important;
                gap: 15px !important;
                border-top: 1px solid #eeeeee !important;
                padding-top: 15px !important;
            }

            .user-avatar {
                font-size: 30px !important;
                background: #e6f0fa !important;
                padding: 5px !important;
                border-radius: 50% !important;
                width: 45px !important;
                height: 45px !important;
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
            }

            .user-info h4 {
                color: #333333 !important;
                margin: 0 0 3px 0 !important;
                font-size: 16px !important;
                font-weight: bold !important;
            }

            .user-info span {
                color: #b10507 !important;
                font-size: 13px !important;
            }

            @media (max-width: 768px) {
                .testimonials-container {
                    flex-direction: column !important;
                }

                .testimonials-right {
                    flex-direction: column !important;
                }
            }

            /* --- Annapurna Packers... */
            .ap-contact-container {
                max-width: 950px;
                margin: 40px auto;
                padding: 35px;
                background-color: #ffffff;
                border-radius: 12px;
                box-shadow: 0 4px 25px rgba(0, 0, 0, 0.06);
                border-left: 6px solid #ff6f00;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                display: flex;
                gap: 40px;
                text-align: left;
            }

            .ap-brand-panel {
                flex: 0 0 300px;
                border-right: 1px solid #eef2f6;
                padding-right: 25px;
            }

            .ap-logo-img {
                max-width: 220px;
                height: auto;
                margin-bottom: 15px;
                display: block;
            }

            .ap-brand-text {
                font-size: 14px;
                color: #555555;
                line-height: 1.6;
                margin: 0;
            }

            .ap-info-panel {
                flex: 1;
            }

            .ap-title-row {
                font-size: 17px;
                color: #0b2240;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
            }

            .ap-main-icon {
                font-size: 22px;
                margin-right: 12px;
            }

            .ap-detail-item {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                font-size: 15px;
                color: #333333;
            }

            .ap-detail-item.align-start {
                align-items: flex-start;
            }

            .ap-detail-item:last-child {
                margin-bottom: 0;
            }

            .ap-sub-icon {
                font-size: 18px;
                margin-right: 12px;
                width: 20px;
                text-align: center;
            }

            .ap-link {
                color: #ff6f00;
                text-decoration: none;
                font-weight: 600;
                transition: color 0.2s;
            }

            .ap-link:hover {
                text-decoration: underline;
                color: #0b2240;
            }

            .ap-address-block strong {
                color: #0b2240;
            }

            .ap-address-block p {
                margin: 4px 0 0 0;
                color: #555555;
                line-height: 1.5;
            }

            @media (max-width: 768px) {
                .ap-contact-container {
                    flex-direction: column;
                    gap: 25px;
                    margin: 20px 15px;
                    padding: 25px;
                }

                .ap-brand-panel {
                    flex: 0 0 auto;
                    border-right: none;
                    border-bottom: 1px solid #eef2f6;
                    padding-right: 0;
                    padding-bottom: 20px;
                }

                .ap-logo-img {
                    max-width: 180px;
                }
            }

            /* --- OUR TEAM SECTION STYLES --- */
            .our-team-section {
                text-align: center;
                padding: 60px 20px;
                background-color: #f9f9f9;
            }

            .our-team-section h2 {
                color: #00bcd4;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 1.5px;
                margin-bottom: 8px;
            }

            .our-team-section .team-subtitle {
                font-size: 28px;
                font-weight: 700;
                color: #111111;
                margin-top: 0;
                margin-bottom: 30px;
            }

            .team-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .team-image-wrapper {
                max-width: 320px;
                width: 100%;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
                margin: 0 auto 30px auto;
            }

            .team-image-wrapper img {
                width: 100%;
                height: auto;
                display: block;
            }

            /* --- OWNER OVERLAY BANNER STYLES --- */
            .banner-owner-overlay {
                position: relative;
                right: 20px;
                top: 180px;
                /* Adjusts the height on the banner image */
                background: rgba(255, 255, 255, 0.95);
                padding: 12px;
                border-radius: 8px;
                max-width: 310px;
                display: flex;
                align-items: center;
                gap: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
                z-index: 999;
            }

            .banner-owner-overlay img {
                width: 75px;
                height: auto;
                border-radius: 6px;
                display: block;
                flex-shrink: 0;
            }

            .banner-owner-text {
                text-align: left;
            }

            .banner-owner-text h5 {
                color: #ffaa00;
                font-size: 10px;
                text-transform: uppercase;
                margin: 0 0 2px 0;
                font-weight: 700;
                letter-spacing: 0.5px;
            }

            .banner-owner-text h4 {
                color: #00bcd4;
                font-size: 13px;
                margin: 0 0 4px 0;
                font-weight: 700;
                letter-spacing: 0.5px;
            }

            .banner-owner-text p {
                color: #444444;
                font-size: 11.5px;
                line-height: 1.4;
                margin: 0;
                font-weight: 500;
            }

            /* Responsive hidden on small mobile views to keep banner clean */
            @media (max-width: 576px) {
                .banner-owner-overlay {
                    display: none;
                }
            }
    </style>
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.04);
        }

        /* పాపప్ మోడల్ డిజైన్ (స్క్రీన్ బ్లాక్ గా మారి ఫోటో పెద్దగా కనిపించడానికి) */
        .popup-modal {
            display: none;
            position: fixed;
            z-index: 99999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .popup-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
            border-radius: 4px;
            animation: zoomIn 0.3s;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7)
            }

            to {
                transform: scale(1)
            }
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* పాపప్ మోడల్ డిజైన్ (స్క్రీన్ బ్లాక్ గా మారి ఫోటో పెద్దగా కనిపించడానికి) */
        .popup-modal {
            display: none;
            position: fixed;
            z-index: 99999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .popup-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
            border-radius: 4px;
            animation: zoomIn 0.3s;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7)
            }

            to {
                transform: scale(1)
            }
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        <div class="services-container">< !-- Card 1 --><div class="service-card"><div class="icon-circle">src="img/annapurna-house-shifting-loading.jpg"
        </div><h3>Home Relocation</h3><div class="orange-line"></div><p>household shifting with premium packing,
        secure loading and doorstep delivery.</p></div>< !-- Card 2 --><div class="service-card"><div class="icon-circle">src="img/office.jpg"
        </div><h3>Office Relocation</h3><div class="orange-line"></div><p>Professional office relocation with minimum business interruption and secure handling.</p></div>< !-- Card 3 --><div class="service-card"><div class="icon-circle">src="img/annapurna-car-shifting-loading.jpg"
        </div><h3>Vehicle Transportation</h3><div class="orange-line"></div><p>Safe transportation of cars and bikes using specialized carrier vehicles.</p></div></div>
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <section id="home" class="slider-section position-relative" style="display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 36px !important; background: linear-gradient(rgba(12, 26, 64, 0.65), rgba(12, 26, 64, 0.65)), url('img/truckprofile.png?v=6') no-repeat center center / cover !important; padding: 120px 40px !important; min-height: 500px !important; width: 100% !important; box-sizing: border-box !important; flex-wrap: wrap !important; clear: both !important; z-index: 1 !important;">
        <!-- Left Side: Trust Text & Quick Action Buttons -->
        <!-- Automatic Popup Callback Form by AI -->
        <div id="callbackPopup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 999999; justify-content: center; align-items: center; padding: 20px; box-sizing: border-box; font-family: sans-serif;">
            <div style="background: #ffffff; padding: 35px 25px; border-radius: 20px; max-width: 460px; width: 100%; box-sizing: border-box; position: relative; text-align: center; box-shadow: 0px 15px 35px rgba(0,0,0,0.3);">

                <!-- Close Button (X) -->
                <button type="button" onclick="document.getElementById('callbackPopup').style.display='none';" style="position: absolute; top: 15px; right: 20px; background: none; border: none; font-size: 24px; cursor: pointer !important; z-index: 999999 !important; font-weight: bold; color: #666; padding: 0; outline: none;">&times;</button>

                <!-- Truck Icon Container -->
                <div style="background: #fff5ed; width: 55px; height: 55px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                    <span style="font-size: 26px;">🚚</span>
                </div>

                <!-- Headings -->
                <h3 style="margin: 0 0 8px; color: #0d1e3d; font-size: 24px; font-weight: 700;">Get Free Moving Quote</h3>
                <p style="margin: 0 0 25px; color: #666; font-size: 14px;">Fill the form & get instant estimate</p>

                <!-- Form Starts -->
                <form onsubmit="sendDetailedPopupToWhatsApp(event)" style="display: flex; flex-direction: column; gap: 15px; text-align: left;">

                    <!-- Full Name Input -->
                    <input type="text" id="pop_detailed_name" placeholder="Your Full Name *" required style="width: 100%; padding: 13px 15px; border: 1px solid #e2e8f0; border-radius: 8px; background: #fbfbfd; font-size: 14px; outline: none; box-sizing: border-box; color: #333;">

                    <!-- Phone Number Input -->
                    <input type="tel" id="pop_detailed_phone" placeholder="Phone Number *" required style="width: 100%; padding: 13px 15px; border: 1px solid #e2e8f0; border-radius: 8px; background: #fbfbfd; font-size: 14px; outline: none; box-sizing: border-box; color: #333;">

                    <!-- Cities Row (From & To) -->
                    <div style="display: flex; gap: 12px; width: 100%;">
                        <input type="text" id="pop_detailed_from" placeholder="From City *" required style="width: 50%; padding: 13px 15px; border: 1px solid #e2e8f0; border-radius: 8px; background: #fbfbfd; font-size: 14px; outline: none; box-sizing: border-box; color: #333;">
                        <input type="text" id="pop_detailed_to" placeholder="To City *" required style="width: 50%; padding: 13px 15px; border: 1px solid #e2e8f0; border-radius: 8px; background: #fbfbfd; font-size: 14px; outline: none; box-sizing: border-box; color: #333;">
                    </div>

                    <!-- Submit Button (Orange Color) -->
                    <button type="submit" style="width: 100%; background: #ff6a00; color: white; border: none; padding: 14px; border-radius: 8px; font-size: 16px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0px 4px 10px rgba(255,106,0,0.3); margin-top: 5px; outline: none;">
                        Get Free Quote
                    </button>

                    <!-- Bottom Call Note -->
                    <div style="text-align: center; margin-top: 10px;">
                        <p style="margin: 0 0 8px; color: #777; font-size: 13px;">Or call us directly</p>
                        <a href="tel:+919966031259" style="color: #ff6a00; font-size: 20px; font-weight: bold; text-decoration: none; display: inline-flex; align-flex: center; gap: 8px; font-family: sans-serif;">📞 +91 99660 31259</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Popup Activation & WhatsApp Script -->
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(function() {
                    document.getElementById('callbackPopup').style.display = 'flex';
                }, 2000);
            });

            function openQuotePopup(event) {
                if (event) {
                    event.preventDefault();
                }
                document.getElementById('callbackPopup').style.display = 'flex';
                document.getElementById('pop_detailed_name').focus();
            }

            function closePopup() {
                document.getElementById('callbackPopup').style.display = 'none';
            }

            function sendDetailedPopupToWhatsApp(event) {
                event.preventDefault();
                var name = document.getElementById('pop_detailed_name').value;
                var phone = document.getElementById('pop_detailed_phone').value;
                var fromCity = document.getElementById('pop_detailed_from').value;
                var toCity = document.getElementById('pop_detailed_to').value;

                var message = "*Annapurna Packers - Popup Quote Request*\n\n" +
                    "*Name:* " + name + "\n" +
                    "*Phone:* " + phone + "\n" +
                    "*From City:* " + fromCity + "\n" +
                    "*To City:* " + toCity;

                var whatsappUrl = "https://wa.me/918333031259?text=" + encodeURIComponent(message);
                window.open(whatsappUrl, '_blank');
                closePopup();
            }
        </script>
        </div>
        <div style="max-width: 550px; color: white; text-align: left;">
            <h1 style="font-size: 44px; color: #ffffff; font-weight: 800; margin-top: 15px; line-height: 1.2; text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">Best Packers and Movers In Anakappali,Visakhapatnam</h1>

            <div style="margin-top: 30px; display: flex; gap: 15px; flex-wrap: wrap;">
            </div>
        </div>
        </div>
    </section>
    <div style="clear: both; width: 100%; display: block;"></div>
    <!-- START OF OUR TEAM SECTION -->
    <!-- New Professional Services Section with Image Start -->
    <section class="premium-services-section" style="padding: 60px 0; background-color: #ffffff; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; clear: both; display: block;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="font-size: 32px; color: #0d3b66; margin: 0 0 10px 0; font-weight: 700; text-transform: uppercase;">Our Professional Services</h2>
                <p style="font-size: 16px; color: #666; margin: 0;">Top-rated Packing and Moving solutions tailored to your relocation needs</p>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center;">

                <!-- Left Side: Services List (60% Width) -->
                <div style="flex: 1; min-width: 300px; flex-basis: 60%;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">📦</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Packing and Moving</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">💪</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Loading and Unloading</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🏢</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Residential Relocation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🏠</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Home Relocation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">💼</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Office Relocation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🚗</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Car Transportation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🏍️</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Bike Transportation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">✈️</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">International Transportation</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🏭</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Warehousing and Storage</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🛡️</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Transport Insurance</span>
                        </div>

                        <div style="display: flex; align-items: center; gap: 12px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <span style="font-size: 24px;">🏗️</span>
                            <span style="font-size: 16px; font-weight: 600; color: #333;">Heavy Machinery Shifting</span>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Team Image Box (40% Width) -->
                <div style="flex: 1; min-width: 300px; flex-basis: 35%; text-align: center;">
                    <img src="teams.png" alt="Our Packers and Movers Team" style="width: 100%; max-width: 400px; height: auto; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); border: 3px solid #0d3b66;">
                </div>

            </div>

        </div>
    </section>
    <!-- New Professional Services Section with Image End -->

    <div style="background: linear-gradient(rgba(12, 26, 64, 0.95), rgba(12, 26, 64, 0.98)); padding: 60px 20px; text-align: center; color: #ffffff; font-family: 'Segoe UI', Roboto, sans-serif; display: block; clear: both; box-sizing: border-box; width: 100%; margin-top: 30px; border-radius: 4px;">

        <!-- Small Orange Text -->
        <p style="color: #ffaa00; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 12px;">
            🎯 TRUSTED INTERNATIONAL RELOCATION SERVICES WORLDWIDE
        </p>

        <!-- Main Big Heading -->
        <h1 style="font-size: 34px; font-weight: 800; margin: 0 auto 18px auto; max-width: 900px; line-height: 1.4; color: #ffffff;">
            Best Professional <span style="color: #ffaa00;">Annapurna Packers & Movers</span> <br> for Global Moving & Relocation Services
        </h1>

        <!-- Subtitle Paragraph -->
        <p style="font-size: 14.5px; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; line-height: 1.6;">
            Annapurna Packers & Movers provides reliable International Packers and Movers services with complete global relocation solutions. We specialize in international moving, expert packing, overseas household shifting, office relocation, international shipping customs support, and secure door-to-door delivery for a safe and hassle-free worldwide moving experience.
        </p>

        <!-- Action Buttons -->
        <div style="display: flex; gap: 15px; justify-content: center; align-items: center; flex-wrap: wrap;">
            <!-- Button 1: Get Free Quote -->
            <a href="#callbackPopup" onclick="openQuotePopup(event)" style="background: linear-gradient(135deg, #ff6f00, #e65c00); color: #ffffff; padding: 11px 26px; font-size: 14.5px; font-weight: 700; text-decoration: none; border-radius: 50px; box-shadow: 0 4px 12px rgba(230, 92, 0, 0.2); display: inline-block;">
                Get Free Quote
            </a>

            <!-- Button 2: Call Now -->
            <a href="tel:+919966031259" style="background: linear-gradient(135deg, #ff6f00, #e65c00); color: #ffffff; padding: 11px 26px; font-size: 14.5px; font-weight: 700; text-decoration: none; border-radius: 50px; box-shadow: 0 4px 12px rgba(230, 92, 0, 0.2); display: inline-block;">
                Call Now: +91 9966031259
            </a>
        </div>
        <!-- ========================================== -->
    </div>
    <p style="color: #666666; font-size: 14px; margin-top: 0; font-weight: 500;">Safe • Reliable • On Time</p>
    </div>
    <!-- International Services Section with Original Team Photo by AI -->
    <section style="background: #ffffff; padding: 50px 20px; font-family: sans-serif; width: 100%; box-sizing: border-box; clear: both; position: relative; z-index: 5;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 40px;">

            <!-- Left Side: Content & Service List -->
            <div style="flex: 1; min-width: 300px; max-width: 600px;">
                <span style="color: #ff6a00; font-size: 13px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">WELCOME TO ANNAPURNA PACKERS AND MOVERS</span>
                <h2 style="font-size: 34px; font-weight: 800; color: #0d1e3d; margin: 0 0 20px; line-height: 1.2;">International Packers and Movers – <span style="color: #ff6a00;">Worldwide Moving & Relocation Services</span></h2>
                <p style="font-size: 15px; color: #555; line-height: 1.6; margin-bottom: 30px;">Annapurna Packers and Movers is one of the trusted International Packers and Movers offering secure overseas relocation services across the globe. We specialize in international household moving, office relocation, export-quality packing, customs clearance, freight forwarding, and door-to-door delivery. Our experienced relocation team ensures your belongings reach their international destination safely, securely, and on-time.</p>

                <!-- Service Buttons List -->
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="background: #ffffff; padding: 15px 20px; border-radius: 8px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; border: 1px solid #eaeaea;">
                        <div style="background: #fff5ed; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ff6a00; font-size: 20px;">🏠</div>
                        <span style="font-size: 15px; font-weight: bold; color: #0d1e3d;">Worldwide Household Relocation</span>
                    </div>
                    <div style="background: #ffffff; padding: 15px 20px; border-radius: 8px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; border: 1px solid #eaeaea;">
                        <div style="background: #fff5ed; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ff6a00; font-size: 20px;">✈️</div>
                        <span style="font-size: 15px; font-weight: bold; color: #0d1e3d;">International Air & Sea Freight</span>
                    </div>
                    <div style="background: #ffffff; padding: 15px 20px; border-radius: 8px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; border: 1px solid #eaeaea;">
                        <div style="background: #fff5ed; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ff6a00; font-size: 20px;">📄</div>
                        <span style="font-size: 15px; font-weight: bold; color: #0d1e3d;">Customs Clearance & Documentation</span>
                    </div>
                    <div style="background: #ffffff; padding: 15px 20px; border-radius: 8px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; border: 1px solid #eaeaea;">
                        <div style="background: #fff5ed; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ff6a00; font-size: 20px;">🚚</div>
                        <span style="font-size: 15px; font-weight: bold; color: #0d1e3d;">Door-to-Door Global Moving Services</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Clean Original Team Photo (No Missing Badges) -->
            <div style="flex: 1; min-width: 300px; max-width: 500px; display: flex; flex-direction: column; align-items: center; position: relative;">
                <div style="width: 100%; border-radius: 12px; overflow: hidden; box-shadow: 0px 10px 30px rgba(0,0,0,0.15); background: #fbfbfd; padding: 10px; box-sizing: border-box; border: 1px solid #eaeaea;">
                    <h4 style="margin: 5px 0 15px; color: #0d1e3d; font-size: 18px; font-weight: 700; text-align: center; letter-spacing: 0.5px;">OUR PROFESSIONAL TEAM</h4>
                    <p style="margin: 0 0 15px; color: #666; font-size: 14px; text-align: center;">Experienced Packers and Movers Ready to Help You</p>
                    <img src="img/international-team.jpg" alt="Annapurna Packers Original Team" style="width: 100%; height: auto; display: block; border-radius: 6px;">
                </div>
            </div>

        </div>
    </section>
    <!-- END OF OUR TEAM SECTION -->
    <!-- Achievements Section Start -->
    <div style="background-color: #0c1a40; padding: 60px 20px; text-align: center; font-family: 'Segoe UI', Roboto, Arial, sans-serif; clear: both; width: 100%; display: block; box-sizing: border-box;">

        <!-- Main Headings -->
        <h5 style="color: #ffaa00; text-transform: uppercase; letter-spacing: 2px; margin: 0 0 10px 0; font-size: 14px; font-weight: 600;">S</h5>
        <h2 style="color: #ffffff; margin: 0 0 15px 0; font-size: 34px; font-weight: 700; letter-spacing: 0.5px;">Numbers That Speak For Our Success</h2>
        <p style="color: #a0aec0; margin: 0 0 45px 0; font-size: 16px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">Trusted by thousands of families and businesses across India for reliable relocation and logistics services.</p>

        <!-- Responsive Flex Container for Cards -->
        <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; max-width: 1140px; margin: 0 auto; width: 100%; box-sizing: border-box;">

            <!-- Card 1: Deliveries -->
            <a href="aboutus.php" style="text-decoration: none; display: block; flex: 1; min-width: 220px; max-width: 250px; box-sizing: border-box;">
                <div style="background-color: #0f2c7a; border-top: 5px solid #ffaa00; border-radius: 12px; padding: 40px 15px; width: 100%; color: white; box-shadow: 0 10px 25px rgba(0,0,0,0.3); box-sizing: border-box; text-align: center; cursor: pointer;">
                    <h3 class="counter" data-target="2500" style="font-size: 38px; margin: 0 0 12px 0; font-weight: 700; color: #ffffff;">0</h3>
                    <p style="font-size: 15px; margin: 0; color: #e2e8f0; line-height: 1.5; font-weight: 500;">Worldwide<br>Deliveries</p>
                </div>
            </a>

            <!-- Card 2: Relocations -->
            <a href="aboutus.php" style="text-decoration: none; display: block; flex: 1; min-width: 220px; max-width: 250px; box-sizing: border-box;">
                <div style="background-color: #0f2c7a; border-top: 5px solid #ffaa00; border-radius: 12px; padding: 40px 15px; width: 100%; color: white; box-shadow: 0 10px 25px rgba(0,0,0,0.3); box-sizing: border-box; text-align: center; cursor: pointer;">
                    <h3 class="counter" data-target="1500" style="font-size: 38px; margin: 0 0 12px 0; font-weight: 700; color: #ffffff;">0</h3>
                    <p style="font-size: 15px; margin: 0; color: #e2e8f0; line-height: 1.5; font-weight: 500;">Successful<br>Relocations</p>
                </div>
            </a>

            <!-- Card 3: Corporate Clients -->
            <a href="aboutus.php" style="text-decoration: none; display: block; flex: 1; min-width: 220px; max-width: 250px; box-sizing: border-box;">
                <div style="background-color: #0f2c7a; border-top: 5px solid #ffaa00; border-radius: 12px; padding: 40px 15px; width: 100%; color: white; box-shadow: 0 10px 25px rgba(0,0,0,0.3); box-sizing: border-box; text-align: center; cursor: pointer;">
                    <h3 class="counter" data-target="1280" style="font-size: 38px; margin: 0 0 12px 0; font-weight: 700; color: #ffffff;">0</h3>
                    <p style="font-size: 15px; margin: 0; color: #e2e8f0; line-height: 1.5; font-weight: 500;">Corporate<br>Clients</p>
                </div>
            </a>

            <!-- Card 4: Happy Customers -->
            <a href="aboutus.php" style="text-decoration: none; display: block; flex: 1; min-width: 220px; max-width: 250px; box-sizing: border-box;">
                <div style="background-color: #0f2c7a; border-top: 5px solid #ffaa00; border-radius: 12px; padding: 40px 15px; width: 100%; color: white; box-shadow: 0 10px 25px rgba(0,0,0,0.3); box-sizing: border-box; text-align: center; cursor: pointer;">
                    <h3 class="counter" data-target="1000" style="font-size: 38px; margin: 0 0 12px 0; font-weight: 700; color: #ffffff;">0</h3>
                    <p style="font-size: 15px; margin: 0; color: #e2e8f0; line-height: 1.5; font-weight: 500;">Happy<br>Customers</p>
                </div>
            </a>

        </div>
        <!-- End Safe FAQ Section -->
        <!-- ========================================== -->
        <!-- FULL ANNAPURNA FAQ SECTION START           -->
        <!-- ========================================== -->
        <!-- Our Clients Section Added by AI -->
        <section style="background: #ffffff; padding: 40px 20px; font-family: sans-serif; width: 100%; box-sizing: border-box; clear: both; position: relative; z-index: 5;">
            <div style="max-width: 1200px; margin: 0 auto;">

                <!-- Section Heading -->
                <div style="border-bottom: 2px solid #eaeaea; padding-bottom: 10px; margin-bottom: 35px; text-align: left;">
                    <h2 style="font-size: 26px; font-weight: 700; color: #0d1e3d; margin: 0; text-transform: none;">Our Clients</h2>
                </div>

                <!-- Clients Logo Row -->
                <!-- లోగో స్లైడర్ సెక్షన్ -->
                <div style="overflow: hidden; padding: 30px 0; background: #ffffff; width: 100%;">
                    <div style="display: flex; width: max-content; gap: 60px; animation: scrollLogosAnnapurna 25s linear infinite;">
                        <!-- 1st Set of Logos -->
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/hpcl.png" alt="HPCL" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/bhel.png" alt="BHEL" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/lt.png" alt="L&T" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/pfizer.png" alt="Pfizer" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>

                        <!-- 2nd Set (Continuous Loop కోసం ఇవే మళ్లీ తిరుగుతాయి) -->
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/hpcl.png" alt="HPCL" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/bhel.png" alt="BHEL" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/lt.png" alt="L&T" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                        <div style="width: 160px; display: flex; justify-content: center; align-items: center;"><img src="img/pfizer.png" alt="Pfizer" style="max-width: 100%; height: auto; max-height: 70px; object-fit: contain;"></div>
                    </div>
                </div>
            </div>

            <!-- అనిమేషన్ కంటిన్యూగా రన్ అవ్వడానికి స్టైల్ -->
            <style>
                @keyframes scrollLogosAnnapurna {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(calc(-220px * 4));
                    }

                    /* గ్యాప్‌తో కలిపి పర్ఫెక్ట్ లూప్ అవుతుంది */
                }
            </style>
        </section>
        <section id="faq-section" style="padding: 60px 20px; font-family: 'Segoe UI', Roboto, sans-serif; background-color: #f8fafc; text-align: center; clear: both; position: relative; z-index: 10;">

            <span style="color: #ffaa00; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">— FREQUENTLY ASKED QUESTIONS —</span>
            <h2 style="color: #0c1c4e; font-size: 36px; font-weight: 700; margin: 15px 0 20px 0;">International Packers and Movers <span style="color: #ffaa00;">FAQs</span></h2>
            <p style="color: #64748b; max-width: 900px; margin: 0 auto 40px auto; font-size: 16px; line-height: 1.6; text-align: center;">
                Find answers to the most frequently asked questions about international relocation services, overseas household moving, export packing, custom clearance, air and sea freight, and worldwide door-to-door moving solutions offered by Annapurna Packers and Movers.
            </p>

            <!-- FAQ Accordion Container -->
            <div style="max-width: 900px; margin: 0 auto; text-align: left;">

                <!-- Question 1 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">What international relocation services do you provide?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            We provide complete international moving solutions including export quality packing, custom clearance, air & sea freight shipping, documentation support, secure warehousing, and door-to-door delivery across worldwide destinations.
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">Which countries do you provide international moving services to?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            We provide relocation services to all major countries worldwide, including the USA, UK, UAE, Canada, Australia, Singapore, European nations, and Asian countries through our robust network of trusted international moving partners.
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">Do you assist with customs clearance and documentation?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            Yes, we handle the complete customs clearance process at both the origin and destination ports. Our experts assist with all necessary documentation, duties guidance, and regulations to ensure a smooth custom clearance.
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">How long does an international move take?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            The duration depends on the mode of transport and the destination country. Sea freight usually takes around 3 to 6 weeks, while air freight is much faster, taking about 5 to 10 days for delivery.
                        </div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">Are my belongings insured during international transportation?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            Yes, we provide comprehensive transit insurance for international shipments. This covers any unexpected damage or loss during the entire journey, ensuring full peace of mind for your valuable household goods.
                        </div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">Do you provide door-to-door international moving services?</span>
                        <span class="faq-icon" style="background: #ffaa00; color: #0c1c4e; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; transition: 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                        <div style="padding-bottom: 22px;">
                            Absolutely! We handle everything from packing at your current residence in India, custom clearances, ocean/air shipping, all the way to customs clearance and delivery at your new home overseas.
                        </div>
                    </div>
                </div>

                <!-- Question 7 -->
                <div style="background: #ffffff; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden;">
                    <button onclick="toggleFAQ(this)" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; padding: 22px 25px; cursor: pointer; text-align: left; outline: none;">
                        <span style="color: #0c1c4e; font-size: 18px; font-weight: 700;">Why choose Annapurna Packers and Movers for international relocation?</span>
                        <div class="faq-answer" style="max-height: 0; padding: 0 25px; overflow: hidden; transition: all 0.3s ease-out; color: #475569; font-size: 16px; line-height: 1.6;">
                            <div style="padding-bottom: 22px;">
                                We are known for our expert multi-layer packing, transparent pricing, hassle-free customs clearance handling, and a globally connected secure network. We ensure a safe and timely relocation experience.
                            </div>
                        </div>
                </div>

            </div> <!-- FAQ Accordion Container క్లోజింగ్ -->
        </section> <!-- FAQ Section మెయిన్ కంటైనర్ క్లోజింగ్ -->

        <div style="clear: both; width: 100%; display: block;"></div>

        <!-- JavaScript for popup and dynamic FAQ -->
        <script>
            if (typeof toggleFAQ !== 'function') {
                function toggleFAQ(button) {
                    const answer = button.nextElementSibling;
                    const icon = button.querySelector('.faq-icon');

                    if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
                        answer.style.maxHeight = '0px';
                        icon.innerText = '+';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        document.querySelectorAll('.faq-answer').forEach(el => el.style.maxHeight = '0px');
                        document.querySelectorAll('.faq-icon').forEach(el => {
                            el.innerText = '+';
                            el.style.transform = 'rotate(0deg)';
                        });

                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        icon.innerText = '−';
                        icon.style.transform = 'rotate(180deg)';
                    }
                }
            }

            function openPopup(imageSrc) {
                document.getElementById("imagePopup").style.display = "block";
                document.getElementById("popupImg").src = imageSrc;
            }

            function closePopup() {
                document.getElementById("imagePopup").style.display = "none";
            }
        </script>

        <div style="clear: both; width: 100%; display: block;"></div>

        <!-- ========================================== -->
        <!-- ANNAPURNA PACKERS FULL WIDTH FOOTER START  -->
        <!-- ========================================== -->
        <footer class="legacy-home-footer" style="background-color: #0c1524; color: #ffffff; padding: 60px 5% 30px 5%; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between; gap: 30px; text-align: left; box-sizing: border-box; width: 100% !important; clear: both; position: relative; z-index: 999; margin-bottom: 0;">

            <!-- Column 1: Company Profile -->
            <div style="flex: 1 1 250px; max-width: 300px; box-sizing: border-box; margin-bottom: 20px;">
                <div style="margin-bottom: 20px;">
                    <h2 style="color: #ffaa00; font-size: 24px; font-weight: 700; margin: 0; display: flex; align-items: center; gap: 10px;">
                        <span style="background: red; color: white; padding: 5px 12px; border-radius: 5px; font-size: 16px; font-weight: bold;">A</span>
                        ANNAPURNA
                    </h2>
                    <p style="color: #a0aec0; font-size: 12px; margin: 5px 0 0 0; letter-spacing: 1px; font-weight: bold;">PACKERS & MOVERS</p>
                </div>
                <p style="color: #a0aec0; font-size: 14px; line-height: 1.7; margin: 0;">
                    Annapurna Packers and Movers offers reliable Packers & Movers, home relocation, office shifting, vehicle transportation, warehouse storage, and international moving services across India with professional packing, safe transportation, and on-time delivery.
                </p>
            </div>

            <!-- Column 2: Useful Links -->
            <div style="flex: 1 1 150px; max-width: 200px; box-sizing: border-box; margin-bottom: 20px;">
                <h4 style="color: #ffffff; font-size: 18px; font-weight: 700; margin: 0 0 20px 0; border-bottom: 2px solid #ffaa00; padding-bottom: 5px; display: inline-block;">Useful Links</h4>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 14px; line-height: 2.2;">
                    <li><a href="index.php" style="color: #a0aec0; text-decoration: none;">Home</a></li>
                    <li><a href="aboutus.php" style="color: #a0aec0; text-decoration: none;">About Us</a></li>
                    <li><a href="aboutus.php" style="color: #a0aec0; text-decoration: none;">Services</a></li>
                    <li><a href="gallery.php" style="color: #a0aec0; text-decoration: none;">Gallery</a></li>
                    <li><a href="aboutus.php" style="color: #a0aec0; text-decoration: none;">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Our Services -->
            <div style="flex: 1 1 200px; max-width: 250px; box-sizing: border-box; margin-bottom: 20px;">
                <h4 style="color: #ffffff; font-size: 18px; font-weight: 700; margin: 0 0 20px 0; border-bottom: 2px solid #ffaa00; padding-bottom: 5px; display: inline-block;">Our Services</h4>
                <ul style="list-style: none; padding: 0; margin: 0; font-size: 14px; line-height: 2.2; color: #a0aec0;">
                    <li>Home Relocation</li>
                    <li>Office Relocation</li>
                    <li>International Relocation</li>
                    <li>Packing & Moving</li>
                    <li>Vehicle Transportation</li>
                    <li>Storage & Warehousing</li>
                </ul>
            </div>

            <!-- Column 4: New Contact Box & Google Map -->
            <div style="flex: 2; min-width: 300px; display: flex; flex-wrap: wrap; gap: 20px; box-sizing: border-box; text-align: left;">

                <!-- ఎడమ వైపు: బ్లూ కాంటాక్ట్ వివరాల బాక్స్ -->
                <div style="flex: 1; min-width: 280px; background-color: #0c1c4e; padding: 25px; border-radius: 12px; font-family: 'Segoe UI', Roboto, sans-serif; color: #ffffff; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                    <span style="color: #ffaa00; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 11px;">Contact Us</span>
                    <h3 style="font-size: 22px; margin: 5px 0 20px 0; font-weight: 700; color: #ffffff; line-height: 1.3;">Get In Touch With <br><span style="color: #ffaa00;">Annapurna Packers</span></h3>

                    <!-- అడ్రస్ బాక్స్ -->
                    <div style="background-color: #ffaa00; border-radius: 8px; padding: 15px; display: flex; gap: 10px; margin-bottom: 15px; color: #0c1c4e;">
                        <div style="flex-shrink: 0; font-size: 16px;">📍</div>
                        <div>
                            <h4 style="margin: 0 0 3px 0; font-size: 14px; font-weight: 700;">Office Address</h4>
                            <p style="margin: 0; font-size: 13px; line-height: 1.4; font-weight: 500;">H.O.: Shop No. 9, Sector- 4, MVP Colony, Beside Prathibha Bharat Gas Company, Visakhapatnam - 530017</p>
                        </div>
                    </div>

                    <!-- ఈమెయిల్ బాక్స్ -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 15px; display: flex; gap: 10px; margin-bottom: 15px;">
                        <div style="flex-shrink: 0; font-size: 16px;">✉️</div>
                        <div>
                            <h4 style="margin: 0 0 3px 0; font-size: 14px; font-weight: 700; color: #ffaa00;">Email Us</h4>
                            <p style="margin: 0; font-size: 13px;"><a href="mailto:annapurnapackersandmovers@gmail.com" style="color: #ffffff; text-decoration: none;">annapurnapackersandmovers@gmail.com</a></p>
                        </div>
                    </div>

                    <!-- ఫోన్ బాక్స్ -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 15px; display: flex; gap: 10px;">
                        <div style="flex-shrink: 0; font-size: 16px;">📞</div>
                        <div>
                            <h4 style="margin: 0 0 3px 0; font-size: 14px; font-weight: 700; color: #ffaa00;">Call Us</h4>
                            <p style="margin: 0; font-size: 13px; font-weight: 600; color: #ffffff;">+91 9848131259 / 8333021259</p>
                            <p style="margin: 2px 0 0 0; font-size: 13px; font-weight: 600; color: #ffffff;">+91 8333031259 / 8333041259</p>
                        </div>
                    </div>
                </div>

                <!-- కుడి వైపు: గూగుల్ మ్యాప్ బాక్స్ -->
                <div style="flex: 1; min-width: 280px; background: #ffffff; padding: 8px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.15); display: flex; height: 360px; box-sizing: border-box;">
                    <iframe src="https://google.com"
                        width="100%" height="100%" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

        </footer>

        <div style="clear: both; width: 100%; display: block;"></div>

        <!-- ========================================== -->
        <!-- ANNAPURNA MAIN INTRODUCTION SECTION (BOTTOM) -->
        <!-- ========================================== -->
        <section style="padding: 40px 20px; font-family: 'Segoe UI', Roboto, sans-serif; background-color: #0c1524; text-align: center; clear: both; position: relative; z-index: 10; margin: 0; width: 100%; box-sizing: border-box;">
            <div style="max-width: 1140px; margin: 0 auto; background: #ffffff; border: 3px solid #ffaa00; border-radius: 12px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); box-sizing: border-box; width: 100%;">

                <!-- Truck Icon Container -->
                <div style="margin-bottom: 15px; color: #0c1c4e; font-size: 40px; text-align: center;">🚚</div>

                <!-- Main Heading -->
                <h2 style="color: #0c1c4e; font-size: 28px; font-weight: 700; margin: 0 auto 25px auto; line-height: 1.4; text-align: center;">
                    Annapurna Packers and Movers | Packers & Movers, Home, Office & Vehicle Relocation Services Across India
                </h2>

                <!-- Content Paragraphs -->
                <div style="text-align: left; color: #475569; font-size: 15px; line-height: 1.8; box-sizing: border-box;">
                    <p style="margin-bottom: 20px; text-align: justify;">
                        Annapurna Packers and Movers provides professional <strong>Packers & Movers</strong> services including <strong>Home Relocation</strong>, <strong>Office Shifting</strong>, <strong>Vehicle Transportation</strong>, <strong>International Relocation</strong>, <strong>Warehouse & Storage Solutions</strong>, <strong>Air & Sea Cargo Services</strong>, and <strong>Industrial Moving</strong> with safe packing, secure transportation, and on-time delivery.
                    </p>

                    <!-- Cities Highlighted Blue Box -->
                    <div style="margin-bottom: 25px; background-color: #0c1524; color: #ffffff; padding: 20px; border-radius: 6px; width: 100%; box-sizing: border-box; font-weight: 500; font-size: 15px; line-height: 1.6; text-align: left; clear: both;">
                        We proudly serve <span style="background-color: #0f2c7a; color: #ffffff; padding: 3px 8px; border-radius: 4px; font-weight: bold; border-bottom: 2px solid #ffaa00;">Visakhapatnam, Vijayawada, Guntur, Rajahmundry, Kakinada, Tirupati, Nellore, Hyderabad, Chennai, Bengaluru, Mumbai, Pune, Delhi, Kolkata and all major cities across India.</span>
                    </div>

                    <p style="margin: 25px 0 15px 0; text-align: justify; line-height: 1.6;">
                        Whether you're relocating your home, office, vehicle or planning an international move, our experienced team ensures professional packing, careful handling, secure transportation and hassle-free relocation at affordable prices.
                    </p>
                </div>
            </div>


        </section>
        <!-- New Premium Floating Social Sidebar Start -->
        <div style="position: fixed; right: 20px; top: 50%; transform: translateY(-50%); display: flex; flex-direction: column; gap: 12px; z-index: 99999;">

            <!-- Call Icon -->
            <a href="tel:+918333031259" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: all 0.3s;" title="Call Us">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
            </a>

            <!-- WhatsApp Icon -->
            <a href="https://wa.me/918333031259" target="_blank" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #25d366; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: all 0.3s;" title="WhatsApp">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="#25d366">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.458L0 24zm6.59-4.846c1.6.95 3.498 1.452 5.418 1.453l.014-.002c5.382 0 9.762-4.38 9.764-9.766 0-2.609-1.015-5.059-2.86-6.904C17.078 2.08 14.623.82 12.013.82c-5.387 0-9.767 4.38-9.77 9.767-.002 1.912.497 3.784 1.448 5.389L2.662 20.93l4.985-1.31z" />
                </svg>
            </a>

            <!-- Facebook Icon -->
            <a href="https://www.facebook.com/profile.php?id=61591811524024" target="_blank" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #ffffff; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.3);" title="Facebook">f</a>

            <!-- X (Twitter) Icon -->
            <a href="https://x.com/annapurnavpc" target="_blank" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #ffffff; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; font-weight: bold; font-family: sans-serif; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.3);" title="X (Twitter)">X</a>

            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/annapurnapackersmovers/" target="_blank" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3);" title="Instagram">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>

            <!-- LinkedIn Icon -->
            <a href="https://www.linkedin.com/in/malleswara-rao-p-13ab87421/" target="_blank" style="width: 48px; height: 48px; background-color: #0d3b66; border: 2px solid #ffffff; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; font-weight: bold; font-family: sans-serif; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.3);" title="LinkedIn">in</a>

        </div>
        <!-- New Premium Floating Social Sidebar End -->
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const counters = document.querySelectorAll('.counter');
                const speed = 150;

                const startCounter = (counter) => {
                    const target = +counter.getAttribute('data-target');
                    let count = 0;

                    const updateCount = () => {
                        const inc = target / speed;
                        if (count < target) {
                            count += inc;
                            counter.innerText = Math.ceil(count).toLocaleString('en-IN') + "+";
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target.toLocaleString('en-IN') + "+";
                        }
                    };
                    updateCount();
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            startCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.2
                });

                counters.forEach(counter => observer.observe(counter));
                // 3. FAQలు ఆటోమేటిక్‌గా 4 సెకన్లకు ఒకసారి మారుతూ తిరగడానికి ఆటో-స్లైడర్
                let faqIndex = 0;
                const faqButtons = document.querySelectorAll('#faq-section button');

                // బ్లూ కలర్ మరియు గుర్తు మార్చడానికి ఫంక్షన్
                window.toggleFAQ = function(button) {
                    const answer = button.nextElementSibling;
                    const icon = button.querySelector('.faq-icon');

                    document.querySelectorAll('#faq-section button').forEach(btn => {
                        if (btn !== button) {
                            const ans = btn.nextElementSibling;
                            const icn = btn.querySelector('.faq-icon');
                            if (ans) ans.style.maxHeight = '0px';
                            btn.style.backgroundColor = '#ffffff';
                            btn.style.color = '#0c1c4e';
                            if (icn) {
                                icn.innerText = '+';
                                icn.style.backgroundColor = '#ffaa00';
                                icn.style.color = '#0c1c4e';
                            }
                        }
                    });

                    if (answer && (answer.style.maxHeight === '0px' || !answer.style.maxHeight)) {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        button.style.backgroundColor = '#0c1c4e';
                        button.style.color = '#ffffff';
                        if (icon) {
                            icon.innerText = '×';
                            icon.style.backgroundColor = '#ffffff';
                            icon.style.color = '#0c1c4e';
                        }
                    } else if (answer) {
                        answer.style.maxHeight = '0px';
                        button.style.backgroundColor = '#ffffff';
                        button.style.color = '#0c1c4e';
                        if (icon) {
                            icon.innerText = '+';
                            icon.style.backgroundColor = '#ffaa00';
                            icon.style.color = '#0c1c4e';
                        }
                    }
                };

                if (faqButtons.length > 0) {
                    setInterval(() => {
                        toggleFAQ(faqButtons[faqIndex]);
                        faqIndex = (faqIndex + 1) % faqButtons.length;
                    }, 4000);
                }
            });
        </script>
        <?php include 'footer.php'; ?>