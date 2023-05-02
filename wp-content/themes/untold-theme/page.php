<!-- Utilized by WordPress for Pages -->

<?php
    get_header();   // calling header
    // loading wordpress blog posts using while loop
    while(have_posts()){    // have_posts() comes from wordpress and returns blogs
        the_post(); ?>
            <!-- HTML Mode -->
            <h2>This is a Page loaded using page.php</h2>
            <h3>
                <?php the_title() ?>
            </h3>   <!-- Returns title for each post -->
            <?php the_content() ?>
            <hr>
    <?php }

    get_footer();   // calling footer
?>