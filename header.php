<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<header class="site-header">
    <nav class="site-nav" aria-label="Main navigation">
        <a href="index.php" class="site-logo">
            <img src="img/main-logo.png" alt="Annapurna Packers and Movers">
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-menu">
            <span></span><span></span><span></span>
            <span class="sr-only">Toggle navigation</span>
        </button>
        <div class="nav-links" id="site-menu">
            <a href="index.php" <?php echo $currentPage === 'index.php' ? ' class="active"' : ''; ?>>Home</a>
            <a href="aboutus.php" <?php echo $currentPage === 'aboutus.php' ? ' class="active"' : ''; ?>>About</a>
            <div class="services-nav-item">
                <div class="services-nav-heading">
                    <a href="services.php" <?php echo $currentPage === 'services.php' ? ' class="active"' : ''; ?>>Services</a>
                    <button class="services-toggle" type="button" aria-expanded="false" aria-controls="services-menu">
                        <span class="sr-only">Toggle services menu</span>
                        <span aria-hidden="true">&#9662;</span>
                    </button>
                </div>
                <div class="services-menu" id="services-menu">
                    <a href="services.php">Packing and Moving</a>
                    <a href="services.php">Loading and Unloading</a>
                    <a href="services.php">Residential Relocation</a>
                    <a href="services.php">Home Relocation</a>
                    <a href="services.php">Office Relocation</a>
                    <a href="services.php">Car Transportation</a>
                    <a href="services.php">Bike Transportation</a>
                    <a href="services.php">International Transportation</a>
                    <a href="services.php">Warehousing and Storage</a>
                    <a href="services.php">Heavy Machinery and Shifting</a>
                    <a href="services.php">Container Truck Services</a>
                </div>
            </div>
            <a href="blog.php" <?php echo $currentPage === 'blog.php' ? ' class="active"' : ''; ?>>Blog</a>
            <a href="gallery.php" <?php echo $currentPage === 'gallery.php' ? ' class="active"' : ''; ?>>Gallery</a>
            <div class="services-nav-item locate-nav-item">
                <div class="services-nav-heading">
                    <a href="#" <?php echo $currentPage === 'LocateUs.php' ? ' class="active"' : ''; ?>>Locate Us</a>
                    <button class="services-toggle locate-toggle" type="button" aria-expanded="false" aria-controls="locations-menu">
                        <span class="sr-only">Toggle city locations menu</span>
                        <span aria-hidden="true">&#9662;</span>
                    </button>
                </div>
                <div class="services-menu locations-menu" id="locations-menu">
                    <a href="#">Andhra Pradesh</a>
                    <a href="#">Telangana</a>
                    <a href="#">Hyderabad</a>
                    <a href="#">Bangalore</a>
                    <a href="#">Mangalore</a>
                    <a href="#">Chennai</a>
                    <a href="#">Kerala</a>
                    <a href="#">All Odisha</a>
                    <a href="#">Bihar</a>
                    <a href="#">Kolkata</a>
                    <a href="#">Maharashtra</a>
                    <a href="#">Gujarat</a>
                    <a href="#">Madhya Pradesh</a>
                    <a href="#">Uttar Pradesh</a>
                    <a href="#">Punjab</a>
                </div>
            </div>
            <a href="contact.php" <?php echo $currentPage === 'contact.php' ? ' class="active"' : ''; ?>>Contact</a>
        </div>
        <style>
            .nav-right {
                display: flex;
                align-items: center;
            }

            .call-button {
                position: relative;
                display: inline-flex;
                align-items: center;
                gap: 10px;
                padding: 8px 20px;
                background: linear-gradient(135deg, #b00018, #b00018);
                color: #ffffff;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                text-decoration: none;
                white-space: nowrap;
                border: 2px solid #ffffff;
                border-radius: 50px;
                box-shadow: 0 6px 16px rgba(40, 167, 69, 0.4);
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
                animation: callPulse 2s infinite;
            }

            /* shine sweep on hover */
            .call-button::before {
                content: "";
                position: absolute;
                top: 0;
                left: -80%;
                width: 50%;
                height: 100%;
                background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.45), transparent);
                transform: skewX(-25deg);
                transition: left 0.6s ease;
            }

            .call-button:hover::before {
                left: 130%;
            }

            .call-button:hover {
                background: linear-gradient(135deg, #0d3b66, #155a9c);
                transform: translateY(-3px);
                box-shadow: 0 10px 22px rgba(13, 59, 102, 0.4);
                animation: none;
            }

            .call-button:active {
                transform: translateY(0);
            }

            /* ringing phone icon */
            .call-button i {
                font-size: 16px;
                animation: callRing 1.6s ease-in-out infinite;
            }

            @keyframes callPulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.55);
                }

                70% {
                    box-shadow: 0 0 0 14px rgba(40, 167, 69, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
                }
            }

            @keyframes callRing {

                0%,
                60%,
                100% {
                    transform: rotate(0);
                }

                10%,
                30%,
                50% {
                    transform: rotate(-15deg);
                }

                20%,
                40% {
                    transform: rotate(15deg);
                }
            }

            /* smaller screens */
            @media (max-width: 768px) {
                .call-button {
                    padding: 10px 18px;
                    font-size: 13px;
                }
            }

            /* respect users who prefer less motion */
            @media (prefers-reduced-motion: reduce) {

                .call-button,
                .call-button i {
                    animation: none;
                }
            }
        </style>
        <div class="nav-right">
            <button type="button" onclick="openQuotePopup(event)" style="width: 100%; background: #ff6a00; color: white; border: none; padding: 14px; border-radius: 8px; font-size: 16px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0px 4px 10px rgba(255,106,0,0.3); margin-top: 5px; outline: none;">
                Enquire Now <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </nav>
</header>
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
                <a href="tel:+919966031259" style="color: #ff6a00; font-size: 20px; font-weight: bold; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-family: sans-serif;">📞 +91 99660 31259</a>
            </div>
        </form>
    </div>
</div>
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

    document.querySelector('.menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('site-menu');
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        menu.classList.toggle('is-open', !expanded);
    });

    document.querySelector('.services-toggle').addEventListener('click', function() {
        var servicesMenu = document.getElementById('services-menu');
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        servicesMenu.classList.toggle('is-open', !expanded);
    });

    document.querySelector('.locate-toggle').addEventListener('click', function() {
        var locationsMenu = document.getElementById('locations-menu');
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        locationsMenu.classList.toggle('is-open', !expanded);
    });
</script>