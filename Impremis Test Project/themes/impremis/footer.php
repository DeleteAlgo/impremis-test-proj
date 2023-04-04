<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package impremis
 */

?>
<?php 
		$header_titles = get_field('footer_title', 'option');
	?>
	<footer>
        <div class="banner-cont grid mt-20">
            <p style="color:#ffffff;" class="mt-20"><?php
				foreach($header_titles as $header){
					if($header['strong']){
			?> <strong><?php echo $header['title'];?></strong><?php }else{ echo trim($header['title']); }
				}
			?></p>
        </div>
    
        <?php get_template_part( 'template-parts/content', 'calendly' ); ?>
		<?php get_template_part( 'template-parts/content', 'partners' ); ?>

        <div class="grid mt-20 mx-3">
            <p style="text-align: center">Impremis Marketing © 2022 All rights reserved.</p>
            <p style="text-align: center">This Site Is Not A Part Of The Facebook Website Or Facebook Inc.</p>
            <p style="text-align: center">Additionally, This Site Is NOT Endorsed By Facebook In Any Way. FACEBOOK Is A Trademark Of FACEBOOK, Inc.</p>
            <p>
                <a style="color: #ffffff" href="https://impremis.com/privacy-policy/">
                    Privacy Policy
                </a>&nbsp; &nbsp;| &nbsp;&nbsp;
                <a href="https://impremis.com/contact/">
                    Contact Us
                </a>
            </p>

            <img width="120" height="66" class="m-5" src="/wp-content/uploads/2023/04/impremis-white.png" alt="logo" style="justify-self: center;">
        </div>
    </footer>
</body>
