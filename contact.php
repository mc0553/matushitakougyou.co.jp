<?php
/*
Template Name: contact
*/
?>

<!-- header.phpを読み込む -->
<?php get_header(); ?>

<section class="form" >
    <div class="contact-us">
        <?php echo do_shortcode('[mwform_formkey key="32"]'); ?>
   </div>
</section>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>