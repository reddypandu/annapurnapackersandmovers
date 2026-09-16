<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Annapurna Packers & Movers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fcfcfc;
            color: #333;
        }

        .contact-hero-banner {
            background-color: #7a7a7a;
            color: white;
            text-align: center;
            padding: 60px 20px;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .page-container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .content-flex-layout {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 60px;
        }

        .details-white-card {
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            flex: 1;
            min-width: 320px;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            border-top: 4px solid #ff6f00;
        }

        .contact-row {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .contact-row .icon-box {
            font-size: 22px;
            margin-top: 2px;
        }

        .contact-row h4 {
            margin: 0 0 5px 0;
            color: #0d233a;
            font-size: 16px;
            font-weight: bold;
        }

        .contact-row p {
            margin: 0;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .contact-row a {
            text-decoration: none;
            color: #ff6f00;
            font-weight: bold;
        }

        .truck-image-box {
            flex: 1;
            min-width: 320px;
            max-width: 450px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        .truck-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            min-height: 380px;
        }

        .google-map-box {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            margin-top: 30px;
        }

        .google-map-box iframe {
            width: 100%;
            height: 450px;
            border: 0;
            display: block;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- 1. Main Header Banner -->
    <div class="contact-hero-banner">
        Contact Us
    </div>

    <div class="page-container">
        <div class="content-flex-layout">

            <!-- 2. Left Card: English Details Only -->
            <div class="details-white-card">
                <!-- Office Address -->
                <div class="contact-row">
                    <div class="icon-box">📍</div>
                    <div>
                        <h4>Office Address</h4>
                        <p>Iruvada, Drivers Rest Parking,<br>Sabbavaram, Anakapalli,<br>Anakapalli District - 531035.</p>
                        <p style="margin-top: 5px; color: #999; font-size: 13px; font-style: italic;">Branch: Visakhapatnam, Andhra Pradesh.</p>
                    </div>
                </div>

                <!-- Email Us -->
                <div class="contact-row">
                    <div class="icon-box">✉️</div>
                    <div>
                        <h4>Email Us</h4>
                        <p><a href="mailto:annapurnapackersvizag@gmail.com">annapurnapackersvizag@gmail.com</a></p>
                    </div>
                </div>

                <!-- Call Us -->
                <div class="contact-row">
                    <div class="icon-box">📞</div>
                    <div>
                        <h4>Call Us</h4>
                        <p style="margin-bottom: 5px;"><a href="tel:+919966031259" style="color: #333;">+91 99660 31259</a></p>
                        <p><a href="tel:+918985541259" style="color: #333;">+91 89855 41259</a></p>
                    </div>
                </div>
            </div>

            <!-- 3. Right Card: Moving Truck Image -->
            <div class="truck-image-box">
                <img src="img/our-packing-process.jpg" alt="Moving Truck" onerror="this.src='https://unsplash.com'">
            </div>

        </div>

        <!-- 4. Bottom: Verified Google Map Section (Sabbavaram) -->
        <div class="google-map-box">
            <iframe src="https://google.com" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>