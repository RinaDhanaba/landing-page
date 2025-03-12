<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Website Development</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!-- Hero Section -->
    <!-- <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>🚀 Take Your Business Online Today!</h1>
            <p>Your customers are online—are you? Get a stunning website that converts.</p>
            <a href="#contact" class="cta-button">Get Started Now</a>
        </div>
        <div class="animation-background"></div>
    </section> -->

    <section class="hero">
        <canvas id="particleCanvas"></canvas>
        <div class="hero-content">
            <h1>🚀 Take Your Business Online Today!</h1>
            <p>Your customers are online—are you? Get a stunning website that converts.</p>
            <a href="#contact" class="cta-button">Get Started Now</a>
        </div>
    </section>

    <!-- Why You Need a Website -->
    <section class="content-section why-website">
    <h2>📢 Why Does Your Business Need a Website?</h2>
    <p>Imagine a store that’s open 24/7, reaching customers across the globe. That’s what a website does for you!</p>
    <div class="icons-grid">
        <?php
        $reasons = [
            ["Reach More Customers", "👥"],
            ["Open 24/7", "⏰"],
            ["Build Credibility", "🛡️"],
            ["Boost Sales", "💰"]
        ];
        foreach ($reasons as $reason) {
            echo "<div class='icon-item'>";
            echo "<div class='icon-bg'>";
            echo "<span class='icon'>{$reason[1]}</span>";
            echo "</div>";
            echo "<p>{$reason[0]}</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>


    <!-- Our Services -->
    <section class="content-section">
        <h2>💡 What We Offer</h2>
        <p>We design, develop, and optimize websites to help businesses grow.</p>
        <div class="services">
            <?php
            $services = [
                ["Web Design", "./images/photo-1467232004584-a241de8bcf5d.avif", "Beautiful, modern designs that match your brand."],
                ["Web Development", "./images/photo-1487014679447-9f8336841d58.avif", "Custom-built websites tailored to your needs."],
                ["E-commerce", "./images/photo-1481487196290-c152efe083f5.avif", "Online stores with secure payment integration."],
                ["SEO & Optimization", "./images/photo-1467232004584-a241de8bcf5d.avif", "Get found on Google and increase traffic."]
            ];
            foreach ($services as $service) {
                echo "<div class='service-item'>";
                echo "<img src='{$service[1]}' alt='{$service[0]}'>";
                echo "<h3>{$service[0]}</h3>";
                echo "<p>{$service[2]}</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <section class="content-section how-we-work">
    <h2>🛠 How We Build Your Dream Website</h2>
    <p>We follow a structured process to ensure you get the best results.</p>
    <div class="steps-container">
        <div class="step">
            <div class="step-icon">1️⃣</div>
            <div class="step-content">
                <h3>Consultation</h3>
                <p>We understand your business goals and needs.</p>
            </div>
        </div>
        <div class="connector"></div>
        <div class="step">
            <div class="step-icon">2️⃣</div>
            <div class="step-content">
                <h3>Design & Development</h3>
                <p>Our experts bring your vision to life.</p>
            </div>
        </div>
        <div class="connector"></div>
        <div class="step">
            <div class="step-icon">3️⃣</div>
            <div class="step-content">
                <h3>Launch & Support</h3>
                <p>We go live and provide ongoing support.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Testimonials -->
    <section class="content-section testimonials">
    <h2>🌟 What Our Clients Say</h2>
    <div class="testimonial-slider">
        <div class="slider-container">
            <?php
            $reviews = [
                ["John Doe", "CEO, Tech Solutions", "Outstanding service! My website is now faster and more user-friendly.", "user1"],
                ["Sarah Smith", "Founder, Beauty Bliss", "Amazing designs! My business has grown so much thanks to this.", "user2"],
                ["Michael Lee", "Marketing Head, FoodieHub", "Professional and creative! They delivered exactly what I needed.", "user3"]
            ];
            foreach ($reviews as $review) {
                echo "<div class='testimonial'>";
                echo "<div class='testimonial-content'>";
                echo "<p>❝ {$review[2]} ❞</p>";
                echo "<h4>{$review[0]}</h4>";
                echo "<span>{$review[1]}</span>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <button class="prev-btn">❮</button>
        <button class="next-btn">❯</button>
    </div>
</section>


    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>📞 Get in Touch</h2>
        <p>Let’s discuss your project. Contact us today!</p>
        <form id="contactForm">
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <textarea name="message" id="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
        <p id="formMessage"></p>
    </form>
    </section>

    <script src="./script.js"></script>
</body>
</html>
