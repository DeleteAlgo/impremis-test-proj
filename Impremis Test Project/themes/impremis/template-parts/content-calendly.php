<?php
/**
 * Template part for displaying calendly
 *
 */
	$calendly = get_field('calendly_src', 'option');
?>
<div class="calendly-cont mx-10" style="position: relative;min-width:320px;height:630px;" data-processed="true">
  	<iframe src="<?php echo $calendly ?>" width="100%" height="100%" frameborder="0"></iframe>
  	<script data-minify="1" type="text/javascript" src="https://impremis.com/wp-content/cache/min/1/assets/external/widget.js?ver=1679872733" async=""></script>
</div>