<?php
    /**
     * Plugin Name: Meta Box Conditional Logic
     * Plugin URI: https://metabox.io/plugins/meta-box-conditional-logic/
     * Description: Control the Visibility of Meta Boxes and Fields or even HTML elements with ease.
     * Version: 1.6.4
     */

// Prevent loading this file directly.
    if (defined('ABSPATH')) {

        if (!function_exists('mb_conditional_logic_load')) {
            /**
             * Hook to 'init' with priority 5 to make sure all actions are registered before Meta Box 4.9.0 runs
             */
            add_action('init', 'mb_conditional_logic_load', 5);

            /**
             * Load plugin files after Meta Box is loaded
             */
            function mb_conditional_logic_load()
            {

                if (!defined('RWMB_VER') || class_exists('MB_Conditional_Logic')) {
                    return;
                }

                require dirname(__FILE__) . '/inc/class-mb-conditional-logic.php';

                $conditional_logic = new MB_Conditional_Logic();
                $conditional_logic->init();
            }
        }
    }
