<?php
/* Template Name: Request a Call */
get_header(); ?>
<div class="container">
  <h1>Request a Call</h1>
  <p>Fill this short form and our operations manager will call you shortly.</p>
  <div class="card">
    <?php echo do_shortcode('[contact-form-7 id="123" title="Request a Call"]'); ?>
  </div>
</div>
<?php get_footer(); ?>