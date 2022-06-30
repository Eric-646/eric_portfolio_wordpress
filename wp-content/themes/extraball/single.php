<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
</head>

<body>
    <main>

        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </main>
</body>

</html>