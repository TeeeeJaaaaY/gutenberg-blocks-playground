<?php

/**
 * Plugin Name: Custom Gutenberg Blocks
 * Description: gutenberg blocks sandbox
 * Version: 1.0
 */

 function register_resources() {
    wp_enqueue_script(
        'teej-colored-block',
        plugins_url('block.js', __FILE__),
        ['wp-blocks', 'wp-element'],
        false,
        true
    );
 }
 add_action('enqueue_block_editor_assets', 'register_resources');
