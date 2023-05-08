<?php

    function untold_files() {
        // inside of this function we could load multiple css or js files
        wp_enqueue_style('untold_main_styles', get_theme_file_uri('/build/style-index.css'));   // the first argument would accept a name for our new css and the second argument accepts a location for the css file but here we are using WordPress function to fetch style.css file
        wp_enqueue_style('untold_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_script('main-academy-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);  // 1st: location of script, 2nd: script types (NULL if none required), 3rd: Version, 4th: load at the end or not (true is yes)
    }

    // this is a WordPress hook also untold_files has no paranthesis cause we do not load it imediately
    add_action('wp_enqueue_scripts', 'untold_files'); // utilized by wp for passing instructions for wp
    // first argument accepts what type of instruction we want to pass
        // wp_enqueue_scripts is for making wp know we are trying to load a CSS or JS file
    // second argument accepts name of the function which would load our file
        // this can be of any name
?>