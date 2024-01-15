<header class="header">
    <a href="#" class="logo">portfolio</a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a class="{{ ($title == "Home") ? 'active' : ''}}" href="/">Home</a>
        <a class="{{ ($title == "About") ? 'active' : ''}}" href="/about">About</a>
        <a class="{{ ($title == "Services") ? 'active' : ''}}" href="/service">Services</a>
        <a class="{{ ($title == "Portfolio") ? 'active' : ''}}" href="/portfolio">Portfolio</a>
        <a class="{{ ($title == "contact") ? 'active' : ''}}" href="/contact">Contact</a>
    </nav>
</header>