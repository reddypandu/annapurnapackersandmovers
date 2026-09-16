<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Annapurna Packers and Movers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <!-- FontAwesome Icons for service cards -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #333;
        }

        /* Top Header */
        header {
            background-image: linear-gradient(rgba(0, 43, 91, 0.8), rgba(0, 43, 91, 0.8)), url('img/truckprofile.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            box-sizing: border-box;
        }

        header .logo img {
            height: 70px;
            width: auto;
            display: block;
            object-fit: contain;
            border-radius: 4px;
        }

        .services-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .services-hero {
            background: linear-gradient(90deg, rgba(2, 28, 54, 0.92) 45%, rgba(2, 28, 54, 0.6) 100%),
                url('img/services.jpeg');
            background-size: cover;
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

        .services-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .services-header h2 {
            color: #003366;
            font-size: 36px;
            margin: 0 0 10px 0;
            font-weight: 800;
        }

        .services-header p {
            font-size: 16px;
            color: #666;
            margin: 0;
        }

        /* 4 Column Responsive Grid Layout */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            align-items: stretch;
        }

        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        .service-card {
            background: #ffffff;
            border: 2px solid #003366;
            border-radius: 12px;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 285px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 51, 102, 0.15);
        }

        .icon-circle {
            width: 72px;
            height: 72px;
            flex: 0 0 72px;
            background: linear-gradient(135deg, #003366, #0b5aa0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #ffffff;
            font-size: 29px;
            line-height: 1;
            box-shadow: 0 8px 18px rgba(0, 51, 102, 0.2);
        }

        .icon-circle i {
            display: block;
            width: 1em;
            text-align: center;
        }

        .service-card h3 {
            font-size: 18px;
            color: #003366;
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 12px;
            font-weight: 700;
        }

        .service-card p {
            font-size: 13.5px;
            color: #666666;
            line-height: 1.5;
            margin: 0;
            max-width: 240px;
        }

        @media (max-width: 600px) {
            .services-container {
                margin: 35px auto;
                padding: 0 15px;
            }

            .services-header {
                margin-bottom: 30px;
            }

            .services-header h2 {
                font-size: 30px;
            }

            .service-card {
                min-height: 0;
                padding: 30px 20px;
            }

            .service-card h3 {
                min-height: 0;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <div class="services-hero">
        <h1 class="hero-title">Our Services</h1>
        <div class="title-divider"></div>
    </div>

    <div class="services-container">
        <div class="services-header">
            <p>Safe, Reliable, and Professional Logistics Solutions</p>
        </div>

        <!-- 11 Services Grid Target Element -->
        <div class="services-grid" id="servicesGrid">
            <!-- JavaScript will render the 11 cards inside here automatically -->
        </div>
    </div>

    <!-- JavaScript Data Rendering Section -->
    <script>
        // List of all 11 services matching your menu layout
        const servicesData = [{
                title: "Packing and Moving",
                icon: "fa-solid fa-box-open",
                desc: "High-quality packing and safe moving solutions for all your valuable belongings."
            },
            {
                title: "Loading and Unloading",
                icon: "fa-solid fa-people-carrier",
                desc: "Expert loading and unloading services handled by trained professionals with care."
            },
            {
                title: "Residential Relocation",
                icon: "fa-solid fa-building",
                desc: "Hassle-free residential shifting services tailored to your specific relocation needs."
            },
            {
                title: "Home Relocation",
                icon: "fa-solid fa-house-chimney",
                desc: "Complete end-to-end home shifting services to ensure a stress-free transition."
            },
            {
                title: "Office Relocation",
                icon: "fa-solid fa-briefcase",
                desc: "Efficient shifting of office assets, files, and IT equipment with zero disruption."
            },
            {
                title: "Car Transportation",
                icon: "fa-solid fa-car",
                desc: "Secure car carrier services to transport your vehicle scratch-free and safe."
            },
            {
                title: "Bike Transportation",
                icon: "fa-solid fa-motorcycle",
                desc: "Safe transport of two-wheelers using specialized packing and secure transit."
            },
            {
                title: "International Transportation",
                icon: "fa-solid fa-plane-departure",
                desc: "Global cargo and international shipping setups for seamless long-distance freight."
            },
            {
                title: "Warehousing and Storage",
                icon: "fa-solid fa-warehouse",
                desc: "Safe, clean, and 24/7 secure short-term and long-term storage facilities for your goods."
            },
            {
                title: "Transport Insurance",
                icon: "fa-solid fa-shield-halved",
                desc: "Comprehensive transit insurance coverage to safeguard your goods against unexpected damages."
            },
            {
                title: "Heavy Machinery and Shifting",
                icon: "fa-solid fa-gears",
                desc: "Specialized handling and secure relocation services for industrial heavy tools and plant machinery."
            }
        ];

        // Function to loop and print cards dynamically onto the website layout
        const gridElement = document.getElementById('servicesGrid');
        servicesData.forEach(service => {
            const cardHtml = `
                <div class="service-card">
                    <div class="icon-circle">
                        <i class="${service.icon}"></i>
                    </div>
                    <h3>${service.title}</h3>
                    <p>${service.desc}</p>
                </div>
            `;
            gridElement.innerHTML += cardHtml;
        });
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>