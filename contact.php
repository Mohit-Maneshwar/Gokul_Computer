<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'JetBrains Mono', monospace;
        background-color: #f4f4f4;
        color: #333;
    }
    .contact-section {
  padding: 5rem 2rem;
  background: radial-gradient(circle at center, #001f4d 0%, #000 80%);
  color: #fff;
}
.contact-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 3rem;
  max-width: 1200px;
  margin: 0 auto;
  flex-wrap: wrap;
}
.contact-info {
  flex: 1 1 300px;
}
.contact-info h2 {
  font-size: 2.5rem;
  color: #3399ff;
  margin-bottom: 1rem;
}
.contact-info p {
  font-size: 1.1rem;
  color: #ccc;
  margin-bottom: 2rem;
}
.contact-info ul {
  list-style: none;
  padding: 0;
}
.contact-info ul li {
  font-size: 1rem;
  color: #ccc;
  margin-bottom: 1rem;
}
.contact-info ul li i {
  color: #3399ff;
  margin-right: 0.8rem;
}

.contact-form {
  flex: 1 1 500px;
}
.contact-form form {
  display: flex;
  flex-direction: column;
}
.contact-form input,
.contact-form textarea {
  padding: 1rem;
  margin-bottom: 1rem;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  background: #222;
  color: #fff;
}
.contact-form input::placeholder,
.contact-form textarea::placeholder {
  color: #aaa;
}
.contact-form button {
  padding: 1rem;
  background: #3399ff;
  color: #000;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
}
.contact-form button:hover {
  background: #267acc;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .contact-container {
    flex-direction: column;
    text-align: center;
  }
  .contact-form input,
  .contact-form textarea {
    font-size: 1rem;
  }
}

</style>
</head>
<body>
<?php include 'nav.html'; ?>
    <section class="contact-section" id="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact Us</h2>
      <p>We'd love to hear from you! Reach out with any questions or inquiries.</p>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i> Gondia, Maharashtra</li>
        <li><i class="fas fa-phone-alt"></i> +91 12345 67890</li>
        <li><i class="fas fa-envelope"></i> gokulcomputers@example.com</li>
      </ul>
    </div>

    <div class="contact-form">
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>
  <?php include 'footer.html'; ?>

</body>
</html>