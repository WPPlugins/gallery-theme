<?php
// Fotorama 4.6.4: http://fotorama.io/license/
?>
<link rel="stylesheet" href="<?php echo plugins_url().'/gallery-theme/themes/gallery-theme-fotorama/'; ?>fotorama.css">
<script src="<?php echo plugins_url().'/gallery-theme/themes/gallery-theme-fotorama/'; ?>fotorama.js"></script>
<?php $shuffle = "flase"; if($settings['orderby'] == "rand") $shuffle = "true"; ?>
<div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%" data-nav="thumbs" data-keyboard="true" <?php if($settings['orderby'] == "rand") echo 'data-shuffle="true"'; ?>>
	<?php foreach($images as $id): $image = gt_image($id); ?>
	<a href="<?php echo $image['full']; ?>"><img src="<?php echo $image['thumb']; ?>"></a>
	<?php endforeach; ?>
</div>