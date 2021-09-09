<?php 
    class Hannelise_SortimentModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
            add_action('init', array($this, 'register_taxonomy'),0,99);
        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Gegenstände', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Gegestand', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Gegenstände', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Gegestand', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Gegestand Archive', 'textdomain' ),
                'attributes' => __( 'Gegestand Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Gegestand:', 'textdomain' ),
                'all_items' => __( 'Alle Gegenstände', 'textdomain' ),
                'add_new_item' => __( 'Gegestand erstellen', 'textdomain' ),
                'add_new' => __( 'Erstellen', 'textdomain' ),
                'new_item' => __( 'Gegestand erstellen', 'textdomain' ),
                'edit_item' => __( 'Bearbeite Gegestand', 'textdomain' ),
                'update_item' => __( 'Aktualisiere Gegestand', 'textdomain' ),
                'view_item' => __( 'Gegestand anschauen', 'textdomain' ),
                'view_items' => __( 'Gegenstände anschauen', 'textdomain' ),
                'search_items' => __( 'Suche Gegestand', 'textdomain' ),
                'not_found' => __( 'Keine Gegenstände gefunden.', 'textdomain' ),
                'not_found_in_trash' => __( 'Keine Gegenstände im Papierkorb gefunden.', 'textdomain' ),
                'featured_image' => __( 'Beitragsbild', 'textdomain' ),
                'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
                'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
                'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
                'insert_into_item' => __( 'In Gegestand einfügen', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Zu diesem Gegestand hochgeladen', 'textdomain' ),
                'items_list' => __( 'Gegenstände Liste', 'textdomain' ),
                'items_list_navigation' => __( 'Gegenstände Liste Navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Gegenstände Liste', 'textdomain' ),
                'item_published' => __( 'Gegestand veröffentlicht', 'textdomain' ),
                'item_published_privately' => __( 'Gegestand privat veröffentlicht', 'textdomain' ),
                'item_reverted_to_draft' => __( 'Gegestand als Entwurf gespeichert', 'textdomain' ),
                'item_scheduled' => __( 'Gegestand geplant', 'textdomain' ),
                'item_updated' => __( 'Gegestand aktualisiert', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Gegestand', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-cart',
                'supports' => array('title'),
                'taxonomies' => array('gruppe'),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 5,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type( 'gegenstand', $args );
        }

        public function register_taxonomy() {
            $labels = array(
                'name'              => _x( 'Gruppen', 'taxonomy general name', 'textdomain' ),
                'singular_name'     => _x( 'Gruppe', 'taxonomy singular name', 'textdomain' ),
                'search_items'      => __( 'Suche Gruppen', 'textdomain' ),
                'all_items'         => __( 'Alle Gruppen', 'textdomain' ),
                'parent_item'       => __( 'Eltern Gruppe', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Gruppe:', 'textdomain' ),
                'edit_item'         => __( 'Bearbeite Gruppe', 'textdomain' ),
                'update_item'       => __( 'Aktualisiere Gruppe', 'textdomain' ),
                'add_new_item'      => __( 'Gruppe hinzufügen', 'textdomain' ),
                'new_item_name'     => __( 'Neuer Gruppe Name', 'textdomain' ),
                'menu_name'         => __( 'Gruppe', 'textdomain' ),
            );
            $args = array(
                'labels' => $labels,
                'description' => __( '', 'textdomain' ),
                'hierarchical' => false,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'show_tagcloud' => true,
                'show_in_quick_edit' => true,
                'show_admin_column' => false,
                'show_in_rest' => true,
            );
            register_taxonomy( 'gruppe', array('gegenstand'), $args );
        }
    }
    new Hannelise_SortimentModel();