<?php
/*
 Template Name: Contact
 */
 ?>
 <?php get_header(); ?>
<div class="content">
 
        <section id="main-content">
        	<div class="contact-info">
			        <h4>Địa chỉ liên lạc</h4>
			        <p>06 Tran Van On, Phu Hoa, TDM, BD</p>
			        <p>0650 3 865 865</p>
			</div>
			<div class="contact-form">
			        <?php echo do_shortcode('[contact-form-7 id="1724" title="Contact form 1"]'); ?>
			</div>
        </section>
        <section id="sidebar">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>