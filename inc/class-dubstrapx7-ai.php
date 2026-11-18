<?php
/**
 * DubstrapX7 AI Compatibility Layer
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

namespace DubstrapX7\AI;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Compatibility {
    public static function init() {
        add_filter( 'rest_api_init', [ __CLASS__, 'register_endpoints' ], 100 );
    }

    public static function register_endpoints() {
        register_rest_route( 'dubstrapx7/v1', '/theme-info', [
            'methods'             => 'GET',
            'callback'            => [ __CLASS__, 'theme_info' ],
            'permission_callback' => '__return_true',
        ]);
    }

    public static function theme_info() {
        return [
            'name'        => 'DubstrapX7',
            'version'     => '7.0.0',
            'stack'       => [ 'Tailwind CSS', 'Alpine.js', 'Lucide Icons' ],
            'dark_mode'   => true,
            'block_ready' => true,
        ];
    }
}
