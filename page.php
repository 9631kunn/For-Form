<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex, nofollow">
    <title>FORM</title>
    <meta name="description" content="フォーム">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
  </head>
  <body>
		<main>
			<?php while (have_posts()): the_post(); the_content(); endwhile; ?>
    </main>
  </body>
</html>
