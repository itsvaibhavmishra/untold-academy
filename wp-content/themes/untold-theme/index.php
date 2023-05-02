<!-- Utilized by WordPress for index page -->

<?php get_header(); // calling header

    // loading wordpress blog posts using while loop
    while(have_posts()){    // have_posts() comes from wordpress and returns blogs
        the_post(); ?>
            <!-- HTML Mode -->
            <h2>
                <a href="<?php the_permalink() ?>"> <!-- returns parmalink for the selected post -->
                    <?php the_title() ?>
                </a>
            </h2>   <!-- Returns title for each post -->
            <?php the_content() ?>
            <hr>
    <?php }

    get_footer();   // calling footer
?>