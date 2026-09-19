<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Annapurna Packers and Movers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
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
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 305px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 51, 102, 0.15);
        }

        .service-image {
            height: 180px;
            width: 100%;
            overflow: hidden;
            background: #eff5fb;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .service-content {
            padding: 20px 18px 22px;
            text-align: left;
        }

        .service-card h3 {
            font-size: 18px;
            color: #003366;
            min-height: 44px;
            display: flex;
            align-items: center;
            margin: 0 0 12px;
            font-weight: 700;
        }

        .service-card p {
            font-size: 13.5px;
            color: #666666;
            line-height: 1.5;
            margin: 0;
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
        // List of all 11 services matching your menu layout with local photo assets
        const servicesData = [{
                title: "Packing and Moving",
                image: "img/packing-photo.jpg",
                desc: "High-quality packing and safe moving solutions for all your valuable belongings."
            },
            {
                title: "Loading and Unloading",
                image: "img/loading-and-unloading.jpeg",
                desc: "Expert loading and unloading services handled by trained professionals with care."
            },
            {
                title: "Residential Relocation",
                image: "img/residential-relocation.png.webp",
                desc: "Hassle-free residential shifting services tailored to your specific relocation needs."
            },
            {
                title: "Home Relocation",
                image: "img/home-relocation.png.jpeg",
                desc: "Complete end-to-end home shifting services to ensure a stress-free transition."
            },
            {
                title: "Office Relocation",
                image: "img/office-relocation.jpeg",
                desc: "Efficient shifting of office assets, files, and IT equipment with zero disruption."
            },
            {
                title: "Car Transportation",
                image: "img/annapurna-car-shifting-loading.jpg",
                desc: "Secure car carrier services to transport your vehicle scratch-free and safe."
            },
            {
                title: "Bike Transportation",
                image: "img/bike-transport.jpg",
                desc: "Safe transport of two-wheelers using specialized packing and secure transit."
            },
            {
                title: "Warehousing and Storage",
                image: "img/warehousing-and-storage.png",
                desc: "Safe, clean, and 24/7 secure short-term and long-term storage facilities for your goods."
            },
            {
                title: "International Transportation",
                image: "img/international-transporation.png",
                desc: "Global cargo and international shipping setups for seamless long-distance freight."
            },
            {
                title: "Heavy Machinery and Shifting",
                image: "img/heavy-machinery-shifting.png",
                desc: "Specialized handling and secure relocation services for industrial heavy tools and plant machinery."
            },
            {
                title: "Container Truck Services",
                image: "img/container-truck-services.jpeg",
                desc: "Reliable container trucking solutions for efficient and secure cargo transportation."
            },
            // {
            //     title: "Transport Insurance",
            //     image: "img/transport-insurance.jpeg",
            //     desc: "Comprehensive transit insurance coverage to safeguard your goods against unexpected damages."
            // },
        ];

        // Function to loop and print cards dynamically onto the website layout
        const gridElement = document.getElementById('servicesGrid');
        servicesData.forEach(service => {
            const cardHtml = `
                <div class="service-card">
                    <div class="service-image">
                        <img src="${service.image}" alt="${service.title}">
                    </div>
                    <div class="service-content">
                        <h3>${service.title}</h3>
                        <p>${service.desc}</p>
                    </div>
                </div>
            `;
            gridElement.innerHTML += cardHtml;
        });
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>