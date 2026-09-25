<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation Services | Annapurna Packers and Movers</title>
    <meta name="description" content="Professional vehicle transportation services for cars, bikes, and heavy vehicles across India. Secure door-to-door delivery with full insurance.">
    <link rel="canonical" href="https://annapurnapackersandmovers.com/transportation.php">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="inner-hero" style="background: linear-gradient(135deg, rgba(10, 28, 46, 0.95) 0%, rgba(16, 42, 67, 0.88) 100%), url('img/transportation.jpg') center/cover no-repeat;">
        <div class="container">
            <span class="badge-tag" style="background: rgba(249, 115, 22, 0.2); color: #FFEDD5; border-color: rgba(249, 115, 22, 0.4);">
                <i class="fas fa-truck-moving"></i> Dedicated Transportation
            </span>
            <h1 style="margin-top: 14px;">Vehicle Transportation Services</h1>
            <p>Secure, door‑to‑door transport for cars, two‑wheelers, and heavy vehicles across India. Fully insured and tracked for peace of mind.</p>
            <div class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.75rem;"></i>
                <span>Transportation</span>
            </div>
        </div>
    </section>

    <!-- Service Cards -->
    <section class="section" id="transportation-details">
        <div class="container">
            <div class="section-header">
                <span class="badge-tag">Our Expertise</span>
                <h2>Comprehensive Vehicle Transportation</h2>
                <p>From compact cars to commercial trucks, we handle every vehicle with professional care and state‑of‑the‑art equipment.</p>
            </div>
            <div class="grid cols-3 gap-2">
                <div class="card">
                    <i class="fas fa-car" style="font-size:2rem;color:#F97316;"></i>
                    <h3>Car Transport</h3>
                    <p>Enclosed containers, secure tie‑downs, and climate‑controlled shipping for all makes and models.</p>
                </div>
                <div class="card">
                    <i class="fas fa-motorcycle" style="font-size:2rem;color:#F97316;"></i>
                    <h3>Bike & Two‑Wheeler</h3>
                    <p>Specialized cradles and protective padding to guard against scratches and weather.</p>
                </div>
                <div class="card">
                    <i class="fas fa-truck" style="font-size:2rem;color:#F97316;"></i>
                    <h3>Heavy Vehicles</h3>
                    <p>Flat‑bed trucks, multi‑axle carriers, and real‑time GPS tracking for trucks, buses, and equipment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-bg-light" id="transport-cta">
        <div class="container" style="text-align:center;">
            <h2>Ready to Move Your Vehicle?</h2>
            <p>Get a free, no‑obligation quote in minutes.</p>
            <button class="btn btn-primary" onclick="openQuoteModal()"><i class="fas fa-file-invoice"></i> Get Free Quote</button>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
