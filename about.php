<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>
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

    .about-hero {
      background: radial-gradient(circle at center, #001f4d 0%, #000 80%);
      color: #fff;
      text-align: center;
      padding: 8rem 2rem 6rem;
    }

    .about-hero-content h1 {
      font-size: 4rem;
      color: #3399ff;
      margin-bottom: 1rem;
    }

    .about-hero-content p {
      font-size: 1.3rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      .about-hero-content h1 {
        font-size: 2.5rem;
      }

      .about-hero-content p {
        font-size: 1rem;
      }
    }

    .about-story {
      background: #000;
      color: #fff;
      padding: 6rem 2rem;
      text-align: center;
    }

    .story-content {
      max-width: 900px;
      margin: 0 auto;
    }

    .story-content h2 {
      font-size: 3rem;
      color: #3399ff;
      margin-bottom: 2rem;
    }

    .story-content p {
      font-size: 1.2rem;
      color: #ccc;
      line-height: 1.7;
      text-align: justify;
    }

    @media (max-width: 768px) {
      .story-content h2 {
        font-size: 2rem;
      }

      .story-content p {
        font-size: 1rem;
      }
    }

    .about-details {
      background: #000;
      color: #fff;
      padding: 6rem 2rem;
    }

    .about-details-container {
      display: flex;
      align-items: center;
      gap: 3rem;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .about-text {
      flex: 1 1 500px;
    }

    .about-text h2 {
      font-size: 2.8rem;
      color: #3399ff;
      margin-bottom: 1.5rem;
    }

    .about-text p {
      font-size: 1.2rem;
      color: #ccc;
      line-height: 1.7;
      margin-bottom: 1.5rem;
      text-align: justify;
    }

    .about-image {
      flex: 1 1 400px;
    }

    .about-image img {
      width: 100%;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(51, 153, 255, 0.5);
    }

    @media (max-width: 768px) {
      .about-details-container {
        flex-direction: column;
        text-align: center;
      }

      .about-text h2 {
        font-size: 2rem;
      }

      .about-text p {
        font-size: 1rem;
      }
    }

    .about-courses {
      background: #000;
      color: #fff;
      padding: 6rem 2rem;
      text-align: center;
    }

    .courses-container {
      max-width: 1000px;
      margin: 0 auto;
    }

    .courses-container h2 {
      font-size: 3rem;
      color: #3399ff;
      margin-bottom: 2rem;
    }

    .courses-container p {
      font-size: 1.2rem;
      color: #ccc;
      line-height: 1.7;
      margin-bottom: 1.5rem;
      text-align: justify;
    }

    @media (max-width: 768px) {
      .courses-container h2 {
        font-size: 2rem;
      }

      .courses-container p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <?php include 'nav.html'; ?>

  <section class="about-hero">
    <div class="about-hero-content">
      <h1>About Gokul Computers</h1>
      <p>Empowering students with cutting-edge IT education since 2007.</p>
    </div>
  </section>

  <section class="about-story">
    <div class="story-content">
      <h2>Our Journey</h2>
      <p>
        Founded in 2007, Gokul Computers started with a mission to provide quality IT education in Gondia. Over
        the years, we have grown to become one of the most trusted institutions in the region, training
        thousands of students and professionals in computer technologies. We continually evolve our curriculum
        to match the latest industry trends, ensuring our students stay ahead in the ever-changing tech world.
      </p>
    </div>
  </section>

  <section class="about-details">
    <div class="about-details-container">
      <div class="about-text">
        <h2>Leading Computer Education Institute</h2>
        <p>
          Gokul Computer is a leading computer education institute building a skilled manpower pool for
          various IT-based requirements.
        </p>
        <p>
          The institute was setup in 2007 to help students, organizations, private firms, educational
          institutes, and training institutes by offering learning solutions. Gokul Computers has been
          successfully providing training since its inception to a wide range of students, teachers, and
          professionals.
        </p>
      </div>
      <div class="about-image">
        <img src="images/image1.jpg" alt="Gokul Computers Institute">
      </div>
    </div>
  </section>

  <section class="about-courses">
    <div class="courses-container">
      <h2>Our Expertise & Courses</h2>
      <p>
        Gokul Computer is an expert in learning content development, training delivery, education process
        management, and project development.
      </p>
      <p>
        The Computer and IT courses running at Gokul Computers include: Basics, MS-Office, C, C++, Java,
        Advanced Java, Oracle, Visual Basic, VB.Net, ASP.Net, C#.Net, Web Page Designing, PHP and MySQL,
        Hardware, Networking, Photoshop, Flash, Coreldraw, Graphic Design, Website Development, Search Engine
        Optimization, Software Testing, MS Project, Dot Net Courses, E-commerce, Java Scripting, University
        Syllabus of BE, Poly, BCCA, BCA, MCA, MCM, BSc, MSc, 11th & 12th IT and CS State CBSE Course, and Live
        Projects.
      </p>
      <p>
        Project guidance is provided for final-year students. Crash, fast-track, and regular batches for every
        course are available.
      </p>
    </div>
  </section>

  <?php include 'footer.html'; ?>

  <!-- GSAP & ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- GSAP animations -->
  <script>
    // About Hero: smooth fade-down
    gsap.from(".about-hero-content h1", {
      opacity: 0,
      y: -50,
      duration: 1.5,
      ease: "power2.out"
    });
    gsap.from(".about-hero-content p", {
      opacity: 0,
      y: -30,
      duration: 1.5,
      delay: 0.3,
      ease: "power2.out"
    });

    // Our Journey section: fade-up on scroll
    gsap.from(".story-content h2", {
      opacity: 0,
      y: 50,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-story",
        start: "top 80%",
      }
    });
    gsap.from(".story-content p", {
      opacity: 0,
      y: 60,
      duration: 1.5,
      delay: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-story",
        start: "top 80%",
      }
    });

    // About Details: fade + slide-in with stagger
    gsap.from(".about-text h2", {
      opacity: 0,
      y: 50,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-details",
        start: "top 80%",
      }
    });
    gsap.from(".about-text p", {
      opacity: 0,
      y: 40,
      duration: 1.5,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-details",
        start: "top 80%",
      }
    });
    gsap.from(".about-image img", {
      opacity: 0,
      scale: 0.8,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-details",
        start: "top 80%",
      }
    });

    // About Courses: smooth fade-up with staggered paragraphs
    gsap.from(".courses-container h2", {
      opacity: 0,
      y: 50,
      duration: 1.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-courses",
        start: "top 80%",
      }
    });
    gsap.from(".courses-container p", {
      opacity: 0,
      y: 40,
      duration: 1.5,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".about-courses",
        start: "top 80%",
      }
    });
  </script>

</body>

</html>
