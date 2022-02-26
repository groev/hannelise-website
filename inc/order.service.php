<?php 


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    class HanneliseOrderService {
        public function __construct() {
            add_action('rest_api_init', array($this, 'register_endpoint'));
        }

        public function register_endpoint() {
            register_rest_route( 'hannelise/v1', '/order', array(
                'methods' => 'POST',
                'callback' => array($this, 'handle_request'),
            ));
        }

        public function handle_request($r) {
            if(!$r['email']) return wp_send_json_error('No email');
            if(!$r['name']) return wp_send_json_error('No name');
            if(!$r['cart']) return wp_send_json_error('No products');

            $success1 = $this->send_mail_to_company($r);
            $success2 = $this->send_mail_to_user($r);
            if($success1 && $success2) {
                return wp_send_json_success( 'order successfull' );
            }
            return new WP_Error('Order failed');

        }

        public function send_mail_to_company($data) {
            $headers = array('Content-Type: text/html; charset=UTF-8','From: '.get_bloginfo('name').' <post@hannelise.de>');
            $to = 'm.westhofen@12-05.de';
            $subject = 'Neue Bestellung im hannelise Shop';
            ob_start();
            include get_template_directory().'/inc/mail.view.php';
            $body = ob_get_clean();
            error_log($body);
            return wp_mail( $to, $subject, $body, $headers );
        }
        
        public function send_mail_to_user($data) {
            $headers = array('Content-Type: text/html; charset=UTF-8','From: '.get_bloginfo('name').' <post@hannelise.de>');
            $to = $data['email'];
            $subject = 'Deine Bestellung bei Hannelise';
            ob_start();
            include get_template_directory().'/inc/mail.view.php';
            $body = ob_get_clean();
            $headers = array('Content-Type: text/html; charset=UTF-8');
            return wp_mail( $to, $subject, $body, $headers );
        }

    }
    new HanneliseOrderService();
