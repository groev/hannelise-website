<?php 

    define('HLPATH', get_template_directory(__DIR__));

    class HanneLise_Theme {
        public function __construct() {
            $this->load_inc();
            add_action('wp_enqueue_scripts', array($this, 'load_assets'));
            add_action('after_setup_theme', array($this, 'register_menus'),0);
            add_action('init', array($this, 'theme_support'),0);
            add_filter('acf/settings/save_json', array($this, 'save_json'));
            add_filter('acf/settings/load_json', array($this, 'load_json'));
        }

        public function load_inc() {
            require_once HLPATH.'/inc/settings.class.php';
            require_once HLPATH.'/inc/sortiment.model.php';

        }

        public function load_assets() {
            wp_enqueue_style( 'hannelise-style', get_stylesheet_uri() );
            wp_enqueue_script('hannelise-script', get_stylesheet_directory_uri().'/assets/js/custom.js', array('jquery'), '0.1', false);
            wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal', array(), '1.0', false);
        }

        public function register_menus() {
            register_nav_menus( array(
                'main_menu' => __( 'Hauptmenü', 'hannelise' ),
                'footer_menu'  => __( 'Footer Menü', 'hannelise' ),
                'sub_menu'  => __( 'Sub-Header Menü', 'hannelise' )

            ));
        }

        public function theme_support() {
            add_theme_support( 'post-thumbnails' );
        }

        public function save_json( $path ) {
            $path = get_stylesheet_directory() . '/fields';
            return $path;
        }

        public function load_json($paths) {
            unset($paths[0]);
            $paths[] = get_stylesheet_directory() . '/fields';
            return $paths;
        }
         
    }  
    new HanneLise_Theme();