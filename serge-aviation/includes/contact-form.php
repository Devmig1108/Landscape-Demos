<form action="process-contact.php" method="POST" class="gforce-form">
    
    <div class="form-group">
        <label for="fullName">Full Name <span class="text-red">*</span></label>
        <input type="text" id="fullName" name="fullName" placeholder="John Doe" required>
    </div>

    <div class="form-group">
        <label for="email">Email Address <span class="text-red">*</span></label>
        <input type="email" id="email" name="email" placeholder="john@example.com" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number <span style="text-transform:none; color:var(--gray-400); font-size:0.8rem;">(Optional, for faster response)</span></label>
        <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
    </div>

    <div class="form-group">
        <label for="interest">Area of Interest</label>
        <select id="interest" name="interest" style="width: 100%; padding: 16px 20px; background-color: #f8f9fa; border: 1px solid transparent; border-radius: 8px; font-family: 'Inter', sans-serif; font-size: 1rem; color: var(--brand-navy); outline: none; cursor: pointer; transition: all 0.3s ease;">
            <option value="" disabled selected>Select a program...</option>
            <option value="private_pilot">Private Pilot License (PPL)</option>
            <option value="commercial_pilot">Commercial Pilot Training</option>
            <option value="discovery_flight">Discovery Flight / Intro</option>
            <option value="general_inquiry">General Question</option>
        </select>
    </div>

    <div class="form-group">
        <label for="message">Questions or Goals?</label>
        <textarea id="message" name="message" rows="4" placeholder="Tell us a bit about your aviation goals..."></textarea>
    </div>

    <!-- <div class="recaptcha-box">
        <div class="rc-left">
            <input type="checkbox" id="imNotARobot" required>
            <label for="imNotARobot">I'm not a robot</label>
        </div>
        <div class="rc-right">
            <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA logo">
            <span>reCAPTCHA</span>
        </div>
    </div> -->

    <button type="submit" class="btn-send">Request Academy Info</button>
    
</form>