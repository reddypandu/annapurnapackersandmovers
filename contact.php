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
            background: linear-gradient(90deg, rgba(2, 28, 54, 0.92) 45%, rgba(2, 28, 54, 0.6) 100%),
                url('img/pack10.jpg');
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
            min-height: 62px;
        }

        .contact-row .icon-box {
            width: 28px;
            flex: 0 0 28px;
            font-size: 22px;
            line-height: 1.4;
            text-align: center;
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
            color: #333;
            font-size: 14px;
            line-height: 1.6;
            font-weight: bold;
        }

        .contact-row p+p {
            margin-top: 5px;
        }

        .contact-row .contact-note {
            color: #999;
            font-size: 13px;
            font-style: italic;
        }

        .contact-row a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .contact-row a:hover {
            color: #ff6f00;
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

        .contact-enquiry-form {
            max-width: 900px;
            margin: 30px auto 0;
            padding: 28px;
            background: #ffffff;
            border-top: 4px solid #b00018;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        .contact-enquiry-form h2 {
            margin: 0 0 18px;
            color: #06285f;
            font-size: 26px;
        }

        .contact-enquiry-fields {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .contact-enquiry-fields input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d9dee8;
            border-radius: 6px;
            font: inherit;
            box-sizing: border-box;
        }

        .contact-enquiry-fields button {
            grid-column: 1 / -1;
            padding: 13px 18px;
            border: 0;
            border-radius: 6px;
            background: #b00018;
            color: #ffffff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .contact-enquiry-form {
                padding: 22px 18px;
            }

            .contact-enquiry-fields {
                grid-template-columns: 1fr;
            }
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
        <h1 class="hero-title">Contact Us</h1>
        <div class="title-divider"></div>
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
                        <p style="font-size:bold;">Iruvada, Drivers Rest Parking,<br>Sabbavaram, Anakapalli,<br>Anakapalli District - 531035.</p>
                        <p class="contact-note">Branch: Visakhapatnam, Andhra Pradesh.</p>
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
                        <p><a href="tel:+919966031259">+91 9966031259</a></p>
                        <p><a href="tel:+918333031259">+91 8333031259</a></p>
                    </div>
                </div>
            </div>

            <!-- 3. Right Card: Moving Truck Image -->
            <div class="truck-image-box">
                <img src="img/our-packing-process.jpg" alt="Moving Truck" onerror="this.src='https://unsplash.com'">
            </div>

        </div>

        <!-- 4. Enquiry Form -->
        <form class="contact-enquiry-form" onsubmit="sendContactEnquiryToWhatsApp(event)">
            <h2>Send Your Moving Enquiry</h2>
            <div class="contact-enquiry-fields">
                <input type="text" id="contact_enquiry_name" placeholder="Name *" required>
                <input type="tel" id="contact_enquiry_phone" placeholder="Phone Number *" required>
                <input type="text" id="contact_enquiry_pickup" placeholder="Pick-up Address *" required>
                <input type="text" id="contact_enquiry_drop" placeholder="Drop Address *" required>
                <button type="submit">Send Enquiry on WhatsApp</button>
            </div>
        </form>

        <!-- 5. Bottom: Verified Google Map Section (Sabbavaram) -->
        <div class="google-map-box">
            <iframe src="https://www.google.com/maps?q=Visakhapatnam%20India&output=embed" title="Annapurna Packers and Movers location" loading="lazy"></iframe>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        function sendContactEnquiryToWhatsApp(event) {
            event.preventDefault();

            var name = document.getElementById('contact_enquiry_name').value;
            var phone = document.getElementById('contact_enquiry_phone').value;
            var pickupAddress = document.getElementById('contact_enquiry_pickup').value;
            var dropAddress = document.getElementById('contact_enquiry_drop').value;
            var message = '*Annapurna Packers - Contact Enquiry*\n\n' +
                '*Name:* ' + name + '\n' +
                '*Phone:* ' + phone + '\n' +
                '*Pick-up Address:* ' + pickupAddress + '\n' +
                '*Drop Address:* ' + dropAddress;

            window.open('https://wa.me/918333031259?text=' + encodeURIComponent(message), '_blank');
        }
    </script>

</body>

</html>