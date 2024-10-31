<?php
/**
 * Plugin Name: Portuguese States for Woocommerce
 * Plugin URI: https://profiles.wordpress.org/nummell/
 * Description: Ads Portuguese States to Woocommerce
 * Version: 20.1.4
 * Author: nummell
 * Author URI: https://instagram.com/nummell
 * WC tested up to: 3.8.1
 * Requires at least: 4.6
 * Requires PHP: 5.6
 * Tested up to: 5.3.1
 * Stable tag: 20.1.4
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: portuguese-states-for-woocommerce
 * Domain Path: /languages 
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//Languages
add_action( 'plugins_loaded', 'portuguese_states_for_woocommerce_load_plugin_textdomain' );
function portuguese_states_for_woocommerce_load_plugin_textdomain() {
    //load_plugin_textdomain( 'portuguese-states-for-woocommerce', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	load_plugin_textdomain( 'portuguese-states-for-woocommerce' );
}


add_filter( 'woocommerce_states', 'portuguese_states_for_woocommerce' );

function portuguese_states_for_woocommerce( $states ) {


$states['PT'] = array(
	'AV' => __( 'Aveiro', 'portuguese-states-for-woocommerce' ),
	'BE' => __( 'Beja', 'portuguese-states-for-woocommerce' ),
	'BR' => __( 'Braga', 'portuguese-states-for-woocommerce' ),
	'BA' => __( 'Bragança', 'portuguese-states-for-woocommerce' ),
	'CB' => __( 'Castelo Branco', 'portuguese-states-for-woocommerce' ),
	'CO' => __( 'Coimbra', 'portuguese-states-for-woocommerce' ),
	'EV' => __( 'Évora', 'portuguese-states-for-woocommerce' ),
	'FA' => __( 'Faro', 'portuguese-states-for-woocommerce' ),
	'GU' => __( 'Guarda', 'portuguese-states-for-woocommerce' ),
	'LE' => __( 'Leiria', 'portuguese-states-for-woocommerce' ),
	'LI' => __( 'Lisbon', 'portuguese-states-for-woocommerce' ),
	'PA' => __( 'Portalegre', 'portuguese-states-for-woocommerce' ),
	'PO' => __( 'oPorto', 'portuguese-states-for-woocommerce' ),
	'AC' => __( 'Azores', 'portuguese-states-for-woocommerce' ),
	'MA' => __( 'Madeira', 'portuguese-states-for-woocommerce' ),
	'SA' => __( 'Santarém', 'portuguese-states-for-woocommerce' ),
	'SE' => __( 'Setúbal', 'portuguese-states-for-woocommerce' ),
	'VC' => __( 'Viana do Castelo', 'portuguese-states-for-woocommerce' ),
	'VR' => __( 'Vila Real', 'portuguese-states-for-woocommerce' ),
	'VI' => __( 'Viseu', 'portuguese-states-for-woocommerce' ),
);

  return $states;
}


/* End Woocommerce Portuguese States. */