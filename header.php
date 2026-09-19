<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
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
                    <!-- <a href="services.php">Transport Insurance</a> -->
                    <a href="services.php">Heavy Machinery and Shifting</a>
                </div>
            </div>
            <a href="blog.php" <?php echo $currentPage === 'blog.php' ? ' class="active"' : ''; ?>>Blog</a>
            <a href="gallery.php" <?php echo $currentPage === 'gallery.php' ? ' class="active"' : ''; ?>>Gallery</a>
            <div class="services-nav-item locate-nav-item">
                <div class="services-nav-heading">
                    <a href="LocateUs.php" <?php echo $currentPage === 'LocateUs.php' ? ' class="active"' : ''; ?>>Locate Us</a>
                    <button class="services-toggle locate-toggle" type="button" aria-expanded="false" aria-controls="locations-menu">
                        <span class="sr-only">Toggle city locations menu</span>
                        <span aria-hidden="true">&#9662;</span>
                    </button>
                </div>
                <div class="services-menu locations-menu" id="locations-menu">
                    <a href="LocateUs.php">Andhra Pradesh</a>
                    <a href="LocateUs.php">Telangana</a>
                    <a href="LocateUs.php">Hyderabad</a>
                    <a href="LocateUs.php">Bangalore</a>
                    <a href="LocateUs.php">Mangalore</a>
                    <a href="LocateUs.php">Chennai</a>
                    <a href="LocateUs.php">Kerala</a>
                    <a href="LocateUs.php">All Odisha</a>
                    <a href="LocateUs.php">Bihar</a>
                    <a href="LocateUs.php">Kolkata</a>
                    <a href="LocateUs.php">Maharashtra</a>
                    <a href="LocateUs.php">Gujarat</a>
                    <a href="LocateUs.php">Madhya Pradesh</a>
                    <a href="LocateUs.php">Uttar Pradesh</a>
                    <a href="LocateUs.php">Punjab</a>
                </div>
            </div>
            <a href="contact.php" <?php echo $currentPage === 'contact.php' ? ' class="active"' : ''; ?>>Contact</a>
        </div>
    </nav>
</header>
<script>
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