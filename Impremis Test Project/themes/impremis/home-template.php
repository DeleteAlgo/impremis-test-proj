<?php
/*
Template Name: Homepage Template
*/

get_header();

$fields = get_fields();
?>
<section>
	<div class="bg-blue">
        <div class="partners grid grid-cols-3 md:grid-cols-3 lg:grid-cols-9 mb-7 mx-10 md:mx-20 lg:mx-20 py-5 px-0 md:px-5 lg:px-5">
			<?php 
				$partners_logo = $fields['partners_logo'];
				foreach( $partners_logo as $logo){
			?>
            <img src="<?php echo $logo['logo_url']?>" alt="<?php echo $logo['alt']?>">
			<?php
				}
			?>
        </div>

        <h1 class="title mb-20">Case Studies</h1>

        <div class="consultation-desc-cont grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 pb-20 mx-10 md:mx-5 lg:mx-20">
            <div class="bg-1 bg">
                <div class="bubble">
                    <p>We 7.5x the revenue per month for an already-established brand within 6 months!</p>
                </div>
            </div>
			<?php 
				$ohsnap = $fields['ohsnap'];
			?>
            <div class="oh-snap">
                <h2 class="title mb-2"><?php echo $ohsnap['title'];?></h2>
                <p><?php echo $ohsnap['description'];?></p>
                <ul class="mt-5">
					<?php 
						foreach($ohsnap['offers'] as $offers){
					?>
                    <li><?php echo $offers['description']; ?></li>
					<?php
						}
					?>
                </ul>
                <div class="btn-cont">
					<?php
						$os_button = $ohsnap['button'];
					?>
                    <a href="<?php echo $os_button['link']?>" class="btn btn-primary mt-6" <?php echo $os_button['target_blank'] ? 'target="_blank"' : "";?>><?php echo $os_button['title']?></a>
                </div>
            </div>
        </div>

        <div class="consultation-desc-cont grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mb-10 mx-10 md:mx-5 lg:mx-20 mt-20">
			<?php 
				$buddy_bites = $fields['buddy_bites'];
			?>
            <div class="oh-snap px-15">
                <h2 class="title mb-2"><?php echo $buddy_bites['title']?></h2>
                <p><?php echo $buddy_bites['description']?></p>
                <ul class="mt-10">
					<?php 
						foreach($buddy_bites['offers'] as $bb_offers){
					?>
                    <li><?php echo $bb_offers['description'];?></li>
					<?php } ?>
                </ul>
                <div class="btn-cont">
                    <?php
						$bb_button = $buddy_bites['button'];
					?>
                    <a href="<?php echo $bb_button['link']?>" class="btn btn-primary mt-6" <?php echo $bb_button['target_blank'] ? 'target="_blank"' : "";?>><?php echo $bb_button['title']?></a>
                </div>
            </div>
            <div class="bg bg-2">
                <div class="bubble">
                    <p>From making $0 to over $20k/mo in subscription revenue in less than 11 months!</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mb-10 mx-10 md:mx-5 lg:mx-20 mt-20">
			<?php 
				$eft = $fields['easy_fx_trading'];
			?>
            <div class="bg bg-3 mt-20">
                <div class="bubble2">
                    <p>From making $0 to over $20k/mo in subscription revenue in less than 11 months!</p>
                </div>
            </div>
            <div class="oh-snap px-15">
                <h2 class="title mb-2"><?php echo $eft['title'];?></h2>
                <p><?php echo $eft['description'];?></p>
				<ul class="mt-5">
                <?php 
						foreach($eft['offers'] as $eft_offers){
					?>
                    <li><?php echo $eft_offers['description'];?></li>
				<?php } ?>
				</ul>
                <div class="btn-cont">
					<?php
						$eft_button = $eft['button'];
					?>
                    <a href="<?php echo $eft_button['link']; ?>" class="btn btn-primary mt-6" <?php echo $eft_button['target_blank'] ? 'target="_blank"' : "";?>><?php echo $eft_button['title']; ?></a>
                </div>
            </div>
        </div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mb-10 mx-10 md:mx-5 lg:mx-20 mt-20 pt-20 mt-i-0">
            <?php 
				$wine_brothers = $fields['wine_brothers'];
			?>
			<div class="oh-snap mt-10 px-15">
                <h2 class="title mb-2"><?php echo $wine_brothers['title'];?></h2>
                <p><?php echo $wine_brothers['description'];?></p>
                <ul class="mt-10">
                    <?php 
						foreach($wine_brothers['offers'] as $wb_offers){
					?>
					<li><?php echo $wb_offers['description'];?></li>
					<?php }?>
                </ul>
                <div class="btn-cont mb-20">
					<?php $wb_button = $wine_brothers['button'];?>
                    <a href="<?php echo $wb_button['link']; ?>" class="btn btn-primary mt-6" <?php echo $wb_button['target_blank'] ? 'target="_blank"' : "";?>><?php echo $wb_button['title']; ?></a>
                </div>
            </div>
            <div class="bg bg-4">
                <div class="bubble3">
                    <p>From making $0 to over $20k/mo in subscription revenue in less than 11 months!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cssh-cont mt-20">
        <h1 class="title mb-20" style="color:#2c3895;">Client's Success Story Highlight </h1>
		<?php $testimonials = $fields['testimonials'];
			foreach($testimonials as $testimonial){
		?>
		
        <div class="yt-container mt-20">
            <iframe width="1010" height="568" src="<?php echo $testimonial['iframe_src'];?>" title="<?php echo $testimonial['iframe_title'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="testimonial-cont grid grid-cols-1 mt-5 mx-20" >
			<p class="title"><?php $quotes = $testimonial['quote'];
					foreach($quotes as $quote){
						if($quote['strong']){
				?> <strong><?php echo $quote['message'];?></strong><?php 
						}else{
							echo $quote['message'];
						}
					}
				?>
            </p>
        </div>
		
		<div>
			<h5 class="quote-name">
				<strong><?php echo $testimonial['name'];?></strong><br>
				<?php echo $testimonial['position'];?>
			</h5>
		</div>
		<?php } ?>
    </div>
</section>
<?php 
get_footer();
?>