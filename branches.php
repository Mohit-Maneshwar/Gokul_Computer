<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Branches | Gokul Computer</title>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
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

    .branches-hero {
      background: radial-gradient(circle at center, #001f4d 0%, #000 80%);
      color: #fff;
      text-align: center;
      padding: 8rem 2rem 6rem;
      overflow: hidden;
      position: relative;
    }

    .branches-hero-content h1 {
      font-size: 4rem;
      color: #3399ff;
      margin-bottom: 1rem;
    }

    .branches-hero-content p {
      font-size: 1.3rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto;
    }

    .branches-grid {
      background: #000;
      padding: 6rem 2rem;
    }

    .branches-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .branch-card {
      background: rgba(0, 31, 77, 0.6);
      border-radius: 1rem;
      padding: 2rem;
      color: #fff;
      transition: transform 0.4s, box-shadow 0.4s;
      opacity: 0;
      transform: translateY(40px);
    }

    .branch-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(51, 153, 255, 0.6);
    }

    .branch-card h3 {
      color: #3399ff;
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .branch-card p {
      font-size: 1.1rem;
      color: #ccc;
      line-height: 1.6;
    }

    .branch-card i {
      color: #3399ff;
      margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
      .branches-hero-content h1 {
        font-size: 2.5rem;
      }

      .branches-hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <?php include 'nav.html'; ?>

  <section class="branches-hero">
    <div class="branches-hero-content">
      <h1>Our Branches</h1>
      <p>Find our centers across different locations and get the best IT education near you.</p>
    </div>
  </section>

  <section class="branches-grid">
    <div class="branches-container">
      <div class="branch-card">
        <h3>Gondia Branch</h3>
        <p><i class="fas fa-map-marker-alt"></i> Main Road, Gondia, Maharashtra</p>
        <p><i class="fas fa-phone-alt"></i> +91 12345 67890</p>
      </div>
      <div class="branch-card">
        <h3>Bhandara Branch</h3>
        <p><i class="fas fa-map-marker-alt"></i> Station Road, Bhandara, Maharashtra</p>
        <p><i class="fas fa-phone-alt"></i> +91 98765 43210</p>
      </div>
      <div class="branch-card">
        <h3>Nagpur Branch</h3>
        <p><i class="fas fa-map-marker-alt"></i> Dharampeth, Nagpur, Maharashtra</p>
        <p><i class="fas fa-phone-alt"></i> +91 99999 88888</p>
      </div>
    </div>
  </section>

  <?php include 'footer.html'; ?>

  <!-- GSAP & ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- GSAP animations -->
  <script>
    // Hero entrance
    gsap.from(".branches-hero-content h1", {
      opacity: 0,
      y: -80,
      duration: 1.5,
      ease: "power3.out"
    });
    gsap.from(".branches-hero-content p", {
      opacity: 0,
      y: -50,
      duration: 1.5,
      delay: 0.3,
      ease: "power3.out"
    });

    // Subtle parallax-like hero content movement
    gsap.to(".branches-hero-content", {
      yPercent: 5,
      ease: "none",
      scrollTrigger: {
        trigger: ".branches-hero",
        start: "top top",
        end: "bottom top",
        scrub: true,
      }
    });

    // Branch cards fade-up stagger
    gsap.to(".branch-card", {
      opacity: 1,
      y: 0,
      duration: 1.4,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".branches-grid",
        start: "top 85%",
      }
    });
  </script>
</body>

</html>
