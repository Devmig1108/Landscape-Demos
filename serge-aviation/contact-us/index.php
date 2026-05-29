<?php include '../includes/header.php'; ?>

<section class="internal-hero">
    <div class="hero-bg">
        <img src="../images/photo-1765873360315-b253774254eb.jpg" alt="Flight Deck Background"
            onerror="this.src='https://images.unsplash.com/photo-1540962351504-03099e0a754b?q=80&w=2000&auto=format&fit=crop';">
    </div>
    <div class="hero-overlay-1"></div>
    <div class="hero-overlay-2"></div>
    <div class="bg-tech-grid hero-grid"></div>

    <div class="hero-content">
        <p class="reveal-up">Reach Out Today</p>
        <h1 class="reveal-up" style="transition-delay: 100ms;">
            Contact Us
        </h1>
    </div>
</section>

<section class="contact-split container">
    
    <div class="contact-image-wrapper reveal-up">
        <img src="../images/contact/el-paso-texas-usa-downtown.jpg" alt="El Paso Skyline" onerror="this.src='https://images.unsplash.com/photo-1540962351504-03099e0a754b?q=80&w=800&auto=format&fit=crop';">
    </div>

    <div class="contact-content reveal-up" style="transition-delay: 200ms;">
        <p class="lead-text">Fill in the form and our team will get back to you within 24 Hours</p>
        
        <?php include '../includes/contact-form.php'; ?>

    </div>

</section>

<section class="map-wrapper reveal-up">
    
    <div class="floating-contact-card">
        <h3>Academy Headquarters</h3>
        <ul class="contact-info-list">
            <li>
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Location</strong>
                    <p>8100 Airport Rd<br>Santa Teresa, NM 88008</p>
                </div>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <div>
                    <strong>Call Us</strong>
                    <a href="tel:+15551234567">(555) 123-4567</a>
                </div>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Email</strong>
                    <a href="mailto:info@gforceacademy.com">info@gforceacademy.com</a>
                </div>
            </li>
        </ul>
    </div>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.940428383329!2d-106.6997!3d31.8611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e744e8!2s8100%20Airport%20Rd%2C%20Santa%20Teresa%2C%20NM%2088008!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<?php include '../includes/footer.php'; ?>