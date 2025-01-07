<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Our Services - Eazyweb</title>
    
    <!-- Existing CSS links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="http://127.0.0.1:8000" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Eazyweb</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="http://127.0.0.1:8000">Home</a></li>
          <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
          <li><a href="http://127.0.0.1:8000/service" class="active">Service</a></li>
          <li><a href="http://127.0.0.1:8000/prosedur">Prosedur</a></li>
          <li><a href="http://127.0.0.1:8000/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

<style>
.header {
  --background-color: #10058c;  /* Changed to solid blue instead of transparent */
  --default-color: #ffffff;
  --heading-color: #ffffff;
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  transition: all 0.5s;
  z-index: 997;
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);  /* Added shadow by default */
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 32px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color);
}

/* Since we want it always solid, we don't need different scrolled styles */
/* But keeping the class for consistency */
.scrolled .header {
  --background-color: #10058c;
}
</style>

    <main id="main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">
                            <div class="star-icon">✨</div>
                            <h1>Our Services</h1>
                            <p>Discover our comprehensive range of digital solutions</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-image">
                            <div class="gradient-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="services-list">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="bi bi-window"></i>
                                </div>
                                <div class="content">
                                    <h3>Web Design</h3>
                                    <p>Kami menciptakan desain website yang menarik, modern, dan responsif untuk memastikan pengalaman pengguna yang optimal di semua perangkat. Fokus kami adalah pada UI/UX yang intuitif dan estetika yang sesuai dengan brand Anda.</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="icon">
                                    <i class="bi bi-code-square"></i>
                                </div>
                                <div class="content">
                                    <h3>Web Development</h3>
                                    <p>Tim developer kami mengembangkan website dengan teknologi terkini untuk memastikan performa, keamanan, dan skalabilitas yang optimal. Kami membangun solusi web yang sesuai dengan kebutuhan bisnis Anda.</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="icon">
                                    <i class="bi bi-kanban"></i>
                                </div>
                                <div class="content">
                                    <h3>Product Management</h3>
                                    <p>Kami membantu mengelola produk digital Anda dari konsep hingga peluncuran, dengan fokus pada strategi produk, roadmap pengembangan, dan optimasi berkelanjutan untuk mencapai tujuan bisnis.</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="content">
                                    <h3>Marketing</h3>
                                    <p>Layanan pemasaran digital kami mencakup SEO, content marketing, social media management, dan digital advertising untuk membantu meningkatkan visibility online dan pertumbuhan bisnis Anda.</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="icon">
                                    <i class="bi bi-palette"></i>
                                </div>
                                <div class="content">
                                    <h3>Graphic Design</h3>
                                    <p>Tim desainer kami menciptakan aset visual yang menarik dan profesional, termasuk logo, branding materials, dan konten visual untuk media sosial yang sesuai dengan identitas brand Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-card">
                            <h3>Butuh Bantuan?</h3>
                            <p>Hubungi tim kami untuk konsultasi lebih lanjut mengenai layanan yang kami sediakan.</p>
                            <a href="#" class="whatsapp-button">
                                <i class="bi bi-whatsapp"></i>
                                Konsultasi via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <style>
        /* Header Styles */
        

        /* Hero Section */
        .hero-section {
            padding: 140px 0 60px;
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
        }

        .star-icon {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            color: #1a1a6c;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 20px;
            color: #6c757d;
        }

        .gradient-circle {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #6366f1, #a855f7, #ec4899);
            border-radius: 50%;
            opacity: 0.7;
            filter: blur(40px);
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
        }

        .service-item {
            display: flex;
            gap: 24px;
            margin-bottom: 40px;
            padding: 32px;
            background: white;
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .service-item .icon {
            width: 60px;
            height: 60px;
            background: #1a1a6c;
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }

        .service-item .content {
            flex: 1;
        }

        .service-item h3 {
            color: #1a1a6c;
            margin-bottom: 16px;
            font-size: 24px;
        }

        .service-item p {
            color: #4b5563;
            margin: 0;
            line-height: 1.6;
        }

        /* Contact Card */
        .contact-card {
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            position: sticky;
            top: 100px;
        }

        .contact-card h3 {
            color: #1a1a6c;
            margin-bottom: 16px;
        }

        .whatsapp-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #25D366;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 16px;
            transition: background-color 0.3s;
        }

        .whatsapp-button:hover {
            background: #128C7E;
            color: white;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-content h1 {
                font-size: 36px;
            }
            
            .gradient-circle {
                width: 200px;
                height: 200px;
            }

            .service-item {
                padding: 24px;
            }

            .service-item .icon {
                width: 48px;
                height: 48px;
                font-size: 20px;
            }
        }
    </style>

<footer id="footer" class="footer dark-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">EazyWeb</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Bantarkawung, Brebes</p>
        <p>Jawa Tengah, IND 52274</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+62 812 3456 7890</span></p>
        <p><strong>Email:</strong> <span>info@eazyweb.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Our Newsletter</h4>
      <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
      <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
      </form>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>©2025 <span>Copyright</span> <strong class="px-1 sitename">EazyWeb</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">Farid Hendrawan</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>