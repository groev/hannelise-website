<?php 

    class HanneLise_Settings {
        public function __construct() {
            add_action('acf/init', array($this, 'add_settings_page'));
        }

        public function add_settings_page() {
            acf_add_options_page(array(
                'page_title' 	=> 'Hannelise',
                'menu_title'	=> 'Hannelise',
                'menu_slug' 	=> 'hannelise-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));
        }
    }

    new HanneLise_Settings();