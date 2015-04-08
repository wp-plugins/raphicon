<?php
/**
 * Plugin Name: RAphicon
 * Plugin URI: http://radictivemedia.net
 * Description: Bootstrap 3 Glpyhicon And Wordpress Dashicon Plugin - Is a dropdown button on visual editor that will insert Bootstrap 3.3.4 Glyphicon or Wordpress Dashicons into post/page on a shortcode and customizable size and/or color.
 * Version: 2.1
 * Author: rahendz
 * Author URI: http://radictivemedia.net
 * License: GPL2
 */

/*  Copyright 2014  rahendz  (email : me@rahendz.web.id)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists ( 'RAphicon' ) AND defined ( 'ABSPATH' ) ) :
	require_once ABSPATH . "wp-includes/pluggable.php";
	define ( 'RAPHICON_URL', plugin_dir_url ( __FILE__ ) );
	define ( 'RAPHICON_PATH', dirname ( __FILE__ ) );
	define ( 'RAPHICON_URI', $_SERVER['REQUEST_URI'] );
	class RAphicon
	{
		public function __construct()
		{
			add_action ( 'init', array ( &$this, '__initiate' ) );
			add_action ( 'admin_enqueue_scripts', array ( &$this, '__enqueue_scripts' ) );
			add_action ( 'wp_enqueue_scripts', array ( &$this, '__enqueue_script' ) );
			add_shortcode( 'glyphicon', array ( &$this, '__glyphicon' ) );
			add_shortcode( 'dashicons', array ( &$this, '__dashicons' ) );
			add_action ( 'admin_print_scripts', array ( &$this, '__print_scripts' ) );
		}

		public function __initiate()
		{
			ob_start();
			if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) { return; }
			if ( get_user_option('rich_editing') == 'true' )
			{
				add_filter( 'mce_external_plugins', array ( &$this, '__plugins' ) );
				add_filter( 'mce_buttons', array ( &$this, '__buttons' ) );
			}
		}

		public function __buttons ( $buttons )
		{
			array_push ( $buttons, "|", 'RAphicon' );
			return $buttons;
		}

		public function __plugins ( $plugin_array )
		{
			$plugin_array['RAphicon'] = sprintf ( "%s/%s/%s", RAPHICON_URL, "js", "raphicon.tinymce.js" );
			return $plugin_array;
		}

		public function __enqueue_scripts()
		{
			wp_enqueue_style ( 'raphicon', sprintf ( "%s/%s/%s", trim ( RAPHICON_URL, "/" ), 'css', 'raphicon.min.css' ), array(), '1.0.0' );
		}

		public function __enqueue_script()
		{
			wp_enqueue_style ( 'dashicons' );
			wp_enqueue_style ( 'raphicon', sprintf ( "%s/%s/%s", trim ( RAPHICON_URL, "/" ), 'css', 'raphicon.min.css' ), array('dashicons'), '1.0.0' );
		}

		public function __glyphicon ( $atts )
		{
			extract ( shortcode_atts (
				array ( 'type' => 'none', 'size' => 'inherit', 'color' => 'inherit', 'class' => NULL ), $atts, 'glyphicon'
				) );
			$type = is_null ( $class ) ? $type : $type .' '. $class;
			return sprintf ( '<span class="glyphicon glyphicon-%s" style="font-size:%s;color:%s;"></span>', $type, $size, $color );
		}

		public function __dashicons ( $atts )
		{
			extract ( shortcode_atts (
				array ( 'type' => 'none', 'size' => 'inherit', 'color' => 'inherit', 'class' => NULL ), $atts, 'dashicons'
				) );
			$type = is_null ( $class ) ? $type : $type .' '. $class;
			return sprintf ( '<span class="dashicons dashicons-%s raphicon" style="font-size:%s;color:%s;"></span>', $type, $size, $color );
		}

		function __print_scripts(){
			echo "<script type='text/javascript'>\n";
			echo 'var pluginUrl = "'.WP_PLUGIN_URL .'/'. strtolower ( __CLASS__ ) .'/"';
			echo "\n</script>";
		}
	}
	// register_activation_hook ( __FILE__, array ( array ( &$RAphicon, '__init' ), array ( "activate" ) ) );
	// register_deactivation_hook ( __FILE__, array ( array ( &$RAphicon, '__init' ), array ( "deactivate" ) ) );
	$RAphicon = new RAphicon();
endif;