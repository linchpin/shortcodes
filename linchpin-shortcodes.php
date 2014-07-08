<?php
/*
Plugin Name: Linchpin Shortcodes
Plugin URI: http://wordpress.org/extend/plugins/linchpin-shortcodes
Description: A bunch of shortcodes the linchpin uses in most projects
Author: aware
Version: 1.0
Author URI: http://shortcodes.linchpinagency.com
*/

if ( ! class_exists( 'Linchpin_Shortcodes' ) ) {

	/**
	 * Linchpin_Shortcodes class.
	 */
	class Linchpin_Shortcodes {

		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		function __construct() {
			add_action( 'init', array( $this, 'register_shortcodes' ) );
			add_filter( 'widget_text', 'do_shortcode'); // Allow our shortcodes to run in widgets
		}

		/**
		 * register_shortcodes function.
		 *
		 * @access public
		 * @return void
		 */
		function register_shortcodes() {
			add_shortcode( 'email', array( $this, 'obfuscate_email_shortcode' ) );
			add_shortcode( 'date',  array( $this, 'output_date_shortcode' ) );
		}

		/**
		 * obfuscate_email_shortcode function.
		 * Hide Email from Spam Bots
		 *
		 * @access public
		 * @param mixed $atts
		 * @param mixed $content (default: null)
		 * @return void
		 */
		function obfuscate_email_shortcode( $atts , $content = null ) {
	        	if ( ! is_email ( $content ) )
	            		return;

			return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
		}

		/**
		 * output_date_shortcode function.
		 * If no arguments are passed. the default return is Year
		 *
		 * @access public
		 * @param mixed $atts
		 * @return void
		 */
		function output_date_shortcode( $atts ) {
		   extract( shortcode_atts( array(
		      'format' => 'Y',
		   ), $atts ) );

		   $date = date( $format );
		   return $date;
		}
	}
}

$linchpin_shortcodes = new Linchpin_Shortcodes();
