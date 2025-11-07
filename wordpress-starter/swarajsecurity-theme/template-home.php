<?php
/* Template Name: Home Landing */
get_header(); ?>
<section class="hero">
  <div class="container">
    <h1>SwarajSecurity — Trusted Security Services in Lucknow</h1>
    <p>Professional, licensed security personnel &amp; modern surveillance solutions — protecting homes, businesses and events 24/7.</p>
    <p><a class="cta" href="<?php echo home_url('/request-a-call'); ?>">Request a Call</a> <a class="cta" href="<?php echo home_url('/services'); ?>" style="background:#0b3d91;">Our Services</a></p>
  </div>
</section>
<div class="container">
  <h2>Our Services</h2>
  <div class="grid-3">
    <div class="card"><h3>Manned Guarding</h3><p>Uniformed security guards for residential, commercial and industrial properties.</p></div>
    <div class="card"><h3>Event Security</h3><p>Crowd control, VIP protection and entry management for events.</p></div>
    <div class="card"><h3>CCTV &amp; Alarm Monitoring</h3><p>Installation, monitoring and remote access solutions.</p></div>
  </div>

  <h2 style="margin-top:28px;">Why Choose SwarajSecurity</h2>
  <div class="grid-3" style="margin-top:12px;">
    <div class="card"><strong>Local Expertise</strong><p>Fast response times across Lucknow.</p></div>
    <div class="card"><strong>Trained Personnel</strong><p>Background-checked and continuously trained teams.</p></div>
    <div class="card"><strong>24/7 Support</strong><p>Dedicated operations and transparent pricing.</p></div>
  </div>

  <h2 style="margin-top:28px;">Request a Call</h2>
  <div class="card">
    <?php
    // Insert Contact Form 7 shortcode by replacing ID if you import forms.
    echo do_shortcode('[contact-form-7 id="123" title="Request a Call"]');
    ?>
  </div>
</div>
<?php get_footer(); ?>