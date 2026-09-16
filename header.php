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
            <a href="services.php" <?php echo $currentPage === 'services.php' ? ' class="active"' : ''; ?>>Services</a>
            <a href="blog.php" <?php echo $currentPage === 'blog.php' ? ' class="active"' : ''; ?>>Blog</a>
            <a href="gallery.php" <?php echo $currentPage === 'gallery.php' ? ' class="active"' : ''; ?>>Gallery</a>
            <a href="LocateUs.php" <?php echo $currentPage === 'LocateUs.php' ? ' class="active"' : ''; ?>>Locate Us</a>
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
</script>