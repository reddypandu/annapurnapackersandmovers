<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Annapurna Packers and Movers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <style>
        /* --- HARSHA WORLDWIDE STYLE GALLERY DESIGN --- */
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #ffffff;
        }

        /* టాప్ బ్యానర్ స్టైల్ (Harsha Movers తరహాలో) */
        .gallery-banner-section {
            background: linear-gradient(rgba(0, 34, 68, 0.7), rgba(0, 51, 102, 0.8)), url('img/truck-banner.jpg') no-repeat center center/cover;
            padding: 90px 20px;
            text-align: center;
            color: #ffffff;
            box-sizing: border-box;
            border-bottom: 4px solid #b10507;
        }

        .gallery-banner-section h1 {
            font-size: 42px;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .gallery-banner-section p {
            margin: 10px 0 0 0;
            font-size: 16px;
            color: #f8f9fa;
        }

        /* 3-Column ఫోటో గ్రిడ్ లేఅవుట్ */
        .gallery-main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            box-sizing: border-box;
        }

        .harsha-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 25px;
        }

        .harsha-gallery-card {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            background: #fff;
            transition: all 0.3s ease;
        }

        .harsha-gallery-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transform: translateY(-4px);
        }

        .harsha-gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        /* హార్వర్డ్/హర్ష టైప్ హోవర్ జూమ్ అండ్ ఓవర్లే ఎఫెక్ట్ */
        .harsha-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 51, 102, 0.8);
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .harsha-gallery-card:hover .harsha-overlay {
            opacity: 1;
        }

        .harsha-overlay span {
            font-size: 18px;
            font-weight: bold;
            border: 2px solid #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
        }

        /* పాపప్ (Lightbox Modal) మోడల్ స్టైల్స్ */
        .popup-modal-view {
            display: none;
            position: fixed;
            z-index: 999999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .popup-modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
            border-radius: 4px;
            animation: zoomEffect 0.3s ease;
        }

        @keyframes zoomEffect {
            from {
                transform: scale(0.7);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .popup-close-trigger {
            position: absolute;
            top: 25px;
            right: 40px;
            color: #ffffff;
            font-size: 50px;
            font-weight: bold;
            cursor: pointer;
        }

        .popup-close-trigger:hover {
            color: #b10507;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- 2. గ్యాలరీ మెయిన్ హెడర్ బ్యానర్ (Harsha Style) -->
    <div class="gallery-banner-section">
        <h1>Gallery</h1>
        <p>Home Shifting, Office Relocation & Vehicle Transportation Images</p>
    </div>

    <!-- 3. గ్యాలరీ బాడీ & ఫోటో గ్రిడ్ -->
    <div class="gallery-main-container">
        <div class="harsha-grid">

            <!-- ఫోటో 1 (మీ బైక్ లోడింగ్ లైవ్ ఫోటో) -->
            <div class="harsha-gallery-card" onclick="triggerPopup('img/annapurna-bike-shifting-loading.jpg')">
                <img src="img/annapurna-bike-shifting-loading.jpg" alt="Bike Shifting & Loading">
                <div class="harsha-overlay">
                    <span>🔍 View Image</span>
                </div>
            </div>
            <!-- ఫోటో 2 (కార్ లోడింగ్ లైవ్ ఫోటో) -->
            <div class="harsha-gallery-card" onclick="triggerPopup('img/annapurna-car-shifting-loading.jpg')">
                <img src="img/annapurna-car-shifting-loading.jpg" alt="Car Shifting and Transportation Service">
                <div class="harsha-overlay">
                    <span>🔍 View Image</span>
                </div>
            </div>
            <!-- ఫోటో 3 (హౌస్ షిఫ్టింగ్ లోడింగ్ ఫోటో) -->
            <!-- ఆఫీస్ షిఫ్టింగ్ ఫోటో (పాతది తిరిగి తెచ్చాము) -->
            <div class="harsha-gallery-card" onclick="triggerPopup('img/office.jpg')">
                <img src="img/office.jpg" alt="Office Shifting Services">
                <div class="harsha-overlay">
                    <span>👁️ View Image</span>
                </div>
            </div>

            <!-- కొత్త హౌస్ షిఫ్టింగ్ ఫోటో -->
            <div class="harsha-gallery-card" onclick="triggerPopup('img/home-relocation.png.jpeg')">
                <img src="img/home-relocation.png.jpeg" alt="Annapurna House Shifting Services">
                <div class="harsha-overlay">
                    <span>👁️ View Image</span>
                </div>
            </div>


            <!-- Annapurna Packers New 28 Images Gallery -->
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack1.jpg')"><img src="img/pack1.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack2.jpg')"><img src="img/pack2.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack3.jpg')"><img src="img/pack3.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack4.jpg')"><img src="img/pack4.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack5.jpg')"><img src="img/pack5.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack6.jpg')"><img src="img/pack6.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack7.jpg')"><img src="img/pack7.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack8.jpg')"><img src="img/pack8.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack9.jpg')"><img src="img/pack9.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack10.jpg')"><img src="img/pack10.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack11.jpg')"><img src="img/pack11.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack12.jpg')"><img src="img/pack12.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack13.jpg')"><img src="img/pack13.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack14.jpg')"><img src="img/pack14.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack15.jpg')"><img src="img/pack15.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack16.jpg')"><img src="img/pack16.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack17.jpg')"><img src="img/pack17.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack18.jpg')"><img src="img/pack18.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack19.jpg')"><img src="img/pack19.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack20.jpg')"><img src="img/pack20.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack21.jpg')"><img src="img/pack21.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack22.jpg')"><img src="img/pack22.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack23.jpg')"><img src="img/pack23.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack24.jpg')"><img src="img/pack24.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack25.jpg')"><img src="img/pack25.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack26.jpg')"><img src="img/pack26.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack27.jpg')"><img src="img/pack27.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
            <div class="harsha-gallery-card" onclick="triggerPopup('img/pack28.jpg')"><img src="img/pack28.jpg" alt="Annapurna Packers">
                <div class="harsha-overlay"><span>👁️ View Image</span></div>
            </div>
        </div>
    </div>
    <!-- క్లిక్ చేసినప్పుడు ఓపెన్ అయ్యే పాపప్ మోడల్ బాక్స్ -->
    <div id="customGalleryModal" class="popup-modal-view" onclick="dismissPopup()">
        <span class="popup-close-trigger">&times;</span>
        <img class="popup-modal-content" id="modalTargetImg">
    </div>

    <?php include 'footer.php'; ?>

    <!-- పాపప్ క్లిక్ ఈవెంట్ జావాస్క్రిప్ట్ -->
    <script>
        function triggerPopup(imageSource) {
            document.getElementById("customGalleryModal").style.display = "block";
            document.getElementById("modalTargetImg").src = imageSource;
        }

        function dismissPopup() {
            document.getElementById("customGalleryModal").style.display = "none";
        }
    </script>
</body>

</html>