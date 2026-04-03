<div class="quote-widget" style="box-shadow: var(--shadow-accent); border-color: var(--lh-orange);">
    <h3>Request an Estimate</h3>
    <p>Enter your details and our family will reach out today.</p>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div id="form-alert" style="position: relative; background: var(--lh-green); color: white; padding: 15px 40px 15px 15px; border-radius: 8px; margin-bottom: 20px; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: opacity 0.5s ease;">
            <i class="fas fa-check-circle" style="margin-right: 5px;"></i> Thanks! We will contact you shortly.
            <button onclick="document.getElementById('form-alert').style.display='none'" style="position: absolute; right: 15px; top: 15px; background: none; border: none; color: white; font-size: 1.2rem; cursor: pointer; line-height: 1;">&times;</button>
        </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
        <div id="form-alert" style="position: relative; background: #dc3545; color: white; padding: 15px 40px 15px 15px; border-radius: 8px; margin-bottom: 20px; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: opacity 0.5s ease;">
            <i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i> Missing information. Please try again.
            <button onclick="document.getElementById('form-alert').style.display='none'" style="position: absolute; right: 15px; top: 15px; background: none; border: none; color: white; font-size: 1.2rem; cursor: pointer; line-height: 1;">&times;</button>
        </div>
    <?php endif; ?>

    <form action="<?php echo $basePath; ?>process-form.php" method="POST">
        <div class="form-group">
            <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address (Optional)">
        </div>
        <div class="form-group">
            <select name="service" class="form-control" required>
                <option value="" disabled selected>Select Service Needed...</option>
                <option value="Weed Control">Weed Control (Rock/Dirt)</option>
                <option value="Lawn Care">Lawn Care & Fertilization</option>
                <option value="Pest Control">Exterior Pest Protection</option>
                <option value="Other">Multiple Services / Other</option>
            </select>
        </div>

        <?php if (strpos($_SERVER['REQUEST_URI'], 'contact') !== false): ?>
            <div class="form-group">
                <textarea name="message" class="form-control" rows="4" placeholder="Tell us a bit about your property..." style="resize: vertical;"></textarea>
            </div>
        <?php endif; ?>

        <button type="submit" class="btn-primary widget-btn" style="width: 100%; justify-content: center;"><span>Send Request</span></button>
    </form>
</div>

<script>
    setTimeout(function() {
        var alertBox = document.getElementById('form-alert');
        if (alertBox) {
            alertBox.style.opacity = '0';
            setTimeout(function() {
                alertBox.style.display = 'none';
            }, 500); // Waits for the CSS fade transition to finish
        }
    }, 5000); // 5000ms = 5 seconds
</script>