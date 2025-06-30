<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gokul Computer</title>
    <link
      href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=DM+Serif+Display:italic&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php include 'nav.html'; ?>
    <main>
      <section class="hero">
        <h1>
          We only <span class="highlight">teach</span> what we are really
          <em>good</em> at.
        </h1>
        <button class="cta-button" id="checkCoursesBtn">Check Courses – Make an Impact</button>
        <p class="subtext">
          Get ready to <a href="#">accelerate your career</a> with customized
          courses and leave your mark in the tech industry.
        </p>
      </section>
      <section class="about-section">
        <div class="about-content">
          <h2>Gokul Computers is a leading computer education institute.</h2>
          <p>
            Institute is building skilled manpower pool for various IT-based
            requirements. The institute, which was set up in 2007, helps
            students, organizations, private firms, education institutes, and
            training centers by offering learning solutions. Gokul Computers has
            successfully provided training since its inception to a wide range
            of students, teachers, and professionals.
          </p>
        </div>
        <div class="slider-container">
          <div class="slider">
            <img src="images/image2.jpg" alt="Slide 2" />
            <img src="images/image1.jpg" alt="Slide 1" />
            <img src="images/image3.jpg" alt="Slide 3" />
            <img src="images/image4.jpg" alt="Slide 4" />
            <img src="images/image5.jpg" alt="Slide 5" />
          </div>
        </div>
      </section>
      <section class="who-we-are">
        <div class="who-content">
          <h2>Who We Are ??</h2>
          <p>
            Gokul Computer expert is in learning content development, training
            delivery, and education process management as well as project
            development. Computer and IT courses running in Gokul Computers are:
            Basics, MS-Office, C, C++, Java, Advanced Java, Oracle, Visual
            Basic, VB.Net, ASP.Net, C#.Net, Web Page Designing, PHP and MySQL,
            Hardware, Networking, Photoshop, Flash, Coreldraw, Graphic Design,
            Website Development, Search Engine Optimization, Software Testing,
            MS Project, Dot Net Courses, E-commerce, JavaScript, University
            syllabi of BE, Polytechnic, BCCA, BCA, MCA, MCM, BSc, MSc, 11th &
            12th IT and CS (State/CBSE), and Live Projects. Project guidance is
            provided for final-year students. Crash, Fast Track, and Regular
            batches for every course are available.
          </p>
        </div>
      </section>
      <section class="vision-mission-career">
        <div class="vmc-container">
          <div class="vmc-box">
            <h3>Our Vision</h3>
            <p>
              We will be the preeminent intellectual and creative center for
              effective engagement in a world that increasingly demands better
              mankind, technically sound, well-trained, with organizational
              attitude to meet the needs of today.
            </p>
          </div>
          <div class="vmc-box">
            <h3>Mission</h3>
            <p>
              Our mission is to teach & create every student in order to improve
              their quality of life and ability to participate in today’s
              technological era.
            </p>
          </div>
          <div class="vmc-box">
            <h3>Career & Counselling</h3>
            <p>
              Gokul Computers provides guidance on career development for its
              students. Counseling is available for selecting the right courses.
            </p>
          </div>
        </div>
      </section>
      <section class="testimonials-director">
        <div class="testimonial-box">
          <h2>Testimonials</h2>
          <blockquote>
            “Since long ago, Gokul Computers is one of the trusted institutions
            in the district for its academic excellence.”
          </blockquote>
          <p class="author">— Mr. Vinod Bisen, Director, "OrisonHost"</p>
        </div>

        <div class="director-box">
          <img src="images/muneshSir.png" alt="Dr. Munesh Thakre" />
          <div class="director-info">
            <h2>Our Director</h2>
            <h3>Dr. Munesh Thakre</h3>
            <p>
              Ph.D., M. Phil. (IT), MCA, MCM, M.Com, B.Ed.,<br />
              PGDCCA, PGDCA<br />
              Assistant Professor - Dept. of Computer Management,<br />
              N.M.D. College, Gondia
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php include 'footer.html'; ?>
    <script>
  document.getElementById('checkCoursesBtn').addEventListener('click', function() {
    window.location.href = 'courses.php';
  });
</script>

  </body>
</html>
