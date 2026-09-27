<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>テスト表示</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<img src="<?php echo get_theme_file_uri(
  '/assets/images/fv-text3.png',
); ?>" alt="好きが見つかる。一緒に成長できる。" class="fv-text">

  <p>この文字を変更して保存してみてください。</p>

  <?php wp_footer(); ?>
</body>
</html>