<!-- Utilized by WordPress for single blog posts -->
<?php
    get_header();   // calling header

    // loading wordpress blog posts using while loop
    while(have_posts()){    // have_posts() comes from wordpress and returns blogs
        the_post(); ?>
            <!-- HTML Mode -->
            <h2>
                    <?php the_title() ?>
            </h2>   <!-- Returns title for each post -->
            <?php the_content() ?>
    <?php }

    get_footer();   // calling footer
?>