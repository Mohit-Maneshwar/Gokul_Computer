<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery | Gokul Computer</title>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'JetBrains Mono', monospace;
      background-color: #f4f4f4;
      color: #333;
    }
    .gallery-hero {
      background: radial-gradient(circle at center, #001f4d 0%, #000 80%);
      color: #fff;
      text-align: center;
      padding: 8rem 2rem 6rem;
      overflow: hidden;
      position: relative;
    }
    .gallery-hero-content h1 {
      font-size: 4rem;
      color: #3399ff;
      margin-bottom: 1rem;
    }
    .gallery-hero-content p {
      font-size: 1.3rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto;
    }
    .gallery-grid {
      background: #000;
      padding: 6rem 2rem;
    }
    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .gallery-item {
      overflow: hidden;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(51, 153, 255, 0.4);
      transform: translateY(20px);
      opacity: 0;
    }
    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s;
    }
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    @media (max-width: 768px) {
      .gallery-hero-content h1 {
        font-size: 2.5rem;
      }
      .gallery-hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'nav.html'; ?>

  <section class="gallery-hero">
    <div class="gallery-hero-content">
      <h1>Our Gallery</h1>
      <p>Take a look at the moments and memories created at Gokul Computers.</p>
    </div>
  </section>

  <section class="gallery-grid">
    <div class="gallery-container">
      <div class="gallery-item"><img src="images/image1.jpg" alt="Gallery 1"></div>
      <div class="gallery-item"><img src="images/image2.jpg" alt="Gallery 2"></div>
      <div class="gallery-item"><img src="images/image3.jpg" alt="Gallery 3"></div>
      <div class="gallery-item"><img src="images/image4.jpg" alt="Gallery 4"></div>
      <div class="gallery-item"><img src="images/image5.jpg" alt="Gallery 5"></div>
      <div class="gallery-item"><img src="images/image1.jpg" alt="Gallery 6"></div>
    </div>
  </section>

  <?php include 'footer.html'; ?>

  <!-- GSAP & ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- GSAP animations -->
  <script>
    // Hero entrance
    gsap.from(".gallery-hero-content h1", {
      opacity: 0,
      y: -80,
      duration: 1.5,
      ease: "power3.out"
    });
    gsap.from(".gallery-hero-content p", {
      opacity: 0,
      y: -50,
      duration: 1.5,
      delay: 0.3,
      ease: "power3.out"
    });

    // Parallax-like hero content subtle movement
    gsap.to(".gallery-hero-content", {
      yPercent: 5,
      ease: "none",
      scrollTrigger: {
        trigger: ".gallery-hero",
        start: "top top",
        end: "bottom top",
        scrub: true,
      }
    });

    // Gallery items fade-up staggered
    gsap.to(".gallery-item", {
      opacity: 1,
      y: 0,
      duration: 1.4,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".gallery-grid",
        start: "top 85%",
      }
    });
  </script>
</body>
</html>
