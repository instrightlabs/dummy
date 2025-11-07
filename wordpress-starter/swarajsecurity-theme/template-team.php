<?php
/* Template Name: Team */
get_header(); ?>
<div class="container">
  <h1>Our Team</h1>
  <p>Our professionals come from law enforcement, corporate security, and emergency response backgrounds.</p>
  <div class="grid-3" style="margin-top:12px;">
    <div class="card"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/team1.jpg" alt="Team member" style="width:100%; border-radius:8px;"><h3>Ajay Kumar</h3><p>Head of Operations — 15+ years in security management.</p></div>
    <div class="card"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/team2.jpg" alt="Team member" style="width:100%; border-radius:8px;"><h3>Rohit Singh</h3><p>Training & Compliance Officer — ex-police trainer.</p></div>
    <div class="card"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/team3.jpg" alt="Team member" style="width:100%; border-radius:8px;"><h3>Neha Verma</h3><p>Client Relations — operations coordinator.</p></div>
  </div>
</div>
<?php get_footer(); ?>