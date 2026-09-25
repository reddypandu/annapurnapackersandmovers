<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Top Notification Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-inner">
            <div class="top-bar-contact">
                <a href="tel:+919966031259"><i class="fas fa-phone"></i> +91 99660 31259</a>
                <a href="tel:+918333031259"><i class="fas fa-mobile-alt"></i> +91 83330 31259</a>
                <a href="mailto:annapurnapackersandmovers@gmail.com"><i class="fas fa-envelope"></i> annapurnapackersandmovers@gmail.com</a>
                <span><i class="fas fa-map-marker-alt"></i> Visakhapatnam, Andhra Pradesh</span>
            </div>
            <div class="top-bar-social">
                <a href="https://wa.me/918333031259" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61591811524024" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/annapurnavpc" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/annapurnapackersmovers/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/malleswara-rao-p-13ab87421/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="site-header">
    <div class="container">
        <nav class="navbar" aria-label="Main Navigation">
            <a href="index.php" class="navbar-brand" aria-label="Annapurna Packers and Movers Home">
                <img src="img/main-logo.png" alt="Annapurna Packers and Movers Logo" width="220" height="52">
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="aboutus.php" class="nav-link <?php echo $currentPage == 'aboutus.php' ? 'active' : ''; ?>">About Us</a></li>
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link <?php echo $currentPage == 'services.php' ? 'active' : ''; ?>" aria-haspopup="true">
                        Services <i class="fas fa-chevron-down" style="font-size: 0.75rem;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-label="Services Submenu">
                        <li><a href="services.php#home-relocation" class="dropdown-item">Home Relocation</a></li>
                        <li><a href="services.php#office-relocation" class="dropdown-item">Office Relocation</a></li>
                        <li><a href="services.php#vehicle-transportation" class="dropdown-item">Vehicle Transportation</a></li>
                        <li><a href="services.php#packing-moving" class="dropdown-item">Packing &amp; Moving</a></li>
                        <li><a href="services.php#storage-warehousing" class="dropdown-item">Storage &amp; Warehousing</a></li>
                        <li><a href="services.php#international-relocation" class="dropdown-item">International Relocation</a></li>
                    </ul>
                </li>
                <li><a href="gallery.php" class="nav-link <?php echo $currentPage == 'gallery.php' ? 'active' : ''; ?>">Gallery</a></li>
                <li><a href="transportation.php" class="nav-link <?php echo $currentPage == 'transportation.php' ? 'active' : ''; ?>">Transportation</a></li>
                <li><a href="contact.php" class="nav-link <?php echo $currentPage == 'contact.php' ? 'active' : ''; ?>">Contact Us</a></li>
            </ul>

            <div class="nav-actions">

                <button type="button" class="btn btn-primary get" onclick="openQuoteModal()">
                    <i class="fas fa-paper-plane"></i> <span>Get Free Quote</span>
                </button>
                <button type="button" class="menu-toggle-btn" id="menuToggle" aria-label="Toggle Menu" aria-expanded="false" aria-controls="navMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- Quote Modal -->
<div class="modal-overlay" id="quoteModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-dialog">
        <button type="button" class="modal-close-btn" onclick="closeQuoteModal()" aria-label="Close dialog">&times;</button>
        <div style="text-align: center; margin-bottom: 20px;">
            <span class="badge-tag"><i class="fas fa-truck-moving"></i> Fast Estimate</span>
            <h3 id="modalTitle" style="font-size: 1.5rem; margin-top: 10px;">Get a Free Moving Quote</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem;">Fill in your relocation details for an accurate, no-obligation quotation.</p>
        </div>

        <form id="modalQuoteForm" onsubmit="submitQuoteForm(event, 'modal')">
            <div class="quote-form-grid">
                <div class="form-group">
                    <label for="m_name">Full Name *</label>
                    <input type="text" id="m_name" name="name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="m_phone">Phone Number *</label>
                    <input type="tel" id="m_phone" name="phone" class="form-control" placeholder="e.g. 9966031259" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="m_pickup">Moving From *</label>
                        <input type="text" id="m_pickup" name="pickup" class="form-control" placeholder="Pickup City / Area" required>
                    </div>
                    <div class="form-group">
                        <label for="m_drop">Moving To *</label>
                        <input type="text" id="m_drop" name="drop" class="form-control" placeholder="Drop City / Area" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="m_service">Relocation Type *</label>
                        <select id="m_service" name="service" class="form-control" required>
                            <option value="Home Relocation">Home Relocation</option>
                            <option value="Office Relocation">Office Relocation</option>
                            <option value="Vehicle Transportation">Vehicle Transportation</option>
                            <option value="Packing & Moving">Packing & Moving</option>
                            <option value="Storage & Warehousing">Storage & Warehousing</option>
                            <option value="International Relocation">International Relocation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="m_date">Preferred Date</label>
                        <input type="date" id="m_date" name="move_date" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">
                    <i class="fas fa-paper-plane"></i> Send Instant Quote Request
                </button>
            </div>
            <div id="modalFormStatus" style="margin-top: 12px; font-size: 0.88rem; text-align: center; display: none;"></div>
        </form>
    </div>
</div>