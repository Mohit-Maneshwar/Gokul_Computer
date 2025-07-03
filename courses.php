<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Courses | Gokul Computer</title>
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

    .courses-hero {
      background: radial-gradient(circle at center, #001f4d 0%, #000 80%);
      color: #fff;
      text-align: center;
      padding: 8rem 2rem 6rem;
      overflow: hidden;
      position: relative;
    }

    .courses-hero-content h1 {
      font-size: 4rem;
      color: #3399ff;
      margin-bottom: 1rem;
    }

    .courses-hero-content p {
      font-size: 1.3rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto;
    }

    .courses-grid {
      background: #000;
      padding: 6rem 2rem;
    }

    .courses-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .course-card {
      background: rgba(0, 31, 77, 0.6);
      border-radius: 1rem;
      padding: 2rem;
      color: #fff;
      transition: transform 0.4s, box-shadow 0.4s;
    }

    .course-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(51, 153, 255, 0.6);
    }

    .course-card h3 {
      color: #3399ff;
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .course-card p {
      font-size: 1.1rem;
      color: #ccc;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .courses-hero-content h1 {
        font-size: 2.5rem;
      }

      .courses-hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <?php include 'nav.html'; ?>

  <section class="courses-hero">
    <div class="courses-hero-content">
      <h1>Our Courses</h1>
      <p>Explore a wide range of IT and computer courses to kickstart or advance your career.</p>
    </div>
  </section>

  <section class="courses-grid">
    <div class="courses-container">
      <div class="course-card">
        <h3>Basics & MS-Office</h3>
        <p>Learn essential computer skills for everyday tasks and office productivity.</p>
      </div>
      <div class="course-card">
        <h3>C / C++</h3>
        <p>Master fundamental and advanced programming concepts in C and C++.</p>
      </div>
      <div class="course-card">
        <h3>Java & Advanced Java</h3>
        <p>Build strong Java programming skills for desktop and web applications.</p>
      </div>
      <div class="course-card">
        <h3>Web Development</h3>
        <p>HTML, CSS, JavaScript, PHP, MySQL — everything you need to build modern websites.</p>
      </div>
      <div class="course-card">
        <h3>Dot Net & C#.Net</h3>
        <p>Develop robust enterprise applications using Microsoft technologies.</p>
      </div>
      <div class="course-card">
        <h3>Graphics & Design</h3>
        <p>Master Photoshop, CorelDRAW, Flash, and more for creative design projects.</p>
      </div>
      <div class="course-card">
        <h3>Hardware & Networking</h3>
        <p>Understand computer hardware, troubleshooting, and network setup.</p>
      </div>
      <div class="course-card">
        <h3>SEO & E-commerce</h3>
        <p>Learn to optimize websites for search engines and build e-commerce sites.</p>
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
    gsap.from(".courses-hero-content h1", {
      opacity: 0,
      y: -80,
      duration: 1.5,
      ease: "power3.out"
    });
    gsap.from(".courses-hero-content p", {
      opacity: 0,
      y: -50,
      duration: 1.5,
      delay: 0.3,
      ease: "power3.out"
    });

    // Subtle background parallax on hero text
    gsap.to(".courses-hero-content", {
      yPercent: 5,
      ease: "none",
      scrollTrigger: {
        trigger: ".courses-hero",
        start: "top top",
        end: "bottom top",
        scrub: true,
      }
    });

    // Course cards: fade-up with stagger
    gsap.from(".course-card", {
      opacity: 0,
      y: 60,
      duration: 1.4,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".courses-grid",
        start: "top 85%",
      }
    });

    // Floating effect for course cards when in view
    document.querySelectorAll(".course-card").forEach((card, i) => {
      gsap.to(card, {
        y: "+=10",
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        duration: 2 + i * 0.1,
        scrollTrigger: {
          trigger: card,
          start: "top 90%",
        }
      });
    });
  </script>
</body>

</html>
