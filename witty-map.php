<?php
/*
Plugin Name: Witty Map
Plugin URI:  
Description: Witty Map, add google map in content 																	area or in template file (using shortcode). Most important you can 																customize its view.
Version:     1.0.3
Author:      Robert John Concepcion
Author URI:  https://github.com/robert-john-concepcion
Text Domain: wporg
Domain Path: /languages
License:     GPL2
 
Witty Map is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Witty Map is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Witty Map. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if( !class_exists('witty_map') )
{

	/**
	 * Initialization
	 *
	 * @class       witty_map
	 * @version     1
	 * @package     wittyMap
	 * @category    Core
	 * @author      Robert John Concepcion
	 */
	class witty_map {

		public function __construct()
		{
			$this->defined_constant();
			$this->includes();
		}

		/**
		 * set some initial value in witty map option page
		 */
		public static function install() {
			update_option( 'wittymap_draggable', 1 );
			update_option( 'wittymap_doubleClickZoom', 1 );
			update_option( 'wittymap_zoomControl', 1 );
			update_option( 'wittymap_scrollWheel', 1 );
			update_option( 'wittymap_streetView', 1 );
			update_option( 'wittymap_labelX', 0 );
			update_option( 'wittymap_labelY', 0 );			
			
		}

		/**
		 * Define this plugin constant
		 */
		public function defined_constant(){

			$this->define( 'WITTY_DIR', dirname( __FILE__ ) );
			$this->define( 'WITTY_DIR_INC', dirname( __FILE__ )."/inc" );
			$this->define( 'WITTY_DIR_URL', plugin_dir_url( dirname(__FILE__) ) . basename(__DIR__) );

		}

		/**
		 * Register constant
		 * @param  [string]	$name  [name of defined constant]
		 * @param  [ any ]	$value [the value of defined constant]
		 * @return void
		 */
		private function define( $name, $value ) {
			/**
			 * check if constant was exist
			 */
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Include core files affects backend and front end
		 */
		private function includes(){

			if( is_admin() ):
				include_once 'admin/class-wittymap-backend.php';
			endif;

			include_once 'public/class-wittymap-public.php';

		}

	}

	new witty_map();

	register_activation_hook( __FILE__, array( 'witty_map', 'install' ) );

}