<?php
$hero_image = get_field('hero_image');
if (empty($hero_image)) {
  $hero_image = get_template_directory_uri() . '/img/hero-img.jpg';
}
$hero_text = get_field('hero_text');
if (is_home() || is_single()){
  $hero_image = get_template_directory_uri() . "/img/BlogHeader.jpg";
  $hero_text = "Blog";
}
elseif (empty($hero_text)) {
  $hero_text = get_the_title($post);
}
?>

<div class="hero" style="background-image: url('<?php echo $hero_image; ?>')">
  <div class="container">
    <?php if (is_single()): ?>
      <h1><a href="/blog/"><?php echo $hero_text; ?></a></h1>
    <?php else: ?>
      <h1><?php echo $hero_text; ?></h1>
    <?php endif; ?>
  </div>
</div>