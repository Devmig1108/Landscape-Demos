<?php
// 1. Define the SEO variables
$page_title = "Portfolio | Sosa's Veneer Stone | El Paso";
$page_description = "View our gallery of custom stone veneer, concrete driveways, wrought iron gates, and pergolas in El Paso, TX.";

// 2. Define the Base URL because this file is inside a subfolder (/portfolio/)
$base_url = '../';

// 3. Define the active page and specific CSS
$active_page = 'portfolio';
$page_css = 'css/portfolio.css';

// 4. Include the Header
include '../includes/header.php';
?>

<section class="internal-hero">
    <div class="hero-bg" style="background: var(--hero-overlay), url('<?php echo $base_url; ?>images/stone-facade.jpg') center/cover;"></div>
    <div class="hero-content">
        <span class="hero-label load-1">Our Portfolio</span>
        <h1 class="hero-title load-2">
            Project <i>Gallery.</i>
        </h1>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-container">

        <div class="filter-nav reveal-up">
            <button class="filter-btn hover-target active" data-filter="all">All Projects</button>
            <button class="filter-btn hover-target" data-filter="stone">Stone Veneer</button>
            <button class="filter-btn hover-target" data-filter="concrete">Concrete</button>
            <button class="filter-btn hover-target" data-filter="iron">Wrought Iron</button>
            <button class="filter-btn hover-target" data-filter="pergola">Pergolas</button>
        </div>

        <div class="gallery-grid reveal-up" style="transition-delay: 0.2s;">

            <div class="gallery-item hover-target" data-category="stone">
                <img src="<?php echo $base_url; ?>images/stone-facade.jpg" alt="Stone Facade" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Westside Facade</h4>
                    <p>Exterior Stone Veneer</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="concrete">
                <img src="<?php echo $base_url; ?>images/concrete-driveway.jpg" alt="Concrete Driveway" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Custom Driveway</h4>
                    <p>Concrete Pouring</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="stone">
                <img src="<?php echo $base_url; ?>images/stone-exterior.jpg" alt="Stone Exterior" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>White Stone Wrap</h4>
                    <p>Exterior Stone Veneer</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="iron">
                <img src="<?php echo $base_url; ?>images/gates.jpg" alt="Wrought Iron Gate" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Security Entry</h4>
                    <p>Wrought Iron Gates</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="concrete">
                <img src="<?php echo $base_url; ?>images/concrete.jpg" alt="Concrete Patio" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Patio Foundation</h4>
                    <p>Concrete Pouring</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="pergola">
                <img src="<?php echo $base_url; ?>images/pergola.jpg" alt="Custom Pergola" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Outdoor Living</h4>
                    <p>Bespoke Pergola</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="stone">
                <img src="<?php echo $base_url; ?>images/hero.jpg" alt="Stone Work" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Interior Fireplace</h4>
                    <p>Interior Stone Veneer</p>
                </div>
            </div>

            <div class="gallery-item hover-target" data-category="iron">
                <img src="<?php echo $base_url; ?>images/gates-2.jpg" alt="Iron Fence" onerror="this.style.backgroundColor='#111'">
                <div class="gallery-overlay">
                    <h4>Property Enclosure</h4>
                    <p>Wrought Iron Fencing</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-strip reveal-up">
    <h2>Start Your Transformation</h2>
    <p>Like what you see? Contact Sosa's Veneer Stone today to discuss your vision and receive a complimentary project estimate.</p>
    <a href="tel:9152828547" class="btn-gold hover-target" style="border-color: var(--brand-gold); color: var(--brand-gold);">Call (915) 282-8547</a>
</section>

<?php
// 5. Include the Footer
include '../includes/footer.php';
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        /* --- Gallery Filter Logic --- */
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        if (filterBtns && galleryItems) {
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('hide');
                        } else {
                            item.classList.add('hide');
                        }
                    });
                });
            });
        }
    });
</script>