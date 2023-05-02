<?php

    function untold_files() {
        // inside of this function we could load multiple css or js files
        wp_enqueue_style('untold_mail_styles', get_stylesheet_uri());   // the first argument would accept a name for our new css and the second argument accepts a location for the css file but here we are using WordPress function to fetch style.css file
    }

    // this is a WordPress hook also untold_files has no paranthesis cause we do not load it imediately
    add_action('wp_enqueue_scripts', 'untold_files'); // utilized by wp for passing instructions for wp
    // first argument accepts what type of instruction we want to pass
        // wp_enqueue_scripts is for making wp know we are trying to load a CSS or JS file
    // second argument accepts name of the function which would load our file
        // this can be of any name
?>