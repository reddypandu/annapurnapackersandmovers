<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Network Cities - Annapurna Packers and Movers</title>

  <!-- Main Website Styling Link -->
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">

  <style>
    /* Ultimate Premium Vertical Layout with Multi-Photos */
    .locate-page-section {
      padding: 60px 0;
      background-color: #f4f7f6;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .locate-container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .locate-header {
      text-align: center;
      margin-bottom: 50px;
    }

    .locate-header h1 {
      font-size: 36px;
      color: #fff;
      margin-bottom: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .location-hero {
      background: linear-gradient(90deg, rgba(2, 28, 54, 0.92) 45%, rgba(2, 28, 54, 0.6) 100%),
        url('img/location.jpeg');
      background-size: contain;
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

    .locate-header p {
      font-size: 16px;
      color: #666;
    }

    /* Vertical List Containers */
    .city-vertical-list {
      display: flex;
      flex-direction: column;
      gap: 50px;
    }

    .city-block {
      background: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
      border-top: 5px solid #0d3b66;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .city-block:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border-top: 5px solid #ec4899;
    }

    .city-title-box {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .city-title-box h2 {
      font-size: 26px;
      color: #0d3b66;
      margin: 0;
      font-weight: 700;
    }

    .city-pin {
      font-size: 26px;
    }

    /* 2-Column Photo Row inside each City Block */
    .city-photos-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .photo-col {
      flex: 1;
      min-width: 280px;
      height: 300px;
      overflow: hidden;
      border-radius: 12px;
      border: 2px solid #eaeaea;
      position: relative;
    }

    .photo-col img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .city-block:hover .photo-col img {
      transform: scale(1.03);
    }

    .photo-label {
      position: absolute;
      bottom: 12px;
      left: 12px;
      background: rgba(13, 59, 102, 0.85);
      color: #ffffff;
      padding: 6px 15px;
      font-size: 13px;
      font-weight: 600;
      border-radius: 20px;
    }

    @media (max-width: 768px) {
      .photo-col {
        height: 200px;
      }

      .city-title-box h2 {
        font-size: 22px;
      }

      .locate-header h1 {
        font-size: 30px;
      }
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <div class="location-hero">
    <h1 class="hero-title">Our Network Cities</h1>
    <div class="title-divider"></div>
  </div>
  <!-- MAIN MULTI-PHOTO LIST CONTENT -->
  <section class="locate-page-section">
    <div class="locate-container">

      <div class="locate-header">
        <p>Professional Packing and Shifting Services Across Major Destinations</p>
      </div>

      <div class="city-vertical-list">

        <!-- 1. All Andhra -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Andhra Pradesh</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Andhra Pradesh">
              <div class="photo-label">Landmark View</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Andhra Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 2. Hyderabad -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Hyderabad</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Hyderabad Charminar">
              <div class="photo-label">Charminar Landmark</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Hyderabad Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 3. Bangalore -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Bangalore</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Bangalore Vidhana Soudha">
              <div class="photo-label">Vidhana Soudha Landmark</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Bangalore Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 4. Mangalore -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Mangalore</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Mangalore Landmark">
              <div class="photo-label">Mangalore Landmark</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Mangalore Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 5. Chennai -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Chennai</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Chennai Central">
              <div class="photo-label">Chennai Central Landmark</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Chennai Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 6. Kerala -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Kerala</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Kerala Backwaters">
              <div class="photo-label">Kerala Backwaters</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Kerala Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 7. All Odisha -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>All Odisha</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Odisha Puri Temple">
              <div class="photo-label">Puri Landmark</div>
            </div>
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Odisha Packing Shifting">
              <div class="photo-label">Our Relocation Work</div>
            </div>
          </div>
        </div>

        <!-- 8. Bihar -->
        <div class="city-block">
          <div class="city-title-box">
            <span class="city-pin">📍</span>
            <h2>Bihar</h2>
          </div>
          <div class="city-photos-row">
            <div class="photo-col">
              <img src="https://unsplash.com" alt="Bihar Heritage">
              <div class="photo-label">Bihar Heritage</div>
            </div>
            <div class="photo-col"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>