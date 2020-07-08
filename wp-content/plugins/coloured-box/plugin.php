<?php

/**
 * Plugin Name: Gutenberg Coloured Box Block
 * Description: Tuts+ lesson on create gutenbergblock
 * Version: 1.0
 */

 function register_resources() {
    wp_enqueue_script(
        'tutsplus-colored-block',
        plugins_url('block.js', __FILE__),
        ['wp-blocks', 'wp-element'],
        false,
        true
    );
 }
 add_action('enqueue_block_editor_assets', 'register_resources');
